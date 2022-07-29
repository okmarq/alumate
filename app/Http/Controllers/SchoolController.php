<?php

namespace App\Http\Controllers;

use App\Group;
use App\Http\Controllers\Controller;
use App\Http\Resources\SchoolsResource;
use App\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(School::with('state')->get());
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
            'name' => 'bail|required|unique:schools',
            'city' => 'bail|required',
            'state_id' => 'bail|required|exists:states,id',
            'status' => 'bail|required|in:Primary,Secondary,Tertiary',
            'user_id' => 'nullable|exists:users,id',
        ]);

        $school = School::create($request->all());

        return response()->json($school);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\School $school
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
        return response()->json($school->load('state')->load('groups.users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\School $school
     * @return \Illuminate\Http\Response
     */
    public function showByCityName($city)
    {
        if (School::where('city', $city)->exists()) {
            return SchoolsResource::collection(
                School::where('city', $city)->get()
            );
        } else {
            return response()->json(
                [
                    'message' => 'School not found',
                ],
                404
            );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    // public function showByCityId($city_id)
    // {
    //     if (School::where('city_id', $city_id)->exists()) {
    //         return SchoolsResource::collection(School::where('city_id', $city_id)->get());
    //     } else {
    //         return response()->json([
    //             'message' => 'School not found'
    //         ], 404);
    //     }
    // }

    public function showByName($name)
    {
        if (School::where('name', $name)->exists()) {
            $school = School::where('name', $name)->first();
            return new SchoolsResource($school);
        } else {
            return response()->json(
                [
                    'message' => 'School not found',
                ],
                404
            );
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\School $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\School $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School $school)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\School $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\School $school
     * @return \Illuminate\Http\Response
     */
    public function members(School $school)
    {
        return response()->json($school->load('groups.users'));
    }

    public function schoolAlbumCount(School $school)
    {
        $groups = Group::where('school_id', $school->id)->get();
        $group_members = [];
        foreach ($groups as $group) {
            $group_members[] = $group->totalMembers;
        }
        // return $groups->totalMembers;
        return [
            'status' => 'success',
            'data' => array_sum($group_members),
        ];
    }
}
