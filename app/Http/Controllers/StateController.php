<?php

namespace App\Http\Controllers;

use App\Models\State;
use App\Http\Requests\StoreStateRequest;
use App\Http\Requests\UpdateStateRequest;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $state = State::get()->toJson(JSON_PRETTY_PRINT);
        return response($state, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStateRequest $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:64|unique:states',
            'state_id' => 'required|integer',
        ]);

        $state = State::create([
            'name' => $validatedData['name'],
            'state_id' => $validatedData['state_id'],
        ]);

        return response()->json([
            "message" => "state record created",
            'state' => $state
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\State  $state
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (State::where('id', $id)->exists()) {
            $state = State::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($state, 200);
        } else {
            return response()->json([
                'message' => 'State not found'
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStateRequest  $request
     * @param  \App\Models\State  $state
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStateRequest $request, $id)
    {
        if (State::where('id', $id)->exists()) {
            $state = State::find($id);
            $state->name = is_null($request->name) ? $state->name : $request->name;
            $state->state_id = is_null($request->state_id) ? $state->state_id : $request->state_id;
            $state->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "State not found"
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\State  $state
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (State::where('id', $id)->exists()) {
            $state = State::find($id);
            $state->delete();

            return response()->json([
                "message" => "records deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "State not found"
            ], 404);
        }
    }
}
