<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\PretestController;
use App\Http\Controllers\PosttestController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\ContactController;


















// Route::view('berita', 'berita');









// Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
// Route::post('/login', [LoginController::class, 'authenticate']);
// Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

// Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
// Route::post('/register', [RegisterController::class, 'store']);




// Route::view('/', 'index');


// Route::middleware(['auth'])->group(function () {
//     Route::get('/pretest', [PretestController::class, 'index'])->name('pretest.index');
//     Route::post('/pretest', [PretestController::class, 'store'])->name('pretest.store');
// });


// Route::middleware('auth')->group(function () {
//     Route::get('/absen', [AbsenController::class, 'index'])->name('absen.index');
//     Route::post('/absen', [AbsenController::class, 'store'])->name('absen.store');
// });




































// Routes for login and registration
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);







// Protect all other routes with auth middleware
Route::middleware(['auth'])->group(function () {
    
    
Route::view('gempabumi', 'isihome.gempabumi.pengertian');
Route::view('penyebab-gempabumi', 'isihome.gempabumi.penyebab');
Route::view('dampak-gempabumi', 'isihome.gempabumi.dampak');
Route::view('karakteristik-gempabumi', 'isihome.gempabumi.karakteristik');
Route::view('klasifikasi-gempabumi', 'isihome.gempabumi.klasifikasi');
Route::view('mitigasi-gempabumi', 'isihome.gempabumi.mitigasi');
Route::view('tindakan-pencegahan-gempabumi', 'isihome.gempabumi.tindakan');
Route::view('daftar-pustaka-gempabumi', 'isihome.gempabumi.daftar');
Route::view('video-gempabumi', 'isihome.gempabumi.video');

Route::view('banjir', 'isihome.banjir.pengertian');
Route::view('jenis-jenis-banjir', 'isihome.banjir.jenisjenis');
Route::view('penyebab-banjir', 'isihome.banjir.penyebab');
Route::view('dampak-banjir', 'isihome.banjir.dampak');
Route::view('mitigasi-banjir', 'isihome.banjir.mitigasi');
Route::view('persiapan-menghadapi-banjir', 'isihome.banjir.persiapan');
Route::view('tindakan-saat-terjadi-banjir', 'isihome.banjir.tindakan');
Route::view('daftar-pustaka-banjir', 'isihome.banjir.daftar');
Route::view('video-banjir', 'isihome.banjir.video');



Route::view('kebakaran', 'isihome.kebakaran.pengertian');
Route::view('penyebab-kebakaran', 'isihome.kebakaran.penyebab');
Route::view('mitigasi-kebakaran', 'isihome.kebakaran.mitigasi');
Route::view('tindakan-saat-terjadi-kebakaran', 'isihome.kebakaran.tindakan');
Route::view('daftar-pustaka-kebakaran', 'isihome.kebakaran.daftar');
Route::view('video-kebakaran', 'isihome.kebakaran.video');
    
    
    
    
    
Route::view('berita', 'berita');

Route::view('berita-1', 'isiberita.berita1');
Route::view('berita-2', 'isiberita.berita2');
Route::view('berita-3', 'isiberita.berita3');
Route::view('berita-4', 'isiberita.berita4');

Route::view('video', 'video');
Route::view('about', 'about');
Route::view('contact', 'contact');
    
    
    
    
    
    
    
    
    
    Route::view('/', 'index'); // Homepage, accessible only after login
    
    // Pretest routes
    Route::get('/pretest', [PretestController::class, 'index'])->name('pretest.index');
    Route::post('/pretest', [PretestController::class, 'store'])->name('pretest.store');
Route::get('/pretest/result/{user_id}', [PretestController::class, 'result'])->name('pretest.result');


    Route::get('/posttest', [PosttestController::class, 'index'])->name('posttest.index');
    Route::post('/posttest', [PosttestController::class, 'store'])->name('posttest.store');
Route::get('/posttest/result/{user_id}', [PosttestController::class, 'result'])->name('posttest.result');
    
    
    // Absen routes

Route::get('/absen', [AbsenController::class, 'index'])->name('absen.index');
Route::post('/absen', [AbsenController::class, 'store'])->name('absen.store');







});








Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('send.email');






