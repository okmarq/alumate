<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $thread = Thread::with('user')->with('pgroup')->get();

        return response()->json([
            'status' => 'success',
            'data' => $thread
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request, [
        "title" => "required",
        "content" => "required",
        "photo" => "nullable|image",
        "video" => "nullable|mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040",
        "status" => "nullable|in:0,1",
        "isPromoted" => "nullable",
        "reposted" => "nullable",
        "reposterName" => "nullable",
        "repostId" => "nullable",
        "repostHasPhoto" => "nullable",
        "report_id" => "nullable|in:0",
        "user_id" => "required|exists:users,id",
        "category_id" => "required|exists:categories,id",
        "group_id" => "nullable|exists:groups,id",
        "school_id" => "nullable|exists:schools,id",
        "pgroup_id" => "required|exists:pgroups,id"

       ]);

       $input = $request->all();
       $thread = Thread::create($input);

       if ($request->hasFile('photo')) {
        $photo = $request->file('photo');
        $photoPath = $photo->storePubliclyAs('threads', 'thread' . $thread->id . '.' .
            $photo->getClientOriginalExtension());
        $thread->photo = env('APP_URL') . '/storage/' . $photoPath;
        $thread->save();

        }elseif ($request->hasFile('video')) {
            $video = $request->file('video');
            $videoPath = $video->storePubliclyAs('threads', 'thread' . $thread->id . '.' .
                $video->getClientOriginalExtension());
            $thread->video = env('APP_URL') . '/storage/' . $videoPath;
            $thread->save();
        }

        return response()->json([
            'status' => 'success',
            'data' => $thread
        ]);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function show(Thread $thread)
    {
        return response()->json([
            'status' => 'success',
            'data' => $thread->load('user')->load('pgroup')
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function edit(Thread $thread)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Thread $thread)
    {
        $this->validate($request, [
            "title" => "nullable",
            "content" => "nullable",
          //  "photo" => "nullable|image",
          //  "video" => "nullable|mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040",
            "status" => "nullable|in:0,1",
            "isPromoted" => "nullable",
            "reposted" => "nullable",
            "reposterName" => "nullable",
            "repostId" => "nullable",
            "repostHasPhoto" => "nullable",
            "report_id" => "nullable|in:0,1,2,3",
            //"user_id" => "required|exists:users,id",
           // "category_id" => "required|exists:categories,id",
            "group_id" => "nullable|exists:groups,id",
            "school_id" => "nullable|exists:schools,id",
           // "pgroup_id" => "required|exists:pgroups,id"

           ]);

           $input = $request->all();

           if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoPath = $photo->storePubliclyAs('threads', 'thread' . $thread->id . '.' .
                $photo->getClientOriginalExtension());
            $thread->photo = env('APP_URL') . '/storage/' . $photoPath;
            $thread->save;

            }elseif ($request->hasFile('video')) {
                $video = $request->file('video');
                $videoPath = $video->storePubliclyAs('threads', 'thread' . $thread->id . '.' .
                    $video->getClientOriginalExtension());
                $thread->video = env('APP_URL') . '/storage/' . $videoPath;
                $thread->save;
            }

            $thread->update($input);

            if($thread['report_id'] == 3){
                $thread->delete();


            return response()->json([
                'status' => 'Row Deleted'
                ]);
            }

            return response()->json([
                'status' => 'success',
                'data' => $thread
            ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function report(Request $request, Thread $thread)
    {
        $this->validate($request, [
            'report_id' => "required"
           ]);

           $input = $request->all();

           if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoPath = $photo->storePubliclyAs('threads', 'thread' . $thread->id . '.' .
                $photo->getClientOriginalExtension());
            $thread->photo = env('APP_URL') . '/storage/' . $photoPath;

            }elseif ($request->hasFile('video')) {
                $video = $request->file('video');
                $videoPath = $video->storePubliclyAs('threads', 'thread' . $thread->id . '.' .
                    $video->getClientOriginalExtension());
                $thread->video = env('APP_URL') . '/storage/' . $videoPath;
            }

            $thread->update($input);

            if($thread['report_id'] == 3){
                $thread->delete();
            }

            return response()->json([
                'status' => 'success',
                'data' => $thread
            ]);
    }

    // private function userSearch($search_key)
    // {
    //     return Thread::where('report_id', 'LIKE', "%{$search_key}%")->get();
    // }
    // /$delete = ThreadDB::delete('delete users where name = ?', ['John']);
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thread $thread)
    {


        $field = Thread::find($thread);
        $f = Thread::where('report_id', $field->report_id)->first()->pluck('report_id');

        if($f == 3){
            $delete =$f->delete();
        }

        return response()->json([
            'status' => 'Resource Deleted',
            'data' => $thread
        ]);
    }
}
