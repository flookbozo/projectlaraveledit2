<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hospital;
use Illuminate\Support\Facades\Auth;

class HospitalController extends Controller
{
    public function index()
    {
        $user = Hospital::all();

        return response()->json($user);
    }

    public function edit($id)
    {
        $user = Hospital::find($id);
        return response()->json($user);
    }
    public function update($id, Request $request)
    {
        $user = Hospital::find($id);
        
        $user->update($request->all());

        return response()->json('The hospital successfully updated');
    }
 }

