<?php

use tk\fatiha\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'tk\tarek\Controllers'], function () {
    Route::get('posts', [PostController::class, 'index']);
});
