<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


route::resource('/products', ProductController::class);

Route::get('/', function () {
    return view('welcome');
});
