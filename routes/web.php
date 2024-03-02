<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jobs\JobsController;
use App\Http\Controllers\featurejobs\FeatureController;

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

Route::get('/', [FeatureController::class, 'index'])->name('home');
Route::get('/jobscareer/{companyname}', [FeatureController::class, 'showJobs'])->name('jobs.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /** jobs routes **/
    Route::get('/jobs', [JobsController::class, 'index'])->name('show');
    Route::get('/jobs/create', [JobsController::class, 'show'])->name('show.jobs');
    Route::post('/jobs/create', [JobsController::class, 'store'])->name('create.jobs');
    Route::get('/jobs/update/{id}', [JobsController::class, 'edit'])->name('edit.jobs');
    Route::put('/jobs/update/{id}', [JobsController::class, 'update'])->name('update.jobs');
    Route::delete('/jobs/delete/{id}', [JobsController::class, 'destroy'])->name('delete.jobs');
});

require __DIR__.'/auth.php';
