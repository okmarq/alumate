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
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function showByName($name)
    {
        if (Country::where('name', 'like', '%' . $name . '%')->exists()) {
            $country = Country::where('name', 'like', '%' . $name . '%')->get()->toJson(JSON_PRETTY_PRINT);
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
            $country->capital = is_null($request->capital) ? $country->capital : $request->capital;
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
