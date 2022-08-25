<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('admin_dashboard');
})->middleware('auth');

Route::middleware('auth')->group(function () {

    Route::get('/admin_logout', [AdminController::class, 'logout'])->name('admin_logout');
    Route::get('/admin_dashboard', [AdminController::class, 'admin_dashboard'])->name('admin_dashboard');
    Route::get('/index', [AdminController::class, 'index'])->name('index');
    Route::get('/show_add_user', [AdminController::class, 'show_add_user'])->name('show_add_user');
    Route::get('/csv', [AdminController::class, 'csv'])->name('csv');
    Route::get('/org', [AdminController::class, 'org'])->name('org');
    Route::get('/add_org', [AdminController::class, 'add_org'])->name('add_org');

});

Route::get('/dashboard', function () {
    return view('admin_dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
