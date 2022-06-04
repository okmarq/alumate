<?php

namespace App\Http\Controllers;

use App\Business;
use App\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $businesses = Business::all();

        return response()->json([
            'status' => 'success',
            'data' => $businesses->load('user')
        ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "name" => 'required',
            "summary" =>'nullable',
            "description" =>'nullable',
            "photo" =>'nullable|image',
            "role" =>'nullable',
            "location" =>'nullable',
            "email" =>'nullable',
            "phone" =>'nullable',
            "website" =>'nullable',
            "hours" =>'nullable',
            "user_id" =>'required|exists:users,id',
            "state_id" => "nullable|exists:states,id",
            "group_id" => "nullable|exists:groups,id",
            "street_address" =>'nullable',
            "open_time" =>'nullable',
            "close_time" =>'nullable',
            "category" =>'nullable',
            "core_service" =>'nullable',
            "keywords" =>'nullable',
            "business_picture" => 'nullable|image',
            "branch_address" => 'nullable'
        ]);

        $input = $request->all();

        $data['keywords'] = json_encode(explode(',', $data['keywords'] ?? ""));

        $business = Business::create($input);

       if ($request->hasFile('photo'))
        {
                $photo = $request->file('photo');
                $photoPath = $photo->storePubliclyAs('businesses', 'business' . $business->id . '.' . $photo->getClientOriginalExtension());
                $business->photo = env('APP_URL') . '/storage/' . $photoPath;
                $business->save();
        }

        if ($request->hasFile('business_picture'))
        {
                $business_picture = $request->file('photo');
                $photoPath = $business_picture->storePubliclyAs('businesses', 'business' . $business->id . '.' . $business_picture->getClientOriginalExtension());
                $business->business_picture = env('APP_URL') . '/storage/' . $photoPath;
                $business->save();
        }

        return response()->json([
            'status' => "success",
            'data' => $business
        ]);
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function show(Business $business)
    {
        return response()->json([
            'status' => 'success',
            'data' => $business->load('user')
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function edit(Business $business)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Business $business)
    {
        $this->validate($request, [
            "name" => 'required',
            "summary" =>'nullable',
            "description" =>'nullable',
            "photo" =>'nullable|image',
            "role" =>'nullable',
            "location" =>'nullable',
            "email" =>'nullable',
            "phone" =>'nullable',
            "website" =>'nullable',
            "hours" =>'nullable',
            "user_id" => "required|exists:users,id",
            "state_id" => "nullable|exists:states,id",
            "group_id" => "nullable|exists:groups,id",
            "street_address" =>'nullable',
            "open_time" =>'nullable',
            "close_time" =>'nullable',
            "category" =>'nullable',
            "core_service" =>'nullable',
            "keywords" =>'nullable',
            "business_picture" => 'nullable|image',
            "branch_address" => 'nullable'
        ]);

        $input = $request->all();

        $data['keywords'] = json_encode(explode(',', $data['keywords'] ?? ""));

        $business->update($input);

        if ($request->hasFile('photo'))
        {
                $photo = $request->file('photo');
                $photoPath = $photo->storePubliclyAs('businesses', 'business' . $business->id . '.' . $photo->getClientOriginalExtension());
                $business->photo = env('APP_URL') . '/storage/' . $photoPath;
                $business->save();
        }

        if ($request->hasFile('business_picture'))
        {
                $business_picture = $request->file('photo');
                $photoPath = $business_picture->storePubliclyAs('businesses', 'business' . $business->id . '.' . $business_picture->getClientOriginalExtension());
                $business->business_picture = env('APP_URL') . '/storage/' . $photoPath;
                $business->save();
        }




        return response()->json([
            'status' => "success",
            'data' => $business
        ]);
    }


    public function getAllServicesUnderABussiness($business)
    {

        $services = Service::where('business_id', $business)->with('business')->get();

        return response()->json([
            'status' => "success",
            'services' => $services
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function destroy(Business $business)
    {
       //get all servies under this business

       $services = Service::where('business_id', $business->id)->get();
       //check for services imagesand delete also
       foreach ($services as $service) {
           if ($service->photo) {
               $file = $service->photo;
               $str_arr = explode("/", $file);
               $img = $str_arr[5];
               Storage::delete("service_images/" . $img);
           }
       }
       //delete the bussiness
       $business->delete();
       return response()->json([
           'status' => "success",
           'data' => "Business Deleted Successfully"
       ]);

    }

}
