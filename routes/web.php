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

Route::get('/', [AdministratorController::class,'Home'])->name('home');
Route::get('/profile-sekolah', [SchoolProfileController::class,'Index'])->name('profile-sekolah');
Route::get('/eskul', [ExtracurricularController::class, 'Index'])->name('eskul');
Route::get('/eskul/detail', [ExtracurricularController::class, 'EskulDetail'])->name('eskul-detail');
Route::get('/galeri', [GalleryController::class, 'Index'])->name('galeri');
Route::get('/kontak', [ContactController::class, 'Index'])->name('kontak');
Route::get('/berita', [NewsController::class, 'Index'])->name('berita');

Route::middleware(['admin'])->group(function () {
    Route::get('/admin/dashbord', [AdministratorController::class, 'Index'])->name('dashbord');
    Route::get('/admin/berita', [AdministratorController::class, 'Berita'])->name('berita');
    Route::get('/admin/user', [AdministratorController::class, 'User'])->name('user');
    Route::get('/admin/guru', [AdministratorController::class, 'Guru'])->name('guru');
    Route::get('/admin/siswa', [AdministratorController::class, 'Siswa'])->name('siswa');
    Route::get('/admin/galeri', [AdministratorController::class, 'Galeri'])->name('galeri');
    Route::get('/admin/eskul', [AdministratorController::class, 'Eskul'])->name('eskul');
    Route::get('/admin/profile-sekolah', [AdministratorController::class, 'ProfileSekolah'])->name('profile-sekolah');
});


Route::get('/login', [AuthenticationController::class, 'Auth'])->name('login');
Route::post('/login', [AuthenticationController::class, 'Authentication'])->name('authentication');
Route::get('/logout', [AuthenticationController::class, 'Logout'])->name('logout');


