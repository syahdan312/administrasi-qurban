<?php

use App\Http\Controllers\QurbanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// === QURBAN CRUD ===
Route::get('/qurban', [QurbanController::class, 'index'])->name('qurban.index');
Route::get('/qurban/create/{jenis?}', [QurbanController::class, 'create'])->name('qurban.create');
Route::post('/qurban', [QurbanController::class, 'store'])->name('qurban.store');
Route::get('/qurban/{id}/edit', [QurbanController::class, 'edit'])->name('qurban.edit');
Route::delete('/qurban/{id}', [QurbanController::class, 'destroy'])->name('qurban.destroy');
Route::get('/qurban/{jenis}', [QurbanController::class, 'show'])->name('qurban.show');

// === DASHBOARD (hanya untuk user login) ===
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::delete('/admin/delete/{id}', [DashboardController::class, 'destroy'])->name('admin.delete');

    // Profile
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile.edit');

    // Logout
    Route::post('/logout', function () {
        Auth::logout();
        return redirect()->route('login');
    })->name('logout');
});

// === AUTH ROUTES (untuk tamu yang belum login) ===
Route::middleware('guest')->group(function () {
    // Halaman Login
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store']);

    // Halaman Register
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);
});

// === DEFAULT REDIRECT ===
Route::get('/', function () {
    return redirect()->route('dashboard');
});
