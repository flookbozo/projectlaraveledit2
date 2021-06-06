<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Locationuser;

class LocationController extends Controller
{
    public function store(Request $request)
    {
        $user = Locationuser::where('idUser', $request->idUser)->first();

        if(isset($user->id))
        {
            $user = Locationuser::find($user->idUser);
            $user->latitude = $request->latitude;
            $user->longitude = $request->longitude;
            $user->save();
            return response()->json('update location user complete');
        }
        else
        {
            $user = new Locationuser();

            $user->idUser =  $request->idUser;
            $user->latitude = $request->latitude;
            $user->longitude = $request->longitude;
            $user->save();
            return response()->json('insert location user complete');
        }
        
    }
}
