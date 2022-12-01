<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterContoller;
use App\Http\Controllers\SessionContoller;


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
    return view('home');

});

Route::resource('client', ClientController::class);

/*login y registro*/
Route::get('/register', [RegisterContoller::class, 'create'])
    ->name('register.index');

Route::post('/register', [RegisterContoller::class, 'store'])
    ->name('register.store');
    
    
Route::get('/login', [SessionContoller::class, 'create'])
    ->name('login.index');

Route::post('/login', [SessionContoller::class, 'store'])
    ->name('login.store');

Route::get('logout', [SessionContoller::class, 'destroy'])
    ->name('login.destroy');    


   
    


