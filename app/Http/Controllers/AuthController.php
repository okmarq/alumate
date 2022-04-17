<?php

namespace App\Http\Controllers;

use App\Http\Resources\UsersResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function setUsername()
    {
        $i = 0;
        $username = $i . str_pad(mt_rand(1, 99999999), 8, '0', STR_PAD_LEFT);
        while (User::whereUsername($username)->exists()) {
            $i++;
            $username = $i . str_pad(mt_rand(1, 99999999), 8, '0', STR_PAD_LEFT);
        }
        return $username;
    }

    public function setInviteCode()
    {
        $i = 0;
        $code = $i . str_pad(mt_rand(1, 99999999), 8, '0', STR_PAD_LEFT);
        while (User::where('invite_code', $code)->exists()) {
            $i++;
            $code = $i . str_pad(mt_rand(1, 99999999), 8, '0', STR_PAD_LEFT);
        }
        return $code;
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:32',
            'last_name' => 'required|string|max:32',
            'email' => 'required|string|email|max:64|unique:users',
            'referred_by' => 'string|max:8',
            // 'phone_number' => 'string|max:15|unique:users',
            'password' => 'required|string|min:8'
        ]);

        $user = User::create([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'email' => $validatedData['email'],
            // 'phone_number' => $validatedData['phone_number'],
            'password' => Hash::make($validatedData['password']),
            'username' => $this->setUsername(),
            'invite_code' => $this->setInviteCode(),
            'referred_by'=> $validatedData['referred_by'] ?? null
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
        //
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
        // $users = User::get()->toJson(JSON_PRETTY_PRINT);
        // return response($users, 200);

        return UsersResource::collection(User::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(StoreUserRequest $request)
    // {
    //
    // }

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
    public function showByInviteCode($code)
    {
        if (User::where('invite_code', $code)->exists()) {
            $user = User::where('invite_code', $code)->get()->toJson(JSON_PRETTY_PRINT);
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
    public function showByAlumni($name)
    {
        if (User::where('first_name', 'like', '%' . $name . '%')->orWhere('last_name', 'like', '%' . $name . '%')->exists()) {
            $user = User::where('first_name', 'like', '%' . $name . '%')
            ->orWhere('last_name', 'like', '%' . $name . '%')
            ->join('alumnis', 'users.id', '=', 'alumnis.user_id')
            ->get()
            ->toJson(JSON_PRETTY_PRINT);
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
    // public function update(UpdateUserRequest $request, $id)
    // {
    //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //
    // }
}
