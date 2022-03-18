<?php

namespace App\Http\Controllers;

use App\Models\BusinessPortfolio;
use App\Http\Requests\StoreBusinessPortfolioRequest;
use App\Http\Requests\UpdateBusinessPortfolioRequest;

class BusinessPortfolioController extends Controller
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
     * @param  \App\Http\Requests\StoreBusinessPortfolioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBusinessPortfolioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BusinessPortfolio  $businessPortfolio
     * @return \Illuminate\Http\Response
     */
    public function show(BusinessPortfolio $businessPortfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BusinessPortfolio  $businessPortfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(BusinessPortfolio $businessPortfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBusinessPortfolioRequest  $request
     * @param  \App\Models\BusinessPortfolio  $businessPortfolio
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBusinessPortfolioRequest $request, BusinessPortfolio $businessPortfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BusinessPortfolio  $businessPortfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusinessPortfolio $businessPortfolio)
    {
        //
    }
}
