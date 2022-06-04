<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use App\Membership;
use App\School;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return response()->json([
            'status' => 'success',
            'data' => $user->load('attendEvent'),
            'followers' => $user->followers,
            'following' => $user->followings,
            'blockedList' => $user->subscriptions()->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => 'nullable',
            'email' => ['sometimes', 'required', 'email:filter,rfc', Rule::unique('users', 'email')->ignore($user->id)],
            'photo' => 'nullable|image',
            'player_id' => 'nullable',
            'status' => 'nullable',
            'country_of_residence' => 'nullable',
            'country_of_origin' => 'nullable',
            'state_of_residence' => 'nullable',
            'state_of_origin' => 'nullable',
            'profession' => 'nullable',
            'phone' => 'nullable',
            'date_of_birth' => 'nullable',
            'gender' => 'nullable',
            'marital' => 'nullable',
            'hobbies' => 'nullable'
        ]);

        $input = $request->all();
        $user->update($input);

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoPath = $photo->storePubliclyAs('users', 'user' . $user->id . '.' .
                $photo->getClientOriginalExtension());
            $user->photo = env('APP_URL') . '/storage/' . $photoPath;
            $user->save();
        }

        return response()->json([
            'status' => 'success',
            'data' => $user
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    /**
     * Get user groups
     * @param User $user
     * @return \Illuminate\Http\JsonResponse
     */
    public function getGroups(User $user)
    {
       return response()->json($user->groups->load('school'));
    }

     /**
     * Get my Pgroup Users
     * @param User $user
     * @return \Illuminate\Http\JsonResponse
     */
    public function getMyPGroups(User $user)
    {

        $mygroups = Membership::with(['user', 'pgroup'])->where('user_id', $user->id)->get();
        return $mygroups;
        // return response()->json($user->pgroups->load('school'));
    }

    /**
     *
     * Follow Requests
     */

     public function followRequest(Request $request){
        $user = User::find($request->user_id);

        $response = auth()->user()->toggleFollow($user);

        return response()->json([
            'status' => 'followed'
        ]);
     }


    /**
     *
     * Follow Requests
     */

     public function blockRequest(Request $request){
        $user = User::find($request->user_id);

        $response = auth()->user()->toggleSubscribe($user);

        return response()->json([
            'status' => 'blocked'
        ]);
     }

     public function myFollowers()
     {
         $user = auth('api')->user();
         $followers = $user->followings;
         return response()->json([
             'status' => 'success',
             'data' => $followers
         ]);
     }

    //
    public function totalNoOfUsersAndSchools()
    {
        $users = User::count();
        $schools = School::count();
        return response()->json([
            'status' => 'success',
            'data' => [
                'schools' => $schools,
                'users' => $users
            ]
        ]);
        return $users;
    }


}
