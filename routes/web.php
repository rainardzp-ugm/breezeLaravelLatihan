<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\Admin\JobController as AdminJobController;
use App\Http\Controllers\SendEmailController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');

// Route khusus Admin
Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin/jobs', [AdminJobController::class, 'index'])->name('admin.jobs.index');
});

Route::get('/admin', function() {
    return "Halaman Admin";
})->middleware(['auth', 'isAdmin'])->name('admin.page');

Route::get('/user/dashboard', function() {
    return "Halaman User";
})->middleware(['auth', 'isUser'])->name('user.dashboard');

Route::get('/send-mail', [SendEmailController::class, 'index'])->name('kirim-email');

Route::post('/post-mail', [SendEmailController::class, 'store'])->name('post-email');