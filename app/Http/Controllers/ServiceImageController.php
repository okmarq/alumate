<?php

namespace App\Http\Controllers;


use App\ServiceImage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request, [
            'label' => 'required',
            'description'=> "nullable",
            "photo" => 'nullable|image',
             "price" => 'nullable',
            "service_id" => 'required'
            ]);

        $input =  $request->all();
        $serviceImage = ServiceImage::create($input);

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoPath = $photo->storePubliclyAs('service_images', 'service_image' . $serviceImage->id . '.' .
                $photo->getClientOriginalExtension());
            $serviceImage->photo = env('APP_URL') . '/storage/' . $photoPath;
            $serviceImage->save();

        }

        return response()->json([
            'status' => 'success',
            'data' => $serviceImage
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ServiceImage  $serviceImage
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceImage $serviceImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ServiceImage  $serviceImage
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceImage $serviceImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ServiceImage  $serviceImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceImage $serviceImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ServiceImage  $serviceImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceImage $serviceImage)
    {
        //
    }
}
