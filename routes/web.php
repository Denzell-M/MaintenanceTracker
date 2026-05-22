<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;

Route::get("/", ([VehicleController::class, "index"])->name("vehicles.index"));
Route::get(
    "/vehicle/{vehicle}",
    ([VehicleController::class, "show"])->name("vehicles.show"),
);
