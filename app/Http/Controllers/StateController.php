<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\StatesResource;
use App\State;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $states = State::with('country')
        //     ->get();

        // return response()->json([
        //     'status' => 'success',
        //     'data' => $states
        // ]);

        // return response()->json(State::all());
        return StatesResource::collection(State::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\State $state
     * @return \Illuminate\Http\Response
     */
    public function show(State $state)
    {
        // return response()->json($state);
        return new StatesResource($state);
    }

    public function showByName($name)
    {
        if (State::where('name', $name)->exists()) {
            $state = State::where('name', $name)->first();
            // return response($city, 200);
            return new StatesResource($state);
        } else {
            return response()->json([
                'message' => 'State not found'
            ], 404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\State $state
     * @return \Illuminate\Http\Response
     */
    public function showByCountryId($country_id)
    {
        if (State::where('country_id', $country_id)->exists()) {
            // $states = State::where('country_id', $country_id)->get();
            // return response($states, 200);
            return StatesResource::collection(State::where('country_id', $country_id)->get());
        } else {
            return response()->json([
                'message' => 'State not found'
            ], 404);
        }
    }
}
