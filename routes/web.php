<?php

use App\Http\Controllers\PizzaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function(){
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/pizza', [PizzaController::class, 'index'])->name('PizzaList');
Route::get('/pizza/create', [PizzaController::class, 'create']);
Route::post('/pizza', [PizzaController::class, 'store']);
Route::get('/pizza/{id}', [PizzaController::class, 'show']);
Route::delete('/pizza/{id}', [PizzaController::class, 'destroy']);


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');




