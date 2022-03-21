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
        $schools = School::get()->toJson(JSON_PRETTY_PRINT);
        return response($schools, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSchoolRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSchoolRequest $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:128',
            'city_id' => 'required|integer',
            'school_type_id' => 'required|integer'
        ]);

        $school = School::create([
            'name' => $validatedData['name'],
            'city_id' => $validatedData['city_id'],
            'school_type_id' => $validatedData['school_type_id']
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
            $school = School::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($school, 200);
        } else {
            return response()->json([
                'message' => 'School not found'
            ], 404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function showByName($name)
    {
        if (School::where('name', 'like', '%' . $name . '%')->exists()) {
            $schools = School::where('name', 'like', '%' . $name . '%')->get()->toJson(JSON_PRETTY_PRINT);
            return response($schools, 200);
        } else {
            return response()->json([
                'message' => 'School not found'
            ], 404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function showByStateShcoolType($state_id, $school_type_id)
    {
        // use state id to get all cities in state, then use city id to get all schools in city, then filter school by school type id

        if (School::where('school_type_id', $school_type_id)->exists()) {
            $schools = School::where('school_type_id', $school_type_id)
                ->join('cities', 'school.city_id', '=', 'city.id', 'inner', true)
                ->join('states', 'city.state_id', '=', 'state.id', 'inner', true)
                ->where('state_id', $state_id)
                ->get()
                ->toJson(JSON_PRETTY_PRINT);
            // DB::table('school')->where('school_id', $school_id)
            // SELECT * FROM `schools` INNER JOIN `cities` ON `schools`.`city_id`=`cities`.`id` INNER JOIN `states` ON `cities`.`state_id`=`states`.`id` WHERE `school_type_id`=6 AND `city_id`=628;
            return response($schools, 200);
        } else {
            return response()->json([
                'message' => 'class mates not found'
            ], 404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function showByCityId($city_id)
    {
        if (School::where('city_id', $city_id)->exists()) {
            $schools = School::where('city_id', $city_id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($schools, 200);
        } else {
            return response()->json([
                'message' => 'School not found'
            ], 404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function showByNameAndCity($city_id, $name)
    {
        if (School::where('city_id', $city_id)->where('name', $name)->exists()) {
            $school = School::where('city_id', $city_id)->where('name', $name)->get()->toJson(JSON_PRETTY_PRINT);
            return response($school, 200);
        } else {
            return response()->json([
                'message' => 'School not found'
            ], 404);
        }
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
            $school = School::find($id);
            $school->name = is_null($request->name) ? $school->name : $request->name;
            $school->city_id = is_null($request->city_id) ? $school->city_id : $request->city_id;
            $school->school_type_id = is_null($request->school_type_id) ? $school->school_type_id : $request->school_type_id;
            $school->save();

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
