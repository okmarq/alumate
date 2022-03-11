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
        $validatedData = $request->validate(
            [
                'name' => 'required|string|max:128|unique:alumnis',
                // 'abbr' => 'required|string|max:32',
                'city_id' => 'required|integer',
                'alumni_type_id' => 'required|integer',
                // 'year_founded' => 'required|date|min:4',
            ]
        );

        $alumni = Alumni::create(
            [
                'name' => $validatedData['name'],
                // 'abbr' => $validatedData['abbr'],
                'city_id' => $validatedData['city_id'],
                'alumni_type_id' => $validatedData['alumni_type_id'],
                // 'year_founded' => $validatedData['year_founded']
            ]
        );

        return response()->json(
            [
                "message" => "alumni record created",
                'alumni' => $alumni
            ],
            201
        );
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
            $alumni->name = is_null($request->name) ? $alumni->name : $request->name;
            // $alumni->abbr = is_null($request->abbr) ? $alumni->abbr : $request->abbr;
            $alumni->city_id = is_null($request->city_id) ? $alumni->city_id : $request->city_id;
            $alumni->alumni_type_id = is_null($request->alumni_type_id) ? $alumni->alumni_type_id : $request->alumni_type_id;
            // $alumni->year_founded = is_null($request->year_founded) ? $alumni->year_founded : $request->year_founded;
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
