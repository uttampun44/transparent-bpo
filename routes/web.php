<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jobs\JobsController;
use App\Http\Controllers\featurejobs\FeatureController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\User\UserController;
use App\Http\Middleware\Admin;
use App\Http\Middleware\User;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Applicants\ApplicantsController;

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


Route::middleware(User::class)->group( function(){

    Route::get('/user/dashboard', [UserController::class, '__invoke'])->name('user');

    Route::get('/user/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/user/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/user/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(Admin::class)->group(function () {

    Route::get('/admin/dashboard', [DashboardController::class, '__invoke'])->name('dashboard');
    Route::get('/admin/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/admin/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/admin/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

     /** job category **/
     Route::get('/admin/category', [CategoryController::class, 'index'])->name('category');
     Route::get('/admin/category/create', [CategoryController::class, 'show'])->name('category.show');
     Route::post('/admin/category/create', [CategoryController::class, 'store'])->name('category.create');
     Route::get('/admin/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
     Route::put('/admin/category/edit/{id}', [CategoryController::class, 'update'])->name('category.update');
     Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.delete');

    /** jobs routes **/
    Route::get('/admin/jobs', [JobsController::class, 'index'])->name('jobs');
    Route::get('/admin/jobs/create', [JobsController::class, 'show'])->name('show.jobs');
    Route::post('/admin/jobs/create', [JobsController::class, 'store'])->name('create.jobs');
    Route::get('/admin/jobs/update/{id}', [JobsController::class, 'edit'])->name('edit.jobs');
    Route::put('/admin/jobs/update/{id}', [JobsController::class, 'update'])->name('update.jobs');
    Route::delete('/admin/jobs/delete/{id}', [JobsController::class, 'destroy'])->name('delete.jobs');
    Route::resource('/admin/users', UsersController::class);
    Route::get('/admin/applicants', [ApplicantsController::class, '__invoke'])->name('applicants');

});

require __DIR__.'/auth.php';
