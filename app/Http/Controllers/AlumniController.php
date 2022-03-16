<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Http\Requests\StoreAlumniRequest;
use App\Http\Requests\UpdateAlumniRequest;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumni = Alumni::get()->toJson(JSON_PRETTY_PRINT);
        return response($alumni, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreAlumniRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAlumniRequest $request)
    {
        $validatedData = $request->validate([
            'graduation_year' => 'required|integer|max:4',
            'school_id' => 'required|integer',
            'user_id' => 'required|integer'
        ]);

        $alumni = Alumni::create([
            'graduation_year' => $validatedData['graduation_year'],
            'school_id' => $validatedData['school_id'],
            'user_id' => $validatedData['user_id']
        ]);

        return response()->json([
            "message" => "alumni record created",
            'alumni' => $alumni
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Alumni $alumni
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Alumni::where('id', $id)->exists()) {
            $alumni = Alumni::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($alumni, 200);
        } else {
            return response()->json([
                'message' => 'Alumni not found'
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAlumniRequest  $request
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAlumniRequest $request, $id)
    {
        if (Alumni::where('id', $id)->exists()) {
            $alumni = Alumni::find($id);
            $alumni->graduation_year = is_null($request->graduation_year) ? $alumni->graduation_year : $request->graduation_year;
            $alumni->school_id = is_null($request->school_id) ? $alumni->school_id : $request->school_id;
            $alumni->user_id = is_null($request->user_id) ? $alumni->user_id : $request->user_id;

            $alumni->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "Alumni not found"
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Alumni::where('id', $id)->exists()) {
            $alumni = Alumni::find($id);
            $alumni->delete();

            return response()->json([
                "message" => "records deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "Alumni not found"
            ], 404);
        }
    }
}
