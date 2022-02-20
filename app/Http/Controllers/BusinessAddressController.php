<?php

namespace App\Http\Controllers;

use App\Models\BusinessAddress;
use App\Http\Requests\StoreBusinessAddressRequest;
use App\Http\Requests\UpdateBusinessAddressRequest;

class BusinessAddressController extends Controller
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
     * @param  \App\Http\Requests\StoreBusinessAddressRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBusinessAddressRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BusinessAddress  $businessAddress
     * @return \Illuminate\Http\Response
     */
    public function show(BusinessAddress $businessAddress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BusinessAddress  $businessAddress
     * @return \Illuminate\Http\Response
     */
    public function edit(BusinessAddress $businessAddress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBusinessAddressRequest  $request
     * @param  \App\Models\BusinessAddress  $businessAddress
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBusinessAddressRequest $request, BusinessAddress $businessAddress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BusinessAddress  $businessAddress
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusinessAddress $businessAddress)
    {
        //
    }
}
