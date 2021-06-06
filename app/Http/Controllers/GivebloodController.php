<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Giveblood;


class GivebloodController extends Controller
{
    
    public function index()
    {
        $user = Giveblood::all();

        return response()->json($user);
    }

    public function store(Request $request)
    {
        $user = new Giveblood([
            "idHospital" => $request->input("idHospital"),
            "typeblood" => $request->input("typeblood"),
            "typerh" => $request->input("typerh"),
            "date" => $request->input("date"),
            "deficiencyBlood" => $request->input("deficiencyBlood")
        ]);
        $user->save();
        return response()->json('Product created!');
    }

    public function deleteGiveblood($id)
    {
        $user = Giveblood::find($id);
        $user->delete();

        return response()->json('Giveblood successfully deleted');
    }

  
}
