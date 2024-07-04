<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MostrarController;
Route::get('/', function () {
    return view('welcome');
});



