<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\UpdateImageRequest;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::get()->toJson(JSON_PRETTY_PRINT);
        return response($images, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreImageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImageRequest $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:128',
            'image_type_id' => 'required|integer'
        ]);

        $image_type = Image::create([
            'name' => $validatedData['name'],
            'image_type_id' => $validatedData['image_type_id']
        ]);

        return response()->json([
            "message" => "image record created",
            'image' => $image_type
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Image::where('id', $id)->exists()) {
            $image = Image::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($image, 200);
        } else {
            return response()->json([
                'message' => 'Image not found'
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateImageRequest  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateImageRequest $request, $id)
    {
        if (Image::where('id', $id)->exists()) {
            $image = Image::find($id);
            $image->name = is_null($request->name) ? $image->name : $request->name;
            $image->city_id = is_null($request->city_id) ? $image->city_id : $request->city_id;
            $image->image_type_id = is_null($request->image_type_id) ? $image->image_type_id : $request->image_type_id;
            $image->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "Image not found"
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Image::where('id', $id)->exists()) {
            $image = Image::find($id);
            $image->delete();

            return response()->json([
                "message" => "records deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "Image not found"
            ], 404);
        }
    }
}
