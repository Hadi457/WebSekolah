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

Route::get('/template', [AdministratorController::class,'TemplateHome'])->name('template');
Route::get('/template', [AdministratorController::class,'Template'])->name('template');
Route::get('/', [AdministratorController::class,'Home'])->name('home');
Route::get('/profile-sekolah', [SchoolProfileController::class,'Index'])->name('profile-sekolah');
Route::get('/eskul', [ExtracurricularController::class, 'Index'])->name('eskul');
Route::get('/eskul/detail/{id}', [ExtracurricularController::class, 'EskulDetail'])->name('eskul-detail');
Route::get('/galeri', [GalleryController::class, 'Index'])->name('galeri');
Route::get('/kontak', [ContactController::class, 'Index'])->name('kontak');
Route::get('/berita', [NewsController::class, 'Index'])->name('berita');
Route::get('/berita/detail/{id}', [NewsController::class, 'BeritaDetail'])->name('berita-detail');
Route::get('/guru', [TeacherController::class, 'Index'])->name('guru');
Route::get('/siswa', [StudentController::class, 'Index'])->name('siswa');

Route::middleware(['admin'])->group(function () {
    Route::get('/admin/dashboard', [AdministratorController::class, 'Index'])->name('dashboard');
    // Berita
    Route::get('/admin/berita', [AdministratorController::class, 'Berita'])->name('admin-berita');
    Route::post('/admin/berita/create', [NewsController::class, 'Store'])->name('berita-store');
    Route::get('/admin/berita/delete/{id}', [NewsController::class, 'Delete'])->name('berita-delete');
    Route::post('/admin/berita/update/{id}', [NewsController::class, 'Update'])->name('berita-update');
    // User
    Route::get('/admin/user ', [AdministratorController::class, 'User'])->name('user');
    Route::post('/admin/user/create', [UserController::class, 'Store'])->name('user-store');
    Route::get('/admin/user/delete/{id}', [UserController::class, 'Delete'])->name('user-delete');
    Route::post('/admin/user/update/{id}', [UserController::class, 'Update'])->name('user-update');
    // Guru
    Route::get('/admin/guru', [AdministratorController::class, 'Guru'])->name('admin-guru');
    Route::post('/admin/guru/create', [TeacherController::class, 'Store'])->name('guru-store');
    Route::get('/admin/guru/delete/{id}', [TeacherController::class, 'Delete'])->name('guru-delete');
    Route::post('/admin/guru/update/{id}', [TeacherController::class, 'Update'])->name('guru-update');
    // Siswa
    Route::get('/admin/siswa', [AdministratorController::class, 'Siswa'])->name('siswa');
    Route::post('/admin/siswa/create', [StudentController::class, 'Store'])->name('siswa-store');
    Route::get('/admin/siswa/delete/{id}', [StudentController::class, 'Delete'])->name('siswa-delete');
    Route::post('/admin/siswa/update/{id}', [StudentController::class, 'Update'])->name('siswa-update');
    // Galeri
    Route::get('/admin/galeri', [AdministratorController::class, 'Galeri'])->name('admin-galeri');
    Route::post('/admin/galeri/create', [GalleryController::class, 'Store'])->name('galeri-store');
    Route::get('/admin/galeri/delete/{id}', [GalleryController::class, 'Delete'])->name('galeri-delete');
    Route::post('/admin/galeri/update/{id}', [GalleryController::class, 'Update'])->name('galeri-update');
    // Eskul
    Route::get('/admin/eskul', [AdministratorController::class, 'Eskul'])->name('admin-eskul');
    Route::post('/admin/eskul/create', [ExtracurricularController::class, 'Store'])->name('eskul-store');
    Route::get('/admin/eskul/delete/{id}', [ExtracurricularController::class, 'Delete'])->name('eskul-delete');
    Route::post('/admin/eskul/update/{id}', [ExtracurricularController::class, 'Update'])->name('eskul-update');
    // Profile Sekolah
    Route::get('/admin/profile-sekolah', [AdministratorController::class, 'ProfileSekolah'])->name('profile-sekolah');
    Route::post('/admin/profile-sekolah/edit/{id}', [SchoolProfileController::class, 'Update'])->name('profile-sekolah-update');
});

Route::middleware(['operator'])->group(function () {
    Route::get('/admin/dashboard', [AdministratorController::class, 'Index'])->name('dashboard');
    // Berita
    Route::get('/admin/berita', [AdministratorController::class, 'Berita'])->name('admin-berita');
    Route::post('/admin/berita/create', [NewsController::class, 'Store'])->name('berita-store');
    Route::get('/admin/berita/delete/{id}', [NewsController::class, 'Delete'])->name('berita-delete');
    Route::post('/admin/berita/update/{id}', [NewsController::class, 'Update'])->name('berita-update');

    Route::get('/admin/user ', [AdministratorController::class, 'User'])->name('user');
    Route::get('/admin/guru', [AdministratorController::class, 'Guru'])->name('admin-guru');
    Route::get('/admin/siswa', [AdministratorController::class, 'Siswa'])->name('siswa');
    Route::get('/admin/profile-sekolah', [AdministratorController::class, 'ProfileSekolah'])->name('profile-sekolah');
    // Galeri
    Route::get('/admin/galeri', [AdministratorController::class, 'Galeri'])->name('admin-galeri');
    Route::post('/admin/galeri/create', [GalleryController::class, 'Store'])->name('galeri-store');
    Route::get('/admin/galeri/delete/{id}', [GalleryController::class, 'Delete'])->name('galeri-delete');
    Route::post('/admin/galeri/update/{id}', [GalleryController::class, 'Update'])->name('galeri-update');
    // Eskul
    Route::get('/admin/eskul', [AdministratorController::class, 'Eskul'])->name('admin-eskul');
    Route::post('/admin/eskul/create', [ExtracurricularController::class, 'Store'])->name('eskul-store');
    Route::get('/admin/eskul/delete/{id}', [ExtracurricularController::class, 'Delete'])->name('eskul-delete');
    Route::post('/admin/eskul/update/{id}', [ExtracurricularController::class, 'Update'])->name('eskul-update');
});

Route::get('/login', [AuthenticationController::class, 'Auth'])->name('login');
Route::post('/login', [AuthenticationController::class, 'Authentication'])->name('authentication');
Route::get('/logout', [AuthenticationController::class, 'Logout'])->name('logout');


