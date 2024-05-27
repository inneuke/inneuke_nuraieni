<?php

namespace App\Http;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;


Route::get('/', [KelasController::class, 'index']); // Ubah cara pendefinisian controller 
Route::get('kelas/add', [KelasController::class, 'create']); // Ubah cara pendefinisian controller
Route::post('kelas/add', [KelasController::class, 'store']);
