<?php

use App\Http\Controllers\Freelancer\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Models\JobCategory;
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
//Common PHP convention
// index = show all
// show = single data
// create = equivalent to GET with create form
// store = equivalent to Post in ASP
// edit = edit with form GET
// update = update POST(Get first then update)
// destroy = delete the data 
Route::get('/', [HomeController::class, 'index'])->middleware('guest');

Route::get('/index', [HomeController::class, 'index'])->name('/')->middleware('guest');
Route::middleware('auth')->group(function () {
    Route::get('/jobs/create', [HomeController::class, 'create'])
        ->name('jobs.create');
    Route::post('jobs/create', [HomeController::class, 'store'])
        ->name('jobs.create.post');
});
Route::get('/jobs', [HomeController::class, 'jobs'])->name('jobs');
Route::get('/jobs/{id}', [HomeController::class, 'show'])->name('jobs.job');


Route::get('/dashboard',[DashboardController::class,'index'])
->middleware(['auth', 'verified'])->name('freelancer.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
