<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Membership;
use App\Pgroup;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;

class MembershipController extends Controller
{

    /**
     *  Join PGroup
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */

    public function join(Request $request)
    {

        $validatedData = request()->validate([
            'pgroup_id' => 'required|exists:pgroups,id'
        ]);

        $user =  auth('api')->id();

        $validatedData['user_id'] = $user;

        // $c = Membership::count();
        $validatedData['membership_id'] = 0;


        // $validatedData['membership_id'] = 'GRP/' . (new DateTime())->format('y') . '/' . sprintf("%05d", $c++);

        $membership = Membership::create($validatedData);

        return response()->json([
            'status' => 'Joined',
            'data' => $membership
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function show(Membership $membership)
    {
        return response()->json([
            'message' => 'retrieved',
            'data' => $membership->load('users')
        ]);
    }

    /**
     * Retrieve Members from Pgroup
     * TODO let the login user be at the top
     */
    public function pgroups(Pgroup $pgroup)
    {


        $user = auth('api')->user();
        $pg_members = Membership::with(['user', 'pgroup'])->where('user_id', $user->id)->where('pgroup_id', $pgroup->id)
            ->orWhere('user_id', '!=', $user->id)->where('pgroup_id', $pgroup->id)->get();

        return response()->json([
            'status' => 'success',
            'data' => $pg_members
            // 'data' => $pgroup->users
        ]);

        //Membership::where('pgroup_id', $pgroup->id)->with(['users','pgroups'])->get()
    }

    /**
     * search pgroups
     */
    public function searchPgroups(Request $request)
    {
        $search = $request->search_query;
        if ($search) {
            $search_result =  Pgroup::where('name', 'LIKE', "%{$search}%")
                ->orWhere('abbv', 'LIKE', "%{$search}%")
                ->get();
            return response()->json(['status' => 'success', 'data' => $search_result]);
        } else {
            return response()->json(['status' => 'success', 'data' => 'Invalid Query String']);
        }
    }
}
