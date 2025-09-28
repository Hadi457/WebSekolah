<?php
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SchoolProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AdministratorController::class,'Home'])->name('home');
Route::get('/profile-sekolah', [SchoolProfileController::class,'Index'])->name('profile-sekolah');
Route::get('/eskul', [ExtracurricularController::class, 'Index'])->name('eskul');
Route::get('/eskul/detail', [ExtracurricularController::class, 'EskulDetail'])->name('eskul-detail');
Route::get('/galeri', [GalleryController::class, 'Index'])->name('galeri');
Route::get('/kontak', [ContactController::class, 'Index'])->name('kontak');
Route::get('/berita', [NewsController::class, 'Index'])->name('berita');
Route::get('/berita/detail', [NewsController::class, 'BeritaDetail'])->name('berita-detail');
Route::get('/guru', [TeacherController::class, 'Index'])->name('guru');

Route::middleware(['admin'])->group(function () {
    Route::get('/admin/dashbord', [AdministratorController::class, 'Index'])->name('dashbord');
    // Berita
    Route::get('/admin/berita', [AdministratorController::class, 'Berita'])->name('berita');
    Route::post('/admin/berita/create', [NewsController::class, 'Store'])->name('berita-store');
    Route::get('/admin/berita/delete/{id}', [NewsController::class, 'Delete'])->name('berita-delete');
    // User
    Route::get('/admin/user', [AdministratorController::class, 'User'])->name('user');
    Route::post('/admin/user/create', [UserController::class, 'Store'])->name('user-store');
    Route::get('/admin/user/delete/{id}', [UserController::class, 'Delete'])->name('user-delete');
    // Guru
    Route::get('/admin/guru', [AdministratorController::class, 'Guru'])->name('guru');
    Route::post('/admin/guru/create', [TeacherController::class, 'Store'])->name('guru-store');
    Route::get('/admin/guru/delete/{id}', [TeacherController::class, 'Delete'])->name('guru-delete');
    // Siswa
    Route::get('/admin/siswa', [AdministratorController::class, 'Siswa'])->name('siswa');
    Route::post('/admin/siswa/create', [StudentController::class, 'Store'])->name('siswa-store');
    Route::get('/admin/siswa/delete/{id}', [StudentController::class, 'Delete'])->name('siswa-delete');
    // Galeri
    Route::get('/admin/galeri', [AdministratorController::class, 'Galeri'])->name('galeri');
    Route::post('/admin/galeri/create', [GalleryController::class, 'Store'])->name('galeri-store');
    Route::get('/admin/galeri/delete/{id}', [GalleryController::class, 'Delete'])->name('galeri-delete');
    // Eskul
    Route::get('/admin/eskul', [AdministratorController::class, 'Eskul'])->name('eskul');
    Route::post('/admin/eskul/create', [ExtracurricularController::class, 'Store'])->name('eskul-store');
    Route::get('/admin/eskul/delete/{id}', [ExtracurricularController::class, 'Delete'])->name('eskul-delete');
    // Profile Sekolah
    Route::get('/admin/profile-sekolah', [AdministratorController::class, 'ProfileSekolah'])->name('profile-sekolah');
    Route::post('/admin/profile-sekolah/edit/{id}', [SchoolProfileController::class, 'Update'])->name('profile-sekolah-update');
});


Route::get('/login', [AuthenticationController::class, 'Auth'])->name('login');
Route::post('/login', [AuthenticationController::class, 'Authentication'])->name('authentication');
Route::get('/logout', [AuthenticationController::class, 'Logout'])->name('logout');


