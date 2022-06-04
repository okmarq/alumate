<?php

namespace App\Http\Controllers;


use App\Pgroup;
use App\Http\Controllers\Controller;
use App\Membership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PgroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pgroups = Pgroup::latest()->get();

        return response()->json([
            'status' => 'success',
            'data' => $pgroups
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
            "name" => "required",
            "abbv" => "nullable",
            "photo" => "nullable|image",
            "school_id" => "nullable|exists:schools,id"
        ]);

        $input = $request->all();

        $pgroup = Pgroup::create($input);


        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoPath = $photo->storePubliclyAs('pgroups', 'pgroup' . $pgroup->id . '.' .
                $photo->getClientOriginalExtension());
            $pgroup->photo = env('APP_URL') . '/storage/' . $photoPath;
            $pgroup->save();
        }
        // add user that created the group automatically
        Membership::create([
            'user_id' => auth('api')->id(),
            'pgroup_id' => $pgroup->id,
            'membership_id' => 1
        ]);

        return response()->json([
            'status' => 'Group Created',
            'data' => $pgroup
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pgroup  $pgroup
     * @return \Illuminate\Http\Response
     */
    public function show(Pgroup $pgroup)
    {


        return response()->json([
            'status' => 'success',
            'data' => $pgroup
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pgroup  $pgroup
     * @return \Illuminate\Http\Response
     */
    public function edit(Pgroup $pgroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pgroup  $pgroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pgroup $pgroup)
    {


        if ($request->hasFile('photo')) {
            $this->deleteImage($pgroup);
            $pgroup->update($request->all());
            $photo = $request->file('photo');
            $photoPath = $photo->storePubliclyAs('pgroups', 'pgroup' . $pgroup->id . '.' .
                $photo->getClientOriginalExtension());
            $pgroup->photo = env('APP_URL') . '/storage/' . $photoPath;
            $pgroup->save();
        } else {
            $previous_img = $pgroup->photo;
            $pgroup->update($request->all());
            $pgroup->photo = $previous_img;
            $pgroup->save();
        }

        return response()->json([
            'status' => 'success',
            'data' => $pgroup
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pgroup  $pgroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pgroup $pgroup)
    {
        //
        $this->deleteImage($pgroup);

        //deleting record from pgroup_users
        Membership::where('pgroup_id', $pgroup->id)->delete();
        //deleting record from pgroup
        $pgroup->delete();
        return response()->json([
            'status' => 'Pgroup Deleted Successfully',
            'data' => ''
        ]);
    }

    public function deleteImage($pgroup)
    {
        // return $pgroup->photo;
        if ($pgroup->photo != null) {
            //get the photo url
            $file = $pgroup->photo;
            $str_arr = explode("/", $file);
            // $img = $str_arr[5];
            //get the last item in array which ought to be the image name
            $img = end($str_arr);
            Storage::delete("pgroups/" . $img);
            return true;
        } else {
            return false;
        }
    }
}
