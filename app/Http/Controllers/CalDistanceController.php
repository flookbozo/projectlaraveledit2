<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Locationuser;

class CalDistanceController extends Controller
{
    public function cal(Request $request)
    {
        $user = Locationuser::all();
        $hoslatitude = deg2rad($request->latitude);
        $hoslongitude = deg2rad($request->longitude);

        foreach($user as $i)
        {
            $userlatitude = deg2rad($i->latitude);
            $userlongitude = deg2rad($i->longitude);
            $radiusOfEarth = 6371;

            $diffLatitude = $userlatitude - $hoslatitude;
            $diffLongitude = $userlongitude - $hoslongitude;

            $a = sin($diffLatitude / 2)**2 + cos($hoslatitude) *
            cos($userlatitude) * sin($diffLongitude / 2)**2;

            $c = 2 * asin(sqrt($a));
            $distance = $radiusOfEarth * $c;
            $location = Locationuser::find($i->idUser);
            $location->distance = $distance;
            if($distance <= 1.0){
                $location->status = 1;
            }
            else if($distance <= 5.0){
                $location->status = 2;
            }
            else if($distance <= 10.0){
                $locaiton->status = 3;
            }
            else if($distance > 10.0){
                $location->status = 4;
            }
            $location->save();
        }
        return response()->json('Calculate distance complete.');
    }
}
