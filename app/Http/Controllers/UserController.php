<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class UserController extends Controller
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
        
        $user->update($request->all());

        return response()->json('The user successfully updated');
    }

   
}
