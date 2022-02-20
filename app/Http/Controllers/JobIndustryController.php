<?php

namespace App\Http\Controllers;

use App\Models\JobIndustry;
use App\Http\Requests\StoreJobIndustryRequest;
use App\Http\Requests\UpdateJobIndustryRequest;

class JobIndustryController extends Controller
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
     * @param  \App\Http\Requests\StoreJobIndustryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobIndustryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobIndustry  $jobIndustry
     * @return \Illuminate\Http\Response
     */
    public function show(JobIndustry $jobIndustry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobIndustry  $jobIndustry
     * @return \Illuminate\Http\Response
     */
    public function edit(JobIndustry $jobIndustry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJobIndustryRequest  $request
     * @param  \App\Models\JobIndustry  $jobIndustry
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobIndustryRequest $request, JobIndustry $jobIndustry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobIndustry  $jobIndustry
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobIndustry $jobIndustry)
    {
        //
    }
}
