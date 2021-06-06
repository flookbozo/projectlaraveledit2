<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisterUserController extends Controller
{
    public function init()
    {
        $user = Auth::user();

        return response()->json(['user' => $user], 200);
    }

    public function registerUser(Request $request)
    {
        $user = User::where('username', $request->username)->first();

        if(isset($user->id))
        {
            return response()->json(['error' => 'Username already exists.'], 401);
        }
        $user = new User();

        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->email = $request->email;
        $user->prefix = $request->prefix;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->gender = $request->gender;
        $user->duringpregnancy = $request->duringpregnancy;
        $user->breastfeeding = $request-> breastfeeding;
        $user->givebirth_past_6 = $request->givebirth_past_6;
        $user->typeblood = $request->typeblood;
        $user->typerh = $request->typerh;
        $user->date = $request->date;
        $user->phonnumber = $request->phonnumber;
        $user->question = $request->question;
        $user->answer = $request->answer;
        $user->save();
    }

    public function loginUser(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], true))
        {
            return response()->json(Auth::user(),200);
        }
        else {
            return response()->json(['error' => 'Email หรือ Password ไม่ถูกต้อง'], 401);
        }
    }

    public function logout()
    {
        Auth::logout();
    }
}
