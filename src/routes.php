<?php

use tk\tarek\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'tk\tarek\Controllers'], function () {
    Route::get('posts', [PostController::class, 'index']);
});
