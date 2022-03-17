<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:32',
            'last_name' => 'required|string|max:32',
            'email' => 'required|string|email|max:64|unique:users',
            'phone_number' => 'required|string|max:15|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'email' => $validatedData['email'],
            'phone_number' => $validatedData['phone_number'],
            'password' => Hash::make($validatedData['password']),
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'user' => $user
        ], 201);
    }

    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'message' => 'Invalid login details'
            ], 401);
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'user' => $user
        ], 200);
    }

    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();

        return response()->json([
            'message' => 'Logged out'
        ], 200);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get()->toJson(JSON_PRETTY_PRINT);
        return response($users, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        // $validatedData = $request->validate([
        //     'name' => 'required|string|max:128|unique:user',
        //     'capital' => 'required|string|max:128'
        // ]);

        // $user = User::create([
        //     'name' => $validatedData['name'],
        //     'capital' => $validatedData['capital']
        // ]);

        // return response()->json([
        //     'user' => $user
        // ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (User::where('id', $id)->exists()) {
            $user = User::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($user, 200);
        } else {
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function showByName($name)
    {
        if (User::where('first_name', 'like', '%' . $name . '%')->orWhere('last_name', 'like', '%' . $name . '%')->exists()) {
            $user = User::where('first_name', 'like', '%' . $name . '%')->orWhere('last_name', 'like', '%' . $name . '%')->get()->toJson(JSON_PRETTY_PRINT);
            return response($user, 200);
        } else {
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    {
        // if (User::where('id', $id)->exists()) {
        //     $user = User::find($id);
        //     $user->name = is_null($request->name) ? $user->name : $request->name;
        //     // $user->abbr = is_null($request->abbr) ? $user->abbr : $request->abbr;
        //     $user->city_id = is_null($request->city_id) ? $user->city_id : $request->city_id;
        //     $user->user_type_id = is_null($request->user_type_id) ? $user->user_type_id : $request->user_type_id;
        //     // $user->year_founded = is_null($request->year_founded) ? $user->year_founded : $request->year_founded;
        //     $user->save();

        //     return response()->json([
        //         "message" => "records updated successfully"
        //     ], 200);
        // } else {
        //     return response()->json([
        //         "message" => "User not found"
        //     ], 404);
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // if (User::where('id', $id)->exists()) {
        //     $user = User::find($id);
        //     $user->delete();

        //     return response()->json([
        //         "message" => "records deleted"
        //     ], 202);
        // } else {
        //     return response()->json([
        //         "message" => "User not found"
        //     ], 404);
        // }
    }
}
