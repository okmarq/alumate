<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Http\Requests\StoreCityRequest;
use App\Http\Requests\UpdateCityRequest;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $city = City::get()->toJson(JSON_PRETTY_PRINT);
        return response($city, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCityRequest $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:128|unique:cities',
            'state_id' => 'required|integer'
        ]);

        $city = City::create([
            'name' => $validatedData['name'],
            'state_id' => $validatedData['state_id']
        ]);

        return response()->json([
            "message" => "city record created",
            'city' => $city
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (City::where('id', $id)->exists()) {
            $city = City::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($city, 200);
        } else {
            return response()->json([
                'message' => 'City not found'
            ], 404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function showByName($name)
    {
        if (City::where('name', 'like', '%' . $name . '%')->exists()) {
            $city = City::where('name', 'like', '%' . $name . '%')->get()->toJson(JSON_PRETTY_PRINT);
            return response($city, 200);
        } else {
            return response()->json([
                'message' => 'City not found'
            ], 404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function showByStateId($state_id)
    {
        if (City::where('state_id', $state_id)->exists()) {
            $city = City::where('state_id', $state_id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($city, 200);
        } else {
            return response()->json([
                'message' => 'City not found'
            ], 404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function showByNameAndState($name, $state_id)
    {
        if (City::where('state_id', $state_id)->where('name', $name)->exists()) {
            $city = City::where('state_id', $state_id)->where('name', $name)->get()->toJson(JSON_PRETTY_PRINT);
            return response($city, 200);
        } else {
            return response()->json([
                'message' => 'City not found'
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCityRequest  $request
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCityRequest $request, $id)
    {
        if (City::where('id', $id)->exists()) {
            $city = City::find($id);
            $city->name = is_null($request->name) ? $city->name : $request->name;
            $city->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "City not found"
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (City::where('id', $id)->exists()) {
            $city = City::find($id);
            $city->delete();

            return response()->json([
                "message" => "records deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "City not found"
            ], 404);
        }
    }
}
