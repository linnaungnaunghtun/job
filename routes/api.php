<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecommedController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix("v1")->group(function () {
    Route::get("/", function () {
        $response = [
            "message"      => "Welcome From Our Organization",
            "developed_by" => "Radiant lrr",
            "contact"      => "+91 9876543210",
        ];
        return response()->json($response);
    });
    Route::controller(AuthController::class)->group(function () {
        Route::post('/login', 'login');
        Route::post('/register', 'register');
    });
    Route::middleware('auth:sanctum')->group(function () {
        Route::controller(ProfileController::class)->prefix("user-profile")->group(function () {
            Route::post('/logout', 'logout');
            Route::get('/profile', 'profile');
            Route::post('/change-password', 'changePassword');
            Route::post('/change-name', 'changeName');
            Route::post('/change-profile-image', 'changeProfileImage');
        });

        Route::apiResource('gallery', GalleryController::class)->except('update');
        Route::apiResource('recommends', RecommedController::class);
        Route::apiResource('courses', CourseController::class);
        Route::apiResource('jobs', JobController::class);
    });
});
