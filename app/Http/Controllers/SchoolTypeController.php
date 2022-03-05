<?php

namespace App\Http\Controllers;

use App\Models\SchoolType;
use App\Http\Requests\StoreSchoolTypeRequest;
use App\Http\Requests\UpdateSchoolTypeRequest;

class SchoolTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $school_types = SchoolType::get()->toJson(JSON_PRETTY_PRINT);
        return response($school_types, 200);
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
     * @param  \App\Http\Requests\StoreSchoolTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSchoolTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SchoolType  $schoolType
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (SchoolType::where('id', $id)->exists()) {
            $school_type = SchoolType::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
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
     * @param  \App\Models\SchoolType  $schoolType
     * @return \Illuminate\Http\Response
     */
    public function edit(SchoolType $schoolType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSchoolTypeRequest  $request
     * @param  \App\Models\SchoolType  $schoolType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSchoolTypeRequest $request, $id)
    {
        if (SchoolType::where('id', $id)->exists()) {
            $school_type = SchoolType::find($id);
            $school_type->name = is_null($request->name) ? $school_type->name : $request->name;
            $school_type->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "School type not found"
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SchoolType  $schoolType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(SchoolType::where('id', $id)->exists()) {
            $schooltype = SchoolType::find($id);
            $schooltype->delete();

            return response()->json([
              "message" => "records deleted"
            ], 202);
          } else {
            return response()->json([
              "message" => "School type not found"
            ], 404);
          }
        }
    }
}
