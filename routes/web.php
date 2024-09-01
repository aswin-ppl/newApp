<?php

use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;

Route::view('/','welcome');

Route::controller(DataController::class)->group(function(){
    Route::get('/getTable','getTable')->name('getTable');
});
