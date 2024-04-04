<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jobs\JobsController;
use App\Http\Controllers\featurejobs\FeatureController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\User\UserController;

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

Route::get('/', [FeatureController::class, 'index'])->name('home');
Route::get('/jobscareer/{slug}', [FeatureController::class, 'showJobs'])->name('jobs.show');



// Route::middleware(['auth', 'role:1'])->group( function(){

// });
Route::middleware(['auth', 'user:2'])->group( function(){

    Route::get('/user/dashboard', [UserController::class, '__invoke'])->name('user');

    Route::get('/user/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/user/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/user/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin:1'])->group(function () {

    Route::get('/admin/dashboard', [DashboardController::class, '__invoke'])->name('dashboard');
    Route::get('/admin/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/admin/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/admin/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

     /** job category **/
     Route::get('/category', [CategoryController::class, 'index'])->name('category');
     Route::get('/category/create', [CategoryController::class, 'show'])->name('category.show');
     Route::post('/category/create', [CategoryController::class, 'store'])->name('category.create');
     Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
     Route::put('/category/edit/{id}', [CategoryController::class, 'update'])->name('category.update');
     Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.delete');

    /** jobs routes **/
    Route::get('/jobs', [JobsController::class, 'index'])->name('jobs');
    Route::get('/jobs/create', [JobsController::class, 'show'])->name('show.jobs');
    Route::post('/jobs/create', [JobsController::class, 'store'])->name('create.jobs');
    Route::get('/jobs/update/{id}', [JobsController::class, 'edit'])->name('edit.jobs');
    Route::put('/jobs/update/{id}', [JobsController::class, 'update'])->name('update.jobs');
    Route::delete('/jobs/delete/{id}', [JobsController::class, 'destroy'])->name('delete.jobs');


});

require __DIR__.'/auth.php';
