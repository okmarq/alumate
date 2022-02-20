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
     * @param  \App\Http\Requests\StoreImageTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImageTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ImageType  $imageType
     * @return \Illuminate\Http\Response
     */
    public function show(ImageType $imageType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ImageType  $imageType
     * @return \Illuminate\Http\Response
     */
    public function edit(ImageType $imageType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateImageTypeRequest  $request
     * @param  \App\Models\ImageType  $imageType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateImageTypeRequest $request, ImageType $imageType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ImageType  $imageType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImageType $imageType)
    {
        //
    }
}
