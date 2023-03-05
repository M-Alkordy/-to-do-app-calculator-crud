<?php

use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;


Route::get('/', [TasksController::class , 'index']);

Route::get('/create', [TasksController::class , 'create']);

Route::post('/', [TasksController::class , 'store']);

Route::patch('/{id}', [TasksController::class , 'update']);

Route::delete('/{id}', [TasksController::class , 'destroy']);
