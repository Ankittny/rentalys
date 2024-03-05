<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RoleController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/admin/login",[AdminController::class,'index'])->name('admin');
Route::get("/logoutadmin",[AdminController::class,'logoutadmin'])->name('logoutadmin');
Route::post("adminlogin",[AdminController::class,'adminlogin'])->name('adminlogin');


Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get("/dashboard",[AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::resource('roles', RoleController::class);
});
