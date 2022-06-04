<?php

namespace App\Http\Controllers;


use App\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::with("serviceImage")->with('business')->get();

        return response()->json([
            'status' => 'success',
            'data' => $services
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
     */
    public function store(Request $request)
    {



        $this->validate($request, [
            "name" => "required",
            "description" => "nullable",
            "price" => "nullable",
            "business_id" => "required",
            "photo" => "nullable|image"
        ]);

        $input = $request->all();
        $service = Service::create($input);

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoPath = $photo->storePubliclyAs('service_images', 'service_image' . $service->id . '.' .
                $photo->getClientOriginalExtension());
            $service->photo = env('APP_URL') . '/storage/' . $photoPath;
            $service->save();
        }

        return response()->json([
            'status' => 'success',
            'data' => $service
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return response()->json([
            'status' => 'success',
            'data' => $service->load('business')->load('serviceImage')
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {

        $previous_img = $service->photo;
        $this->validate($request, [
            "name" => "required",
            "description" => "nullable",
            "price" => "nullable",
            "business_id" => "required",
            "photo" => "nullable|image"
        ]);

        $input = $request->all();
        if ($request->hasFile('photo')) {
            //check if there was not previous upload
            $this->deleteImage($service);
        }
        $service->update($input);
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoPath = $photo->storePubliclyAs('service_images', 'service_image' . $service->id . '.' .
                $photo->getClientOriginalExtension());
            $service->photo = env('APP_URL') . '/storage/' . $photoPath;
            $service->save();
        } else {
            $service->photo = $previous_img;
            $service->save();
        }

        return response()->json([
            'status' => 'success',
            'data' => $service
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
        //check if service is having image

        $del_service_img = $this->deleteImage($service);
        $service->delete();
        return response()->json([
            'status' => "success",
            'data' => "Service Deleted Successfully"
        ]);
    }

    public function deleteImage($service)
    {
        if ($service->photo) {
            $file = $service->photo;
            $str_arr = explode("/", $file);
            // $img = $str_arr[5];
            $img = end($str_arr);
            Storage::delete("service_images/" . $img);
            return true;
        } else {
            return false;
        }
    }
}
