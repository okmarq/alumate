<?php

namespace App\Http\Controllers;

use App\Models\ProfessionalGroup;
use App\Http\Requests\StoreProfessionalGroupRequest;
use App\Http\Requests\UpdateProfessionalGroupRequest;

class ProfessionalGroupController extends Controller
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
     * @param  \App\Http\Requests\StoreProfessionalGroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfessionalGroupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProfessionalGroup  $professionalGroup
     * @return \Illuminate\Http\Response
     */
    public function show(ProfessionalGroup $professionalGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProfessionalGroup  $professionalGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(ProfessionalGroup $professionalGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfessionalGroupRequest  $request
     * @param  \App\Models\ProfessionalGroup  $professionalGroup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfessionalGroupRequest $request, ProfessionalGroup $professionalGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProfessionalGroup  $professionalGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProfessionalGroup $professionalGroup)
    {
        //
    }
}
