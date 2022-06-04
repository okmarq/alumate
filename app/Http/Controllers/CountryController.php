<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Country;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Country::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\State $state
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        return response()->json($country);
    }
}
