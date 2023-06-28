<?php

use App\Http\Controllers\Api\DoctorController;
use App\Http\Controllers\Api\SpecialisationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//ALL DOCTORS
Route::get('doctors', [DoctorController::class, 'index']);

//SEARCH Doctor by id
Route::get('doctor/{id}', [DoctorController::class, 'searchDoctorById']);

//ALL SPECIALISATIONS
Route::get('specialisations', [SpecialisationController::class, 'index']);

//SEARCH BY SPECIALISATION
Route::get('doctors/{searchQuery}', [DoctorController::class, 'searchDoctor']);

//Fetch all sponsored doctors
Route::get('doctor/sponsored', [DoctorController::class, 'sponsoredDoctors']);
