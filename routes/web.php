<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WellcomeController;

Route::get('/', function () {
    return view('welcome');
});
