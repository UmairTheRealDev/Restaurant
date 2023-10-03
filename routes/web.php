<?php

use App\Http\Controllers\ChefsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [HomeController::class,'index']);
Route::get('/redirect', [HomeController::class,'redirect']);
Route::get('users',[HomeController::class,"userindex"])->name('user.index');
Route::get('users/{id}',[HomeController::class,"userdelete"])->name('user.delete');
Route::get('chefs',[ChefsController::class,'index'])->name('chefs.create');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
