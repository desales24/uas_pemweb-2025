<?php

use App\Http\Controllers\ScholarshipController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentScholarshipController;
use Illuminate\Support\Facades\Route;

Route::prefix('scholarships')->middleware('apikey')->group(function () {
    Route::get('/', [ScholarshipController::class, 'index']);
    Route::post('/', [ScholarshipController::class, 'store']);
    Route::get('{id}', [ScholarshipController::class, 'show']);
    Route::put('{id}', [ScholarshipController::class, 'update']);
    Route::delete('{id}', [ScholarshipController::class, 'destroy']);
});

Route::prefix('students')->middleware('apikey')->group(function () {
    Route::get('/', [StudentController::class, 'index']);
    Route::post('/', [StudentController::class, 'store']);
    Route::get('{id}', [StudentController::class, 'show']);
    Route::put('{id}', [StudentController::class, 'update']);
    Route::delete('{id}', [StudentController::class, 'destroy']);
});


Route::prefix('student-scholarships')->middleware('apikey')->group(function () {
    Route::get('/', [StudentScholarshipController::class, 'index']);
    Route::post('/', [StudentScholarshipController::class, 'store']);
    Route::delete('{id}', [StudentScholarshipController::class, 'destroy']);
});