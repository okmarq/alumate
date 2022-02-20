<?php

namespace App\Http\Controllers;

use App\Models\JobExperience;
use App\Http\Requests\StoreJobExperienceRequest;
use App\Http\Requests\UpdateJobExperienceRequest;

class JobExperienceController extends Controller
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
     * @param  \App\Http\Requests\StoreJobExperienceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobExperienceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobExperience  $jobExperience
     * @return \Illuminate\Http\Response
     */
    public function show(JobExperience $jobExperience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobExperience  $jobExperience
     * @return \Illuminate\Http\Response
     */
    public function edit(JobExperience $jobExperience)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJobExperienceRequest  $request
     * @param  \App\Models\JobExperience  $jobExperience
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobExperienceRequest $request, JobExperience $jobExperience)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobExperience  $jobExperience
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobExperience $jobExperience)
    {
        //
    }
}
