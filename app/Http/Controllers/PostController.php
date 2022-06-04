<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CreatePostRequest;
use App\Post;
use App\User;
use App\Postlike;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    protected $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth('api')->user();

        $following = DB::table('user_follower')->where('follower_id', $user->id)->pluck('following_id');
        $following = $following->toArray();

        $today = Carbon::now();
        // $nextDay = Carbon::now()->addDays(5);
        // $today = $nextDay;

        //Step 1: get todays post for today from my followers
        $todays_psts_from_pals = Post::with(['user', 'category'])
            ->latest()
            ->whereDate('created_at', $today)
            ->whereIn('user_id', $following)
            ->get();
        //Step 2: get todays post from non pales
        $todays_psts_from_non_pals = Post::with(['user', 'category'])
            ->latest()
            ->whereDate('created_at', $today)
            ->whereNotIn('user_id', $following)
            ->get();
        //Step 3:: fetch post excluding today's post from everybody and order the post by the most recents
        $older_posts = Post::with(['user', 'category'])
            ->whereDate('created_at', '!=', $today)
            ->orderBy('created_at', 'desc')
            ->get();

        /// All Posts
        //
        // today's post(non available for pals and non-pals), older posts available
        if (count($todays_psts_from_pals) == 0 && count($todays_psts_from_non_pals) == 0) {

            $posts = $older_posts->paginate(40);
        }
        // today's post(pals only) and older post exist
        elseif (count($todays_psts_from_pals) > 0 && count($todays_psts_from_non_pals) == 0) {
            $posts = $todays_psts_from_pals->merge($older_posts)->paginate(40);
        }
        // post is available for today(non pals only)
        elseif (count($todays_psts_from_pals) == 0 && count($todays_psts_from_non_pals) > 0) {
            $posts = $todays_psts_from_non_pals->merge($older_posts)->paginate(40);
        }
        // post is available for today(pals and non pals) and also older post is available
        else {
            $posts = $todays_psts_from_pals->merge($todays_psts_from_non_pals, $older_posts)->paginate(40);
        }

        // $posts = array_merge(
        //     Post::with(['user', 'category'])->latest()->whereIn('user_id', $following)->get()->toArray(),
        //     Post::with(['user', 'category'])->latest()->whereNotIn('user_id', $following)->get()->toArray()
        // );

        return response()->json([
            'status' => 'success',
            'data' => $posts
        ]);
    }


    public function getAllPostByClassMate()
    {

        return auth()->id();
        $my_groups = DB::table('group_user')
            ->where('user_id', auth()->id())
            ->pluck('group_id');
        // return $my_groups;


        $posts = Post::whereIn('group_id', $my_groups)
            ->with(['category', 'user'])
            // ->latest()
            ->get();
        return response()->json([
            'status' => 'success',
            'data' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(CreatePostRequest $request)
    {
        $input = $request->all();

        $post =  Post::create($input);

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoPath = $photo->storePubliclyAs('posts', 'post' . $post->id . '.' .
                $photo->getClientOriginalExtension());
            $post->photo = env('APP_URL') . '/storage/' . $photoPath;
            $post->save();
        } elseif ($request->hasFile('video')) {
            $video = $request->file('video');
            $videoPath = $video->storePubliclyAs('posts', 'post' . $post->id . '.' .
                $video->getClientOriginalExtension());
            $post->video = env('APP_URL') . '/storage/' . $videoPath;
            $post->save();
        }

        return response()->json([
            'status' => 'success',
            'data' => $post
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return response()->json([
            'status' => 'success',
            'data' => $post->load('user')->load('category')
        ]);
    }

    public function showAllPost(Post $post){

        return response()->json([
            'status' => 'success',
            'data' => $post->load('user')->load('category')
        ]);
//        return $this->post->load('user')
//                          ->load('category')->latest()->paginate(20);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {

        $this->validate($request, [
            "title" => "nullable",
            "content" => "nullable",
            // "photo" => 'sometimes|image',
            // "video" => 'sometimes|mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040',
            "isPromoted" => "nullable",
            "reposted" => "nullable",
            "reposterName" => "nullable",
            "repostId" => "nullable",
            "repostHasPhoto" => "nullable|in:false,true",
            "user_id" => "required|exists:users,id",
            "category_id" => "required|exists:categories,id"
        ]);

        $input = $request->all();

        if ($request->hasFile('photo')) {
            //delete old image
            $this->deleteImage($post);
            //delete old video if it exit
            $this->deleteVideo($post);
            $post->update($input);
            $photo = $request->file('photo');
            $photoPath = $photo->storePubliclyAs('posts', 'post' . $post->id . '.' . $photo->getClientOriginalExtension());
            $post->photo = env('APP_URL') . '/storage/' . $photoPath;
            $post->video = NULL;
            $post->save();
            //
        } elseif ($request->hasFile('video') && $request->video != '') {
            //delete old video
            $this->deleteVideo($post);
            //delete old image
            $this->deleteImage($post);
            $video = $request->file('video');
            $videoPath = $video->storePubliclyAs('posts', 'post' . $post->id . '.' .
                $video->getClientOriginalExtension());
            $post->video = env('APP_URL') . '/storage/' . $videoPath;
            $post->photo = NULL;
            $post->save();
        } else {
            $previous_img = $post->photo;
            $previous_video = $post->video;
            $post->update($request->all());
            $post->video = $previous_video;
            $post->photo = $previous_img;
            $post->save();
        }

        return response()->json([
            'status' => 'success',
            'data' => $post
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        // $posts = Post::find($post);
        $this->deleteVideo($post);
        $this->deleteImage($post);

        $post->delete();

        return response()->json([
            'status' => 'Resource Deleted',
            'data' => $post
        ]);
    }

    /**
     * Get user groups
     * @param Post $post
     * @return \Illuminate\Http\JsonResponse
     */
    public function getComments(Post $post)
    {
        return response()->json($post->comment->load('user'));
    }


    public function liker($postId, $userId, $value)
    {
        $user = User::findOrFail($userId); //or use auth()->user(); if it's the authenticated user
        $user->post()->attach($postId);
        return response()->json([
            'status' => 'success'
        ]);
    }

    public function getUserPost($user)
    {
        $user = auth()->user();
        $post = Post::with(['user', 'category'])
            ->where('user_id', $user->id)
            ->latest()->paginate(10);

        return response()->json([
            'status' => 'success',
            'data' => $post
        ]);

//        $post = Post::with(['user', 'category'])->where('user_id', $user)->latest()->paginate(10);
//
//        return response()->json([
//            'status' => 'success',
//            'data' => $post
//        ]);
    }

    public function deleteVideo($post)
    {
        if ($post->video) {
            $file = $post->video;
            $str_arr = explode("/", $file);
            // $img = $str_arr[5];
            $video = end($str_arr);
            Storage::delete("posts/" . $video);
            return true;
        }
    }

    public function deleteImage($post)
    {
        if ($post->photo) {
            $file = $post->photo;
            $str_arr = explode("/", $file);
            // $img = $str_arr[5];
            $img = end($str_arr);
            Storage::delete("posts/" . $img);
            return true;
        } else {
            return false;
        }
    }

    public function allPost()
    {
        $user = auth('api')->user();

        $following = DB::table('user_follower')->where('follower_id', $user->id)->pluck('following_id');
        $following = $following->toArray();

        $today = Carbon::now();
        // $nextDay = Carbon::now()->addDays(5);
        // $today = $nextDay;

        //Step 1: get todays post for today from my followers
        $todays_psts_from_pals = Post::with(['user', 'category'])
            ->latest()
            ->whereDate('created_at', $today)
            ->whereIn('user_id', $following)
            ->get();
        //Step 2: get todays post from non pales
        $todays_psts_from_non_pals = Post::with(['user', 'category'])
            ->latest()
            ->whereDate('created_at', $today)
            ->whereNotIn('user_id', $following)
            ->get();
        //Step 3:: fetch post excluding today's post from everybody and order the post by the most recents
        $older_posts = Post::with(['user', 'category'])
            ->whereDate('created_at', '!=', $today)
            ->orderBy('created_at', 'desc')
            ->get();

        /// All Posts
        //
        // today's post(non available for pals and non-pals), older posts available
        if (count($todays_psts_from_pals) == 0 && count($todays_psts_from_non_pals) == 0) {

            $posts = $older_posts->paginate(40);
        }
        // today's post(pals only) and older post exist
        elseif (count($todays_psts_from_pals) > 0 && count($todays_psts_from_non_pals) == 0) {
            $posts = $todays_psts_from_pals->merge($older_posts)->paginate(40);
        }
        // post is available for today(non pals only)
        elseif (count($todays_psts_from_pals) == 0 && count($todays_psts_from_non_pals) > 0) {
            $posts = $todays_psts_from_non_pals->merge($older_posts)->paginate(40);
        }
        // post is available for today(pals and non pals) and also older post is available
        else {
            $posts = $todays_psts_from_pals->merge($todays_psts_from_non_pals, $older_posts)->paginate(40);
        }

        // $posts = array_merge(
        //     Post::with(['user', 'category'])->latest()->whereIn('user_id', $following)->get()->toArray(),
        //     Post::with(['user', 'category'])->latest()->whereNotIn('user_id', $following)->get()->toArray()
        // );

        return response()->json([
            'status' => 'success',
            'data' => $posts
        ]);
    }

}
