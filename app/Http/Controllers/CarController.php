<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Driver;
use App\Models\Claim;


class CarController extends Controller
{
    //
    public function index(){
        $car=Car::all();
        return view('car\add-car',['cars'=>$car]);
    }

    public function store(){
        $car=new Car;
        $car->car_type=request('carType');
        $car->red_car=request('redCar');
        $car->car_age=request('age');
        $car->save();
        return redirect('/add-car');
    
    }

    public function show(){
        $cars=Car::all();
        return view('car\view-cars',['cars'=>$cars]);
    }

    function csvToArray($filename = '', $delimiter = ',')
{
    if (!file_exists($filename) || !is_readable($filename))
        return false;

    $header = null;
    $data = array();
    if (($handle = fopen($filename, 'r')) !== false)
    {
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== false)
        {
            if (!$header)
                $header = $row;
            else
                $data[] = array_combine($header, $row);
        }
        fclose($handle);
    }

    return $data;
}

public function importCsv()
{
    $file = public_path('file/claim-test.csv');

    $customerArr = $this->csvToArray($file);
    $data = [];
    for ($i = 0; $i < count($customerArr); $i ++)
    {
        // dd($customerArr);
        Claim::Create($customerArr[$i]);
    }

    return 'Jobi done or what ever';    
}
public function update($id){
    $car=Car::find($id);
    return view('car\update-car',['car'=>$car]);
}
public function patch($id){
    $car=Car::find($id);

        $car->car_type=request('carType');
        $car->red_car=request('redCar');
        $car->car_age=request('age');
    $car->update();
    
    return redirect('view-cars');
}
public function destroy($id){
    Car::destroy($id);
    return redirect('/view-cars');
}
}