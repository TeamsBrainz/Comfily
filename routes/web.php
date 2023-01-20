<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\CategoryController;



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

Route::get('/', [FrontController::class, 'index']);

Route::get('about', [FrontController::class, 'about']);

Route::get('contact', [FrontController::class, 'contact']);

Route::get('report', [FrontController::class, 'report']);

Route::get('properties', [FrontController::class, 'properties']);

Route::get('all-categories', [FrontController::class, 'categories']);

Route::middleware(['auth'])->group(function () {

    Route::middleware('is_admin')->group(
        function () {

            //put all the admin routes inside here
            Route::get('admin', AdminDashboardController::class)->name('admin.dashboard');
            Route::resource('category', CategoryController::class);
        }
    );

    // Put all user routes here
    Route::get('user', DashboardController::class)->name('user.dashboard');
});
