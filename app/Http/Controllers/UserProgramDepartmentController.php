<?php

namespace App\Http\Controllers;

use App\Models\UserProgramDepartment;
use App\Http\Requests\StoreUserProgramDepartmentRequest;
use App\Http\Requests\UpdateUserProgramDepartmentRequest;

class UserProgramDepartmentController extends Controller
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
     * @param  \App\Http\Requests\StoreUserProgramDepartmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserProgramDepartmentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserProgramDepartment  $userProgramDepartment
     * @return \Illuminate\Http\Response
     */
    public function show(UserProgramDepartment $userProgramDepartment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserProgramDepartment  $userProgramDepartment
     * @return \Illuminate\Http\Response
     */
    public function edit(UserProgramDepartment $userProgramDepartment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserProgramDepartmentRequest  $request
     * @param  \App\Models\UserProgramDepartment  $userProgramDepartment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserProgramDepartmentRequest $request, UserProgramDepartment $userProgramDepartment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserProgramDepartment  $userProgramDepartment
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserProgramDepartment $userProgramDepartment)
    {
        //
    }
}
