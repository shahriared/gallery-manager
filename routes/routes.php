<?php

use Illuminate\Support\Facades\Route;
use Shahriared\GalleryManager\Http\Controllers\GalleryController;
use Shahriared\GalleryManager\Http\Controllers\GalleryImageController;

Route::group([
    'middleware' => config('gallery-manager.middleware', ['web']),
    'domain' => config('gallery-manager.domain', null),
    'prefix' => config('gallery-manager.prefix'),
], function () {
    Route::prefix('gallery-manager')->group(function () {
        Route::resource('gallery', GalleryController::class);;
        Route::resource('gallery-image', GalleryImageController::class);;
    });
});
