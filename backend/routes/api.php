<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\RecordsController;
use App\Http\Controllers\UserController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// user authentication routes
Route::post('/login', [AuthController::class, 'login']);

// route for creating account
Route::post('/register', [UserController::class, 'store']);

// route logout
Route::post('/logout', [AuthController::class, 'logout']);

// crud patients
Route::get('/patients', [PatientsController::class, 'index']);
Route::get('/patients/{id}', [PatientsController::class, 'show']);
Route::post('/patients', [PatientsController::class, 'store']);
Route::put('/patients/{id}', [PatientsController::class, 'update']);
Route::delete('/patients/{id}', [PatientsController::class, 'destroy']);

// crud doctors
Route::get('/doctors', [DoctorsController::class, 'index']);
Route::get('/doctors/{id}', [DoctorsController::class, 'show']);
Route::post('/doctors', [DoctorsController::class, 'store']);
Route::put('/doctors/{id}', [DoctorsController::class, 'update']);
Route::delete('/doctors/{id}', [DoctorsController::class, 'destroy']);

// crud appointments
Route::get('/appointments', [AppointmentsController::class, 'index']);
Route::get('/appointments/{id}', [AppointmentsController::class, 'show']);
Route::post('/appointments', [AppointmentsController::class, 'store']);
Route::put('/appointments/{id}', [AppointmentsController::class, 'update']);
Route::delete('/appointments/{id}', [AppointmentsController::class, 'destroy']);

// crud records
Route::get('/records', [RecordsController::class, 'index']);
Route::get('/records/{id}', [RecordsController::class, 'show']);
Route::post('/records', [RecordsController::class, 'store']);
Route::put('/records/{id}', [RecordsController::class, 'update']);
Route::delete('/records/{id}', [RecordsController::class, 'destroy']);