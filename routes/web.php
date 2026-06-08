<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RevistaController;

Route::resource('revistas', RevistaController::class);