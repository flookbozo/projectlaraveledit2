<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\giveblood;

class Giveblood extends Controller
{
    public function initGive()
    {
        $user = Auth::guard('givebloods')->user();

        return response()->json(['giveblood' => $user], 200);
    }

    public function registerGive(Request $request)
    {
        $user = Giveblood::where('id', $request->id)->first();

        if(isset($user->id))
        {
            return response()->json(['error' => 'Username already exists.'], 401);
        }
        $user = new giveblood();
        $user->typeblood = $request->typeblood;
        $user->typerh = $request->typerh;
        $user->bloodSupply = $request->bloodSupply;
        $user->date = $request->date;
        $user->deficiencyBlood = $request->deficiencyBlood;
       
        $user->save();
    }
    
}
