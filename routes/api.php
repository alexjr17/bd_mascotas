<?php

use App\Http\Controllers\MascotaController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware(['auth:sanctum'])->group(function () {

    Route::resource('user', UserController::class)->only(['index']);
    Route::resource('mascotas', MascotaController::class)->only(['index', 'store', 'edit', 'update', 'destroy']);
    Route::resource('roles', RoleController::class)->only(['index','store', 'destroy']);
    Route::get('roles/{id}/permissions', [RoleController::class, 'permission']);
    Route::get('roles/permissions', [RoleController::class, 'permissions']);
    Route::put('roles/{id}/permissions', [RoleController::class, 'permissionsStore']);

});

