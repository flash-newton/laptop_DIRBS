<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function index(){

        return view('pages.device');
    }

    public function getDetails($id){
     
        $device =Device::findOrFail($id);

        return view('pages.devicedetails',['device'=>$device]);

    }
}
