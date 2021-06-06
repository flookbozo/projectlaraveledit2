<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Hospital;

class ResetPassHospitalController extends Controller
{
    public function index()
    {
        $user = Hospital::all();

        return response()->json($user);
    }

    public function edit($id)
    {
        $user =Hospital::find($id);
        return response()->json($user);
    }

    public function update($id, Request $request)
    {
        $user = Hospital::find($id);
        
        $user->password = bcrypt($request->password);
        $user->save();
        

        return response()->json('The user successfully updated');
    }
}
