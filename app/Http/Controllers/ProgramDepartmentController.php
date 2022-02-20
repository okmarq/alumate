<?php

namespace App\Http\Controllers;

use App\Models\ProgramDepartment;
use App\Http\Requests\StoreProgramDepartmentRequest;
use App\Http\Requests\UpdateProgramDepartmentRequest;

class ProgramDepartmentController extends Controller
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
     * @param  \App\Http\Requests\StoreProgramDepartmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProgramDepartmentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProgramDepartment  $programDepartment
     * @return \Illuminate\Http\Response
     */
    public function show(ProgramDepartment $programDepartment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProgramDepartment  $programDepartment
     * @return \Illuminate\Http\Response
     */
    public function edit(ProgramDepartment $programDepartment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProgramDepartmentRequest  $request
     * @param  \App\Models\ProgramDepartment  $programDepartment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProgramDepartmentRequest $request, ProgramDepartment $programDepartment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProgramDepartment  $programDepartment
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProgramDepartment $programDepartment)
    {
        //
    }
}
