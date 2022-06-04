<?php

namespace App\Http\Controllers;

use App\Business;
use App\Bay;
use App\User;
use App\Group;
use App\Http\Controllers\Controller;
use App\Service;
use App\State;
use Illuminate\Http\Request;

class BayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bay = Bay::all();

        return response()->json([
            'status' => 'success',
            'data' => $bay->load('user')
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bay  $bay
     * @return \Illuminate\Http\Response
     */
    public function show(Bay $bay)
    {
        return response()->json([
            'status' => 'success',
            'data' => $bay->load('user')
        ]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function replicate(Request $request, Business $business)
    {
        // i am using route-model binding

        // $validatedData = request()->validate([
        //     'business_id' => 'required|exists:businesses,id'
        // ]);
        //checking if business exist
        $checking_if_business_exist = Bay::where('business_id', $business->id)->count();
        if ($checking_if_business_exist > 0) {
            return response()->json([
                'status' => 'business replicated',
                'data' => 'Your Business is aleady in Bay'
            ]);
        } else {
            // $business = Business::find($validatedData['business_id']);
            $business = Business::find($business->id);
            $bay = $business->replicate();
            $bay->setTable('bays');
            $bay->save();
            // $input = $request->all();
            $bay->update(['business_id' => $business->id]);
            return response()->json([
                'status' => 'business replicated',
                'data' => $bay
            ]);
        }
    }


    /**
     *Perform a Search query for businesses within bay
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function generalSearch(Request $request, $key1, $key2, $key3, $key4)
    {

        return response()->json([
            'status' => "success",
            'message' => 'search completed',
            'data' => [
                'search' => $this->db_search1($key1, $key2, $key3, $key4)
            ]
        ]);
    }





    public function searchBay(Request $request)
    {
        $country_id = $request->country_id;
        $state_id = $request->state_id;

        $services = $request->services;
        $group_id = $request->group_id;

        $array = [];
        //only country
        // only state
        // only services
        // only group

        //only country
        if ($country_id == '' && $group_id == '' && $services == ''  && $state_id != '') {
            // get all the bay with this state id
            $array = Bay::with(['user', 'state', 'group'])->where('state_id', $state_id)->get();
        }
        // both country and state or state only
        elseif ($country_id != '' && $services == '' && $state_id != '' && $group_id == '') {
            // ? checking if only country id
            $states = State::where('country_id', $country_id)->get();
            foreach ($states as  $state) {
                $bay =  Bay::with(['user', 'state', 'group'])->where('state_id', $state->id)->get();
                if (count($bay) > 1) {
                    foreach ($bay as  $b) {
                        array_push($array, $b);
                    }
                } elseif (count($bay) == 1) {
                    array_push($array, $bay[0]);
                }
            }
        }
        //
        elseif ($country_id != '' && $services == '' && $state_id == '' && $group_id != '') {
            $states = State::where('country_id', $country_id)->get();
            foreach ($states as  $state) {
                $bay =  Bay::with(['user', 'state', 'group'])->where('state_id', $state->id)->where('group_id', $group_id)->get();
                if (count($bay) > 1) {
                    foreach ($bay as  $b) {
                        array_push($array, $b);
                    }
                } elseif (count($bay) == 1) {
                    array_push($array, $bay[0]);
                }
            }
        } elseif ($country_id != '' && $group_id != '' && $services == ''  && $state_id != '') {
            // get all the bay with this state id
            $array = Bay::where('state_id', $state_id)->where('group_id', $group_id)->get();
        }
        // only services was posted
        elseif ($country_id == '' && $services != '' && $state_id == '' && $group_id == '') {

            $services =  Service::where('name', "LIKE", "%{$services}%")
                ->orWhere('description', "LIKE", "%{$services}%")
                ->orWhere('description', "LIKE", "%{$services}%")->pluck('business_id');
            $array = Bay::with(['user', 'state', 'group'])->whereIn('business_id', $services)->get();
        }
        // country and services
        elseif ($country_id != '' && $services != '' && $state_id == '') {
            //
            $services =  Service::where('name', "LIKE", "%{$services}%")
                ->orWhere('description', "LIKE", "%{$services}%")
                ->orWhere('description', "LIKE", "%{$services}%")
                ->get();

            $states = State::where('country_id', $country_id)->get();
            foreach ($services as $service) {
                foreach ($states as $state) {
                    $bay =  Bay::with(['user', 'state', 'group'])->where('business_id', $service->business_id)->where('state_id', $state->id)->orWhere('group_id', $group_id)->get();
                    if (count($bay) > 1) {
                        array_push($array, $bay);
                    } elseif (count($bay) == 1) {
                        array_push($array, $bay[0]);
                    }
                }
            }
        }
        // state and service
        elseif ($country_id != '' && $services != '' && $state_id != '') {
            //
            $services =  Service::where('name', "LIKE", "%{$services}%")
                ->orWhere('description', "LIKE", "%{$services}%")
                ->orWhere('description', "LIKE", "%{$services}%")->get();

            foreach ($services as $service) {
                $bay =  Bay::with(['user', 'state', 'group'])->where('business_id', $service->business_id)->where('state_id', $state_id)->orWhere('group_id', $group_id)->get();
                array_push($array, $bay);
            }
        }
        return response()->json([
            'status' => "success",
            'message' => 'search completed',
            'data' => [
                'search' => $array
            ]
        ]);
    }

    //get country
    public function getStateId($countryId)
    {
    }

    public function db_search($services, $country, $state, $group_id)
    {
        return Bay::where("category", "LIKE", "%{$services}%")
            ->orWhere('state_id', "LIKE", "%{$country}%")
            ->orWhere('keywords', "LIKE", "%{$state}%")
            ->orWhere('core_service', "LIKE", "%{$services}%")
            ->orWhere('group_id', "LIKE", "%{$group_id}%")->get();
    }
    /**
     *Perform a Search query for businesses within bay
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function searchByGroup(Request $request, $key1, $key2, $key3, $key4, $key5)
    {

        return response()->json([
            'status' => "success",
            'message' => 'search completed',
            'data' => [
                'search' => $this->db_search2($key1, $key2, $key3, $key4, $key5)
            ]
        ]);
    }

    public function db_search1($key1, $key2, $key3, $key4)
    {
        return Bay::where("category", "LIKE", "%{$key1}%")
            ->orWhere('state_id', "LIKE", "%{$key2}%")
            ->orWhere('keywords', "LIKE", "%{$key3}%")
            ->orWhere('core_service', "LIKE", "%{$key4}%")->get();
    }

    public function db_search2($key1, $key2, $key3, $key4, $key5)
    {
        return Bay::where("category", "LIKE", "%{$key1}%")
            ->orWhere('state_id', "LIKE", "%{$key2}%")
            ->orWhere('keywords', "LIKE", "%{$key3}%")
            ->orWhere('core_service', "LIKE", "%{$key4}%")
            ->orWhere('group_id', "LIKE", "%{$key5}%")->get();
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
    public function store(Request $request, $id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bay  $bay
     * @return \Illuminate\Http\Response
     */
    public function edit(Bay $bay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bay  $bay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bay $bay)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bay  $bay
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bay $bay)
    {
        $bay->delete();
        return response()->json([
            'status' => "success",
            "status_code" => 200
        ]);
    }

}
