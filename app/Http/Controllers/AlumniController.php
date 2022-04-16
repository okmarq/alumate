<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Http\Requests\StoreAlumniRequest;
use App\Http\Requests\UpdateAlumniRequest;
use App\Http\Resources\AlumniResource;
use Illuminate\Support\Facades\DB;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumni = Alumni::get()->toJson(JSON_PRETTY_PRINT);
        return response($alumni, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreAlumniRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAlumniRequest $request)
    {
        $validatedData = $request->validate([
            'graduation_year' => 'required|integer',
            'school_id' => 'required|integer',
            'user_id' => 'required|integer'
        ]);

        $alumni = Alumni::create([
            'graduation_year' => $validatedData['graduation_year'],
            'school_id' => $validatedData['school_id'],
            'user_id' => $validatedData['user_id']
        ]);

        return response()->json([
            "message" => "alumni record created",
            'alumni' => $alumni
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Alumni $alumni
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Alumni::where('id', $id)->exists()) {
            $alumni = Alumni::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($alumni, 200);
        } else {
            return response()->json([
                'message' => 'Alumni not found'
            ], 404);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function searchSchoolmates($name)
    {
        if (Alumni::exists()) {
            // $user = User::where('first_name', 'like', '%' . $name . '%')
            // ->orWhere('last_name', 'like', '%' . $name . '%')
            // ->join('alumnis', 'users.id', '=', 'alumnis.user_id')
            // ->get()
            // ->toJson(JSON_PRETTY_PRINT);
            $schoolmates = Alumni::join('users', 'alumnis.user_id', '=', 'users.id')
            ->where('first_name', 'like', '%' . $name . '%')
            ->orWhere('last_name', 'like', '%' . $name . '%')
                ->get()
                ->toJson(JSON_PRETTY_PRINT);
            return response($schoolmates, 200);
        } else {
            return response()->json([
                'message' => 'School mates not found'
            ], 404);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function schoolmate($school_id)
    {
        if (Alumni::where('school_id', $school_id)->exists()) {
            $schoolmates = Alumni::where('school_id', $school_id)
                ->join('users', 'alumnis.user_id', '=', 'users.id')
                ->get()
                ->toJson(JSON_PRETTY_PRINT);
            // DB::table('alumnis')->where('school_id', $school_id)
            return response($schoolmates, 200);
        } else {
            return response()->json([
                'message' => 'School mates not found'
            ], 404);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function classmate($school_id, $graduation_year)
    {
        if (Alumni::where('school_id', $school_id)->where('graduation_year', $graduation_year)->exists()) {
            $classmates = Alumni::where('school_id', $school_id)
                ->where('graduation_year', $graduation_year)
                ->join('users', 'alumnis.user_id', '=', 'users.id')
                ->get()
                ->toJson(JSON_PRETTY_PRINT);
            return response($classmates, 200);
        } else {
            return response()->json([
                'message' => 'class mates not found'
            ], 404);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function otherClassmate($school_type, $school_id, $admission_year)
    {
        if (Alumni::where('school_id', $school_id)->where('admission_year', $admission_year)->exists()) {
            $classmates = Alumni::where('school_id', $school_id)
                ->where('admission_year', $admission_year)
                ->join('users', 'alumnis.user_id', '=', 'users.id')
                ->join('schools', 'alumnis.school_id', '=', 'schools.id')
                ->where('school_type', $school_type)
                ->get()
                ->toJson(JSON_PRETTY_PRINT);
            return response($classmates, 200);
        } else {
            return response()->json([
                'message' => 'class mates not found'
            ], 404);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function classmate_ay($school_id, $admission_year)
    {
        if (Alumni::where('admission_year', $admission_year)->exists()) {
            $classmates = Alumni::where('school_id', $school_id)
                ->where('admission_year', $admission_year)
                ->join('users', 'alumnis.user_id', '=', 'users.id')
                ->get()
                ->toJson(JSON_PRETTY_PRINT);
            // DB::table('alumni')->where('school_id', $school_id)
            return response($classmates, 200);
        } else {
            return response()->json([
                'message' => 'class mates not found'
            ], 404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function groupuser($user_id)
    {
        if (Alumni::where('user_id', $user_id)->exists()) {
            $groups = Alumni::where('user_id', $user_id)
                ->join('groups', 'alumnis.user_id', '=', 'groups.id')
                ->get();

            return $groups;

            // return new AlumniResource($groups);
        } else {
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAlumniRequest  $request
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAlumniRequest $request, $id)
    {
        if (Alumni::where('id', $id)->exists()) {
            $alumni = Alumni::find($id);
            $alumni->admission_year = is_null($request->admission_year) ? $alumni->admission_year : $request->admission_year;
            $alumni->graduation_year = is_null($request->graduation_year) ? $alumni->graduation_year : $request->graduation_year;
            $alumni->school_id = is_null($request->school_id) ? $alumni->school_id : $request->school_id;
            $alumni->user_id = is_null($request->user_id) ? $alumni->user_id : $request->user_id;

            $alumni->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "Alumni not found"
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Alumni::where('id', $id)->exists()) {
            $alumni = Alumni::find($id);
            $alumni->delete();

            return response()->json([
                "message" => "records deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "Alumni not found"
            ], 404);
        }
    }
}
