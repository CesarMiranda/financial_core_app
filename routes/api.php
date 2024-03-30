<?php

use App\Http\Controllers\Movement\MovementController;
use App\Http\Controllers\User\UserController;
use App\Models\MovementType;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

/**
 * Users
*/
Route::resource('users', UserController::class, ['except' => ['create', 'edit']]);

/**
 * Movements
 */
Route::resource('movements', MovementController::class, ['except' => ['create', 'edit']]);

/**
 * Movement Types
 */
Route::resource('movement-types', MovementType::class, ['except' => ['create', 'edit']]);
