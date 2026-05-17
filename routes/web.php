<?php

use Illuminate\Support\Facades\Route;

Route::get("/vehicles", function () {
    return view("index");
});
