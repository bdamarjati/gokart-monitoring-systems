<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Settings;

class SettingsController extends Controller
{
    //
    public function index(){
        $data = Settings::find(1)->get();
        return view('settings', ['data' => $data]);
    }

    public function postDisinf(Request $request){
        $statDis = $request->statDis;
        $data = Settings::where('id', 1)->update(array(
            'disinfectant' => $statDis
        ));
    }
}
