<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Settings;
use App\Models\RefGokart;

class DashboardController extends Controller
{
    //
    public function index(){
        $dis = Settings::find(1)->pluck('disinfectant');
        $go = RefGokart::find(1)->pluck('status');
        return view('dashboard', ['dis' => $dis, 'go' => $go]);
    }
}
