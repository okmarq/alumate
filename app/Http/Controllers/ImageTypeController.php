<?php

namespace App\Http\Controllers;

use App\Models\ImageType;
use App\Http\Requests\StoreImageTypeRequest;
use App\Http\Requests\UpdateImageTypeRequest;

class ImageTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imagetypes = ImageType::get()->toJson(JSON_PRETTY_PRINT);
        return response($imagetypes, 200);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreImageTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImageTypeRequest $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:128',
            'city_id' => 'required|integer',
            'image_type_id' => 'required|integer'
        ]);

        $image_type = ImageType::create([
            'name' => $validatedData['name'],
            'city_id' => $validatedData['city_id'],
            'image_type_id' => $validatedData['image_type_id']
        ]);

        return response()->json([
            "message" => "image type record created",
            'image_type' => $image_type
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ImageType  $imagetype
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (ImageType::where('id', $id)->exists()) {
            $imagetype = ImageType::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($imagetype, 200);
        } else {
            return response()->json([
                'message' => 'Image type not found'
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateImageTypeRequest  $request
     * @param  \App\Models\ImageType  $imagetype
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateImageTypeRequest $request, $id)
    {
        if (ImageType::where('id', $id)->exists()) {
            $imagetype = ImageType::find($id);
            $imagetype->name = is_null($request->name) ? $imagetype->name : $request->name;
            $imagetype->city_id = is_null($request->city_id) ? $imagetype->city_id : $request->city_id;
            $imagetype->imagetype_type_id = is_null($request->imagetype_type_id) ? $imagetype->imagetype_type_id : $request->imagetype_type_id;
            $imagetype->save();

            return response()->json([
                "message" => "record updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "Image type not found"
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ImageType  $imagetype
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (ImageType::where('id', $id)->exists()) {
            $imagetype = ImageType::find($id);
            $imagetype->delete();

            return response()->json([
                "message" => "record deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "Image type not found"
            ], 404);
        }
    }
}
