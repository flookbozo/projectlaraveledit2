<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Hospital;

class RegisterHosController extends Controller
{
    public function init()
    {
        $user = Auth::guard('hospitals')->user();

        return response()->json(['hospital' => $user], 200);
    }

    public function registerHospital(Request $request)
    {
        $user = Hospital::where('username', $request->username)->first();

        if(isset($user->id))
        {
            return response()->json(['error' => 'Username already exists.'], 401);
        }
        $user = new Hospital();

        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->email = $request->email;
        $user->prefix = $request->prefix;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->hospitalname = $request->hospitalname;
        $user->hospitaladdress = $request->hospitaladdress;
        $user->provine = $request->provine;
        $user->addresscode = $request->addresscode;
        $user->hospitallattitude = $request->hospitallattitude;
        $user->hospitallongitude = $request->hospitallongitude;
        $user->phonnumber = $request->phonnumber;
        $user->question = $request->question;
        $user->answer = $request->answer;
        $user->save();
    }

    public function loginHospital(Request $request)
    {
        if (Auth::guard('hospitals')->attempt(['email' => $request->email, 'password' => $request->password], true))
        {
            return response()->json(Auth::guard('hospitals')->user(),200);
        }
        else {
            return response()->json(['error' => 'Username หรือ Password ไม่ถูกต้อง'], 401);
        }
    }

    public function logout()
    {
        Auth::guard('hospitals')->logout();
    }
}
