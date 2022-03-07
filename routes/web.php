<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [BookController::class, 'index']);
Route::get('/search', [BookController::class, 'search']);
Route::get('/details', [BookController::class, 'details']);
Route::get('/purchase/{id}', [BookController::class, 'purchase']);
Route::get('/thankyou/{id}', [SalesController::class, 'store']);

Route::group(['middleware' => ['admin']], function() {
    Route::get('/dashboard/inventory', [BookController::class, 'inventory'])->name('inventory');
    Route::get('/dashboard/sales', [SalesController::class, 'index'])->name('sales');

    Route::get('/dashboard/inventory/create', [BookController::class, 'create']);
    Route::post('/dashboard/inventory/store', [BookController::class, 'store']);

    Route::get('/dashboard/inventory/{id}/edit', [BookController::class, 'edit']);
    Route::put('/dashboard/inventory/{id}', [BookController::class, 'update']);

    Route::delete('/dashboard/inventory/{id}', [BookController::class, 'destroy']);
});

Route::get('/dashboard', [BookController::class, 'index'])->middleware(['auth'])->name('dashboard');
 
require __DIR__.'/auth.php';

