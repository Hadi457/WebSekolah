<?php
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SchoolProfileController;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [AdministratorController::class,'home'])->name('home');
Route::get('/profile-sekolah', [SchoolProfileController::class,'index'])->name('profile-sekolah');
Route::get('/eskul', [ExtracurricularController::class, 'index'])->name('eskul');
Route::get('/galeri', [GalleryController::class, 'index'])->name('galeri');
Route::get('/kontak', [ContactController::class, 'index'])->name('kontak');
Route::get('/berita', [NewsController::class, 'index'])->name('berita');

Route::middleware(['admin'])->group(function () {
    Route::get('/admin/dashbord', [AdministratorController::class, 'index'])->name('dashbord');
    Route::get('/admin/berita', [AdministratorController::class, 'berita'])->name('berita');
    Route::get('/admin/user', [AdministratorController::class, 'user'])->name('user');
    Route::get('/admin/guru', [AdministratorController::class, 'guru'])->name('guru');
    Route::get('/admin/siswa', [AdministratorController::class, 'siswa'])->name('siswa');
    Route::get('/admin/galeri', [AdministratorController::class, 'galeri'])->name('galeri');
    Route::get('/admin/eskul', [AdministratorController::class, 'eskul'])->name('eskul');
    Route::get('/admin/profile-sekolah', [AdministratorController::class, 'profilesekolah'])->name('profile-sekolah');
});


Route::get('/login', [AuthenticationController::class, 'auth'])->name('login');
Route::post('/login', [AuthenticationController::class, 'authentication'])->name('authentication');
Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout');


