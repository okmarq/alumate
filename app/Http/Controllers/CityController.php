<?php

namespace App\Http\Controllers;

use App\City;
use App\Http\Resources\CitiesResource;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CitiesResource::collection(City::all());
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
        $city = City::create($request->all());
        return new CitiesResource($city);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        return new CitiesResource($city);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function showByName($name)
    {
        if (City::where('name', $name)->exists()) {
            $city = City::where('name', $name)->get();
            // return response($city, 200);
            return new CitiesResource($city);
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
            $city = City::where('state_id', $state_id)->get();
            // return response($city, 200);
            return new CitiesResource($city);
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
    public function showByNameAndState($state_id, $name)
    {
        if (City::where('state_id', $state_id)->where('name', $name)->exists()) {
            $city = City::where('state_id', $state_id)->where('name', $name)->first();
            // return response($city, 200);
            return new CitiesResource($city);
        } else {
            return response()->json([
                'message' => 'City not found'
            ], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
        $city->update($request->all());
        return new CitiesResource($city);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        $city->delete();
        return response(null, 204);
    }
}
