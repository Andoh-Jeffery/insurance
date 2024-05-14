<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClaimController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [AuthController::class,'show'])->name('login');
Route::get('/logout',[AuthController::class, 'logout']);
Route::post('/login',[AuthController::class, 'login']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');
// =========DRIVER=====================
Route::get('/add-driver',[DriverController::class,'index'])->middleware('auth')->middleware('auth');
Route::get('/view-drivers',[DriverController::class,'show'])->middleware('auth');
Route::post('/add-driver',[DriverController::class,'store'])->middleware('auth');
Route::get('/update-driver/{id}',[DriverController::class,'update'])->middleware('auth');
Route::post('/update-driver/{id}',[DriverController::class,'patch'])->middleware('auth');
Route::delete('/delete-driver/{id}',[DriverController::class,'destroy'])->middleware('auth');
// ========END DRIVER==================

// ========CAR==================
Route::get('/add-car', [CarController::class,'index'])->middleware('auth');
Route::post('/add-car',[CarController::class,'store'])->middleware('auth');
Route::get('/view-cars',[CarController::class,'show'])->middleware('auth');
Route::get('/update-car/{id}',[CarController::class,'update'])->middleware('auth');
Route::post('/update-car/{id}',[CarController::class,'patch'])->middleware('auth');
Route::delete('/delete-car/{id}',[CarController::class,'destroy'])->middleware('auth');
// ========END CAR==================
Route::get('/add-claim',[ClaimController::class,'index'])->middleware('auth');
Route::post('/add-claim',[ClaimController::class,'store'])->middleware('auth');
Route::get('/view-claim',[ClaimController::class,'show'])->middleware('auth');
Route::get('/update-claim/{id}',[ClaimController::class,'update'])->middleware('auth');
Route::post('/update-claim/{id}',[ClaimController::class,'patch'])->middleware('auth');
Route::delete('/delete-claim/{id}',[ClaimController::class,'destroy'])->middleware('auth');


Route::post('/import-claims',[CarController::class,'importCsv']);