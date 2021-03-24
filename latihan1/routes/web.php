<?php

use Illuminate\Support\Facades\Route;
use Iluminate\HTTP\Request;
use App\Http\Controllers\ManagementUserController;
use App\Http\Resources;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('user', [ManagementUserController::class, 'index']);
// Route::get('/create', [ManagementUserController::class, 'create']);
Route::resource('user', ManagementUserController::class);
