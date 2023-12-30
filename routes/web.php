<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Register;
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

Route::get('/', function () {
    return view('home');
});

// login user
Route::get('/login', [Register::class, 'Login'])->name('login');
Route::post('/loginuser', [Register::class, 'loginUser'])->name('loginuser');

// register user
Route::get('/register', [Register::class, 'Register']);
Route::post('/formdata', [Register::class, 'data']);

Route::get('/employer-dashboard', [Register::class, 'employerDashboard']);
Route::get('/jobseeker-dashboard', [Register::class, 'jobseekerDashboard']);
