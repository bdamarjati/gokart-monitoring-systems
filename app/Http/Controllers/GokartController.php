<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;

use App\Models\RefGokart;
use App\Models\Lap;
use App\Models\Settings;
use App\Models\GPS;

class GokartController extends Controller
{
    //
    public function getGokart(){
        $data = RefGokart::all();
        return response($data, 200);
    }

    public function getStatus(){
        $data = RefGokart::select('id','status')->get();
        return response($data, 200);
    }

    public function postStatus(Request $request){
        $id = $request->id;
        $status = $request->status;
        $data = RefGokart::where('id',$id)->update(array(
            'status' => $status
        ));
        return response(201);
    }

    public function getLap($id){
        $data = Lap::where('id_gokart',$id)->get();
        return response($data, 200);
    }

    public function getLapList(){
        $data = Lap::all();
        return response($data, 200);
    }

    public function countLap(){
        // get spec
        $idGokart = 1;
        $currentLap = Lap::where('id_gokart', $idGokart)->pluck('lap');
        $semaphore = Lap::where('id_gokart', $idGokart)->pluck('semaphore');
        $setlongA = Settings::find(1)->pluck('longA');
        $setlatA = Settings::find(1)->pluck('latA');
        $setlongB = Settings::find(1)->pluck('longB');
        $setlatB = Settings::find(1)->pluck('latB');
        $golong = GPS::latest()->pluck('longitude');
        $golat = GPS::latest()->pluck('latitude');
        // count
        if($semaphore[0] == 1){
            if($golong >= $setlongB && $golong <= $setlongA || $golat >= $setlatA && $golat <= $setlatB){
                $lap = $currentLap[0] + 1;
                $saveLap = Lap::where('id_gokart', $idGokart)->update(array(
                    'lap' => $lap,
                    'semaphore' => 0
                ));
                return $lap;
            }
            else{
                return $currentLap;
            }
        }
        else{
            if($golong <= $setlongB && $golong >= $setlongA || $golat <= $setlatA && $golat >= $setlatB){
                $saveLap = Lap::where('id_gokart', $idGokart)->update(array(
                    'semaphore' => 0
                ));
                return $currentLap;
            }
            else{
                return $currentLap;
            }
        }
        return "Error can't count lap";
    }

    public function resetLap(){
        $idGokart = 1;
        $data = Lap::where('id_gokart', $idGokart)->update(array(
            'lap' => 0
        ));
        return "Laps have been reseted";
    }

    public function postLap(Request $request){
        $id = $request->id;
        $lap = $request->lap;
        $data = Lap::where('id_gokart',$id)->update(array(
            'lap' => $lap
        ));
        return response(201);
    }

}
