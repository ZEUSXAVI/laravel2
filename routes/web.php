<?php

use App\Http\Controllers\RegionController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('admin.region');
});*/

Route::get('/', [RegionController::class, 'mostrar'])->name('welcome');