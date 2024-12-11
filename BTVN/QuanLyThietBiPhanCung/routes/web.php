<?php

use App\Http\Controllers\hardwareDevicesController;
use App\Http\Controllers\itCentersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('it_centers', [itCentersController::class, "index"]);
Route::get('hardware_devices', [hardwareDevicesController::class, "index"]);
