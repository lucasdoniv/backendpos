<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModelsController;
use App\Http\Controllers\BrandsController;


Route::get('/models', [ModelsController::class, 'getModels']);
Route::get('/models/{modelAuto}', [ModelsController::class, 'show']);
Route::post('/models', [ModelsController::class, 'addModel']);
Route::patch('/models/{modelAuto}', [ModelsController::class, 'update']);
Route::delete('/models/{modelAuto}', [ModelsController::class, 'destroy']);

Route::get('/brands', [BrandsController::class, 'getBrands']);


