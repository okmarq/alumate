<?php

namespace App\Http\Controllers;

use App\Models\UserProgramDepartment;
use App\Http\Requests\StoreUserProgramDepartmentRequest;
use App\Http\Requests\UpdateUserProgramDepartmentRequest;

class UserProgramDepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_program_departments = UserProgramDepartment::get()->toJson(JSON_PRETTY_PRINT);
        return response($user_program_departments, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserProgramDepartmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserProgramDepartmentRequest $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|integer',
            'school_id' => 'required|integer',
            'department_id'=> 'required|integer',
            'program_id'=> 'required|integer',
        ]);

        $user_program_department = UserProgramDepartment::create([
            'user_id' => $validatedData['user_id'],
            'school_id' => $validatedData['school_id'],
            'department_id' => $validatedData['department_id'],
            'program_id' => $validatedData['program_id']
        ]);

        return response()->json([
            "message" => "userprogramdepartment record created",
            'userprogramdepartment' => $user_program_department
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserProgramDepartment  $userProgramDepartment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (UserProgramDepartment::where('id', $id)->exists()) {
            $user_program_department = UserProgramDepartment::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($user_program_department, 200);
        } else {
            return response()->json([
                'message' => 'User Program Department not found'
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserProgramDepartmentRequest  $request
     * @param  \App\Models\UserProgramDepartment  $userProgramDepartment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserProgramDepartmentRequest $request, $id)
    {
        if (UserProgramDepartment::where('id', $id)->exists()) {
            $user_program_department = UserProgramDepartment::find($id);
            $user_program_department->user_id = is_null($request->user_id) ? $user_program_department->user_id : $request->user_id;
            $user_program_department->school_id = is_null($request->school_id) ? $user_program_department->school_id : $request->school_id;
            $user_program_department->department_id = is_null($request->department_id) ? $user_program_department->department_id : $request->department_id;
            $user_program_department->program_id = is_null($request->program_id) ? $user_program_department->program_id : $request->program_id;

            $user_program_department->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "UserProgramDepartment not found"
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserProgramDepartment  $userProgramDepartment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (UserProgramDepartment::where('id', $id)->exists()) {
            $user_program_department = UserProgramDepartment::find($id);
            $user_program_department->delete();

            return response()->json([
                "message" => "records deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "User Program Department not found"
            ], 404);
        }
    }
}
