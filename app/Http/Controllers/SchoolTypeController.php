<?php

namespace App\Http\Controllers;

use App\Models\SchoolType;
use App\Http\Requests\StoreSchoolTypeRequest;
use App\Http\Requests\UpdateSchoolTypeRequest;

class SchoolTypeController extends Controller
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
     * @param  \App\Http\Requests\StoreSchoolTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSchoolTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SchoolType  $schoolType
     * @return \Illuminate\Http\Response
     */
    public function show(SchoolType $schoolType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SchoolType  $schoolType
     * @return \Illuminate\Http\Response
     */
    public function edit(SchoolType $schoolType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSchoolTypeRequest  $request
     * @param  \App\Models\SchoolType  $schoolType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSchoolTypeRequest $request, SchoolType $schoolType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SchoolType  $schoolType
     * @return \Illuminate\Http\Response
     */
    public function destroy(SchoolType $schoolType)
    {
        //
    }
}
