<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ResetPassController extends Controller

{
    public function index()
    {
        $user = User::all();

        return response()->json($user);
    }

    public function edit($id)
    {
        $user =User::find($id);
        return response()->json($user);
    }

    public function update($id, Request $request)
    {
        $user = User::find($id);
        
        $user->password = bcrypt($request->password);
        $user->save();
        

        return response()->json('The user successfully updated');
    }
}
