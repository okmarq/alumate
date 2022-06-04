<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
        $states = State::with('country')
            ->get();

        return response()->json([
            'status' => 'success',
            'data' => $states
        ]);

        // return response()->json(State::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\State $state
     * @return \Illuminate\Http\Response
     */
    public function show(State $state)
    {
        return response()->json($state);
    }
}
