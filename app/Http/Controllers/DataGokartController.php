<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

use App\Models\GPS;
use App\Models\DataGokart;

class DataGokartController extends Controller
{
    //
    public function getGpsData(){
        $data = GPS::latest()->get();
        return response($data, 200);
    }

    public function getBatteryData(){
        $data = DataGokart::latest()->get();
        return response($data, 200);
    }

    public function postGpsData(Request $request){
        $data = new GPS;
        $data->id_gokart = $request->id_gokart;
        $data->latitude = $request->latitude;
        $data->longitude = $request->longitude;
        $data->save();

        return response(201);
    }

    public function postBatteryData(Request $request){
        $data = new DataGokart;
        $data->id_gokart = $request->id_gokart;
        $data->voltage = $request->voltage;
        $data->rpm = $request->rpm;
        $data->save();

        return response(201);
    }

    public function postAlGokartData(Request $request){
        $goGps = new GPS;
        $goGps->id_gokart = $request->id_gokart;
        $goGps->latitude = $request->latitude;
        $goGps->longitude = $request->longitude;
        $goGps->save();

        $goBattery = new DataGokart;
        $goBattery->id_gokart = $request->id_gokart;
        $goBattery->voltage = $request->voltage;
        $goBattery->rpm = $request->rpm;
        $goBattery->save();

        $id = $request->id_gokart;
        $status = $request->status;
        $goState = RefGokart::where('id',$id)->update(array(
            'status' => $status
        ));

        return response(201);
    }

    public function getAllGokartData(){
        //
        $data = DB::table('ref_gokart')
                ->join('data_gokart', 'ref_gokart.id', '=', 'data_gokart.id_gokart')
                ->join('data_gps', 'ref_gokart.id', '=', 'data_gps.id_gokart')
                ->select('data_gokart.id_gokart','data_gokart.voltage', 'data_gokart.rpm','data_gps.longitude','data_gps.latitude','ref_gokart.status')
                ->orderBy('data_gokart.created_at','DESC')
                ->get();
        return response($data);
    }

}
