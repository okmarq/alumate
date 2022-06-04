<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResetPasswordRequest;
use App\Mail\ForgotPassword;
use App\PasswordReset;
use App\Referral;
use App\User;
use Carbon\Carbon;
//use Illuminate\Routing\UrlGenerator;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\JWTAuth;
use App\ApiCode;

class AuthController extends Controller
{
    public function generateReferralCode(){
        $chars = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789');
        $totalChars = count($chars);

        do {
            $code = '';
            for($i = 0; $i< 5; $i++){
                $index =  rand(0,$totalChars-1);
                $code.=$chars[$index];
            }
        }while(User::where('referral_code', $code)->first());

        return $code;
    }

    public function register(Request $request){

        $this->validate($request, [
            'name' => 'bail|required',
            'email' => 'bail|required|email:filter,rfc|unique:users',
            'password' => 'bail|required|min:6',
        ]);

        DB::beginTransaction();

        $referrerId = null;

        $referrer = User::where('referral_code', $request['referral_code'])->first();

        if ($referrer)
            $referrerId = $referrer->id;

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'player_id' => $request->filled('player_id') ? $request->player_id : null,
            'referral_code' => $this->generateReferralCode(),
            'referrer_id' => $referrerId
        ]);

        $referral = Referral::create([
            'user_id' => $user->id,
            'referrer_id' => $referrerId
        ]);

        if (!$user && $referral){
            DB::rollBack();
        }
        DB::commit();

        return response()->json([
            'status' => 'success',
            'data' => [
                'user' => $user,
                'referral' => $referral
            ]
        ]);
    }

    public function getRefereeCount(){
        $referral = Referral::where("referrer_id", auth()->user()->id)
            ->whereNotNull("user_id")->count();

        return response()->json([
            'status' => 'success',
            'data' => 'Number of referred users:' .''. $referral
        ]);
    }


    public function registers(Request $request)
    {
        $this->validate($request, [
            'name' => 'bail|required',
            'email' => 'bail|required|email:filter,rfc|unique:users',
            'password' => 'bail|required|min:6',
        ]);

        $input = $request->all();
        $input['password'] = bcrypt($request->password);
        $input['player_id'] = $request->filled('player_id') ? $request->player_id : null;
//        $input['referral_code'] = $this->generateReferralCode();
        $user = User::create($input);

        return response()->json($user);
    }

    /**
     * @throws AuthenticationException
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'bail|required|email:filter,rfc',
            'password' => 'bail|required|min:6'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = User::find(\auth()->id());

            if ($request->filled('player_id') && $user->player_id != $request->player_id) {
                $user->player_id = $request->player_id;
                $user->save();
            }

            return response()->json($user);
        }

        throw new AuthenticationException('Your credentials does not match our record.');
    }

    public function changePassword(Request $request){
        $this->validate($request, [
            'old_password' => 'required',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6',
        ]);

        if (!(Hash::check($request['old_password'], Auth::user()->password))) {
            return response()->json(['message' => 'Current password is Wrong !!'], 422);
        }

        if(strcmp($request['old_password'], $request['password']) == 0){
            return response()->json(['message' => 'New Password cannot be same as your current password. Please choose a different password.'], 422);
        }

        $user = Auth::user();

        $user->password = bcrypt($request['password']);
        $user->save();

        return response()->json(['message' => 'Password updated successfully !!'], 200);
    }

    /**
     * Get User's email to send password reset link
     *
     * @bodyParam email string required Email is required.
     *
     * @response
     *  {
     *      "status": "success",
     *      "message": "Reset password link sent on your email id."
     *  }
     */
    public function forgotPassword() {
        $credentials = request()->validate(['email' => 'required|email']);

        Password::sendResetLink($credentials);

        return response()->json(['status'=>'success','message'=>'Reset password link sent on your email id.']);
    }

    /**
     * Reset password using the reset link from email
     *
     * @bodyParam email string required Email is required.
     * @bodyParam password string required Password is required.
     * @bodyParam password_confirmation string required Password Confirmation is required.
     * @bodyParam token string required Token is required.
     *
     * @response
     *  {
     *      "status": "success",
     *      "message": "Password has been successfully changed"
     *  }
     */
    public function resetPassword(ResetPasswordRequest $request) {
        $reset_password_status = Password::reset($request->validated(), function ($user, $password) {
            $user->password = bcrypt($password);
            $user->save();
        });

        if ($reset_password_status == Password::INVALID_TOKEN) {
            return response()->json($reset_password_status['message'],$reset_password_status['status_code']);
        }

        return response()->json(['status'=>'success','message'=>'Password has been successfully changed']);
    }
}
