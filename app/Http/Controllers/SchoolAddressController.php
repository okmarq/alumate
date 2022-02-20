<?php

namespace App\Http\Controllers;

use App\Models\SchoolAddress;
use App\Http\Requests\StoreSchoolAddressRequest;
use App\Http\Requests\UpdateSchoolAddressRequest;

class SchoolAddressController extends Controller
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
     * @param  \App\Http\Requests\StoreSchoolAddressRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSchoolAddressRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SchoolAddress  $schoolAddress
     * @return \Illuminate\Http\Response
     */
    public function show(SchoolAddress $schoolAddress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SchoolAddress  $schoolAddress
     * @return \Illuminate\Http\Response
     */
    public function edit(SchoolAddress $schoolAddress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSchoolAddressRequest  $request
     * @param  \App\Models\SchoolAddress  $schoolAddress
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSchoolAddressRequest $request, SchoolAddress $schoolAddress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SchoolAddress  $schoolAddress
     * @return \Illuminate\Http\Response
     */
    public function destroy(SchoolAddress $schoolAddress)
    {
        //
    }
}
