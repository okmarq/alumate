<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Http\Requests\StoreCountryRequest;
use App\Http\Requests\UpdateCountryRequest;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $country = Country::get()->toJson(JSON_PRETTY_PRINT);
        return response($country, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCountryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCountryRequest $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:128|unique:country',
            'capital' => 'required|string|max:128'
        ]);

        $country = Country::create([
            'name' => $validatedData['name'],
            'capital' => $validatedData['capital']
        ]);

        return response()->json([
            'country' => $country
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Country::where('id', $id)->exists()) {
            $country = Country::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($country, 200);
        } else {
            return response()->json([
                'message' => 'Country not found'
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCountryRequest  $request
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCountryRequest $request, $id)
    {
        if (Country::where('id', $id)->exists()) {
            $country = Country::find($id);
            $country->name = is_null($request->name) ? $country->name : $request->name;
            // $country->abbr = is_null($request->abbr) ? $country->abbr : $request->abbr;
            $country->city_id = is_null($request->city_id) ? $country->city_id : $request->city_id;
            $country->country_type_id = is_null($request->country_type_id) ? $country->country_type_id : $request->country_type_id;
            // $country->year_founded = is_null($request->year_founded) ? $country->year_founded : $request->year_founded;
            $country->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "Country not found"
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Country::where('id', $id)->exists()) {
            $country = Country::find($id);
            $country->delete();

            return response()->json([
                "message" => "records deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "Country not found"
            ], 404);
        }
    }
}
