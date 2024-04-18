<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TrainingCourseController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\SeanceController;
use App\Http\Controllers\SessController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\TraineeController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware('api')->group(function () {
    Route::resource('subjects', SubjectController::class);
});

Route::middleware('api')->group(function () {
    Route::resource('trainingcourses', TrainingCourseController::class);
});

Route::middleware('api')->group(function () {
    Route::resource('modules', ModuleController::class);
});

Route::middleware('api')->group(function () {
    Route::resource('sesses', SessController::class);
});

Route::middleware('api')->group(function () {
    Route::resource('trainers', TrainerController::class);
});

Route::middleware('api')->group(function () {
    Route::resource('trainees', TraineeController::class);
});

Route::middleware('api')->group(function () {
    Route::resource('seances', SeanceController::class);
});
