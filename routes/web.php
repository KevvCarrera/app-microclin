<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EnfermedadController;



Route::get('/', [EnfermedadController::class, 'index']);

