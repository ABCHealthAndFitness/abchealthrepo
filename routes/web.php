<?php

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
    return view('frontend.home');
});



Route::get('/dashboard', function () {
    return view('backend.admin.dashboard');
});

Route::get('/customers', [App\Http\Controllers\CustomersController::class, 'fetchCustomers']);

Route::prefix('/user')-> group(
    function(){
        Route::get('/register', function () {
            return view('frontend.registration');
        });
        
        Route::get('/schedule', function () {
            return view('frontend.schedule');
        });

        Route::post('/registration', [App\Http\Controllers\CustomersController::class, 'index']);
    }
);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
