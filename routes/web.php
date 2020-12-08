<?php

use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
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

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class)->except(['destroy']);
    Route::get('delete/role/{id}', [RoleController::class,'destroy'])->name('roles.destroy');
    Route::resource('users', UserController::class)->except(['destroy']);
    Route::get('delete/user/{id}', [UserController::class,'destroy'])->name('users.destroy');
    Route::resource('permissions', PermissionController::class)->except(['show','destroy']);
    Route::get('delete/permission/{id}',  [PermissionController::class,'destroy'])->name('permissions.destroy');
});
Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
