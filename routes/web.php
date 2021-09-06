<?php

use App\Http\Controllers\PidoyController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get("/crud", [PidoyController::class, 'index']);

Route::get('/crud/{id}', [PidoyController::class, 'edit']);

Route::post('/crud', [PidoyController::class, 'store']);

Route::put('/crud/{id}/update', [PidoyController::class, 'update']);

Route::delete('/crud/{id}', [PidoyController::class, 'delete']);

Route::get('/x/create-user', [PidoyController::class, 'create']);

require __DIR__ . '/auth.php';
