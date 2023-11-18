<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;



Route::get("/profile/{id}",[ProfileController::class,"index"]);
