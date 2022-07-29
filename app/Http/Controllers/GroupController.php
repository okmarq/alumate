<?php

namespace App\Http\Controllers;

use App\Group;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Optix\Media\MediaUploader;
use App\School;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::with('school')->get();
       // return response()->json($groups);

	    return response()->json([
            'status' => 'success',
            'data' => $groups
        ]);
    }


    public function getAllGroupsUnderSchool(School $school)
    {
        $groups = Group::where('school_id', $school->id)->with('school')->get();
        return $groups;
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
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "name" => "required",
            "certificate" => "required",
            "photo" => "nullable|image",
            "year" => "bail|required|digits:4",
            "school_id" => "bail|required|exists:schools,id"
        ]);

        $input = $request->all();
        $group = Group::create($input);
        $group->users()->attach(auth('api')->id(), ['admin' => '2']);


        $file = $request->file('photo');
        if ($file) {
            $media = MediaUploader::fromFile($file)->upload();
            $group->attachMedia($media, 'group');
        }
        $group->getMedia('photo');
        $group->photo = $group->getFirstMediaUrl('group');
        $group->save();

        return response()->json($group);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Group $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        return response()->json($group->users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Group $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Group $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        $this->validate($request, [
            "name" => "nullable",
            "certificate" => "nullable",
            "photo" => "nullable|image",
            "year" => "bail|nullable|digits:4",
            "school_id" => "bail|nullable|exists:schools,id"
        ]);

        $input = $request->all();
        $group->update($input);

        $file = $request->file('photo');

        if ($file) {

            $medias = $group->getMedia('photo');

            foreach($medias as $mediaItem){
                $mediaItem->delete();
            }

            $media = MediaUploader::fromFile($file)->upload();

                $group->attachMedia($media, 'photo');
                $group->refresh();
        }

        $group->getMedia('photo');
        $group->photo = $group->getFirstMediaUrl('photo');
        $group->save();

        return response()->json([
            'status' => 'success',
            'data' => $group
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Group $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        //
    }

    /**
     * Join group
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function join(Request $request)
    {
        $this->validate($request, [
            'group_id' => 'required|exists:groups,id'
        ]);

        $group = Group::find($request->group_id);
        $user = User::find($request->user_id);
        $userGroups = $user->groups()->whereIn('groups.id', [$request->group_id])->get();

        if ($userGroups->isEmpty())
        {
            $totalMembers = \DB::table('group_user')->whereGroupId($request->group_id)->count();
            // auth('api')->id()
            $group->users()->attach($user, ['admin' => $totalMembers <= 3 ? '1' : '0']);
        }

        return response()->json($group);
    }

    /**
     * Join group
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function leave(Request $request)
    {
        $this->validate($request, ['group_id' => 'required|exists:groups,id']);
        $group = Group::find($request->group_id);
        $group->users()->detach(auth('api')->id());

        return response()->json($group);
    }
}
