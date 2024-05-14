<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;

class DriverController extends Controller
{
    //
    public function index(){

        return view('driver\add-driver');
    }
    // 
    public function store(){
        $driver = new Driver;
        $driver->driver_id =request('id');
        $driver->kidsdriv =request('kiddrv');
        $driver->age =request('age');
        $driver->education =request('education');
        $driver->income =request('income');
        $driver->mstatus =request('mstatus');
        $driver->occupation =request('occupation');
        $driver->gender =request('gender');
        // $driver->id =request('id');
        $driver->save();
        // error_log($driver);
        return redirect('/add-driver');
    }
    // 
    public function show(){
        $drivers=Driver::all();
        return view('driver\view-drivers',['drivers'=>$drivers]);
    }
    // 
    public function destroy($id){
        Driver::destroy($id);
        return redirect('/view-drivers');

    }

    public function update($id){
        $driver=Driver::find($id);
        return view('driver\update-driver',['driver'=>$driver]);
    }

    public function patch($id){
        $driver=Driver::find($id);
        $driver->driver_id =request('id');
        $driver->kidsdriv =request('kiddrv');
        $driver->age =request('age');
        $driver->education =request('education');
        $driver->income =request('income');
        $driver->mstatus =request('mstatus');
        $driver->occupation =request('occupation');
        $driver->gender =request('gender');

        $driver->update();
        return redirect('view-drivers');
    }
}