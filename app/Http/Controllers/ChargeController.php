<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;

use App\Models\ChargingStation;
use App\Models\Settings;

class ChargeController extends Controller
{
    //
    public function getChargeData(){
        $ta = Settings::find(1)->pluck('vmax');
        $tb = Settings::find(1)->pluck('vmin');
        $data = ChargingStation::latest()->get();
        $bat = ChargingStation::latest()->pluck('battery')->first();
        $soc = (($bat-$tb[0])*100)/($ta[0]-$tb[0]);
        return ['data' => $data, 'soc' => number_format($soc,0)];
    }

    public function postChargeData(Request $request){ 
        $data = new ChargingStation;
        $data->battery = $request->battery;
        $data->solar = $request->solar;
        $data->save();

        return response(201);
    }

}
