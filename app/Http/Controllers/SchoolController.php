<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Http\Requests\StoreSchoolRequest;
use App\Http\Requests\UpdateSchoolRequest;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $school = School::get()->toJson(JSON_PRETTY_PRINT);
        return response($school, 200);
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
     * @param  \App\Http\Requests\StoreSchoolRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSchoolRequest $request)
    {
        // $school = new School;
        // $school->name = $request->name;
        // $school->abbr = $request->abbr;
        // $school->city_id = $request->city_id;
        // $school->school_type_id = $request->school_type_id;
        // $school->year_founded = $request->year_founded;

        $validatedData = $request->validate([
            'name' => 'required|string|max:128|unique:schools',
            'abbr' => 'required|string|max:32',
            'city_id' => 'required|integer',
            'school_type_id' => 'required|integer',
            'year_founded' => 'required|date|min:4',
        ]);

        $school = School::create([
            'name' => $validatedData['name'],
            'abbr' => $validatedData['abbr'],
            'city_id' => $validatedData['city_id'],
            'school_type_id' => $validatedData['school_type_id'],
            'year_founded' => $validatedData['year_founded']
        ]);

        return response()->json([
            "message" => "school record created",
            'school' => $school
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (School::where('id', $id)->exists()) {
            $school_type = School::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($school_type, 200);
        } else {
            return response()->json([
                'message' => 'School not found'
            ], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSchoolRequest  $request
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSchoolRequest $request, $id)
    {
        if (School::where('id', $id)->exists()) {
            $school_type = School::find($id);
            $school_type->name = is_null($request->name) ? $school_type->name : $request->name;
            $school_type->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "School not found"
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (School::where('id', $id)->exists()) {
            $school = School::find($id);
            $school->delete();

            return response()->json([
                "message" => "records deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "School not found"
            ], 404);
        }
    }
}
