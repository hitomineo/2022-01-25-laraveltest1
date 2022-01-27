<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;





Route::get('/building', function () {
    return  '建物です';
});


Route::get('/building/{room}', function ($text) {
    return "部屋番号は". $text . "です";
});


Route::get('/{room?}', [TestController::class, 'index']);