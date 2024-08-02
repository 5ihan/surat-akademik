<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('mahasiswa.index');
})->name('index');

Route::get('/index', [AdminController::class, 'index'])->name('admin.dashboard');

Route::get('/suratkeluar', function () {
    return view('admin.suratkeluar');
});

Route::get('/suratmasuk', function () {
    return view('admin.suratmasuk');
});

Route::get('/suratditolak', function () {
    return view('admin.suratditolak');
});

Route::get('/addadmin', function () {
    return view('admin.addadmin');
});

Route::get('/viewadmin', function () {
    return view('admin.viewadmin');
});

Route::get('/loginadmin', function () {
    return view('admin.loginadmin');
});

Route::get('/register', function () {
    return view('admin.register');
});

// Group Route Mahasiswa name route prefix mahasiswa
Route::group(['prefix' => 'mahasiswa', 'as' => 'mahasiswa.'], function () {
    Route::post('/logout', [MahasiswaController::class, 'logout'])->name('logout');
    Route::middleware('guest')->group(function () {
        Route::get('/login', [MahasiswaController::class, 'login'])->name('login');
        Route::post('/login', [MahasiswaController::class, 'loginPOST'])->name('login.post');
        Route::get('/register', [MahasiswaController::class, 'register'])->name('register');
        Route::post('/register', [MahasiswaController::class, 'registerPOST'])->name('register.post');
    });

    Route::get('/', [MahasiswaController::class, 'index'])->name('index');
    Route::get('/pengajuan-surat/aktifasi', [MahasiswaController::class, 'pengajuanSurat_aktifasi'])->name('pengajuan-surat.aktifasi');
    Route::get('/pengajuan-surat/magang', [MahasiswaController::class, 'pengajuanSurat_magang'])->name('pengajuan-surat.magang');
    Route::get('/pengajuan-surat/izin-penelitian', [MahasiswaController::class, 'pengajuanSurat_izin_penelitian'])->name('pengajuan-surat.izin-penelitian');
    Route::get('/pengajuan-surat/rekomendasi-beasiswa', [MahasiswaController::class, 'pengajuanSurat_rekomendasi_beasiswa'])->name('pengajuan-surat.rekomendasi-beasiswa');
    Route::get('/pengajuan-surat/surat-lain', [MahasiswaController::class, 'pengajuanSurat_surat_lain'])->name('pengajuan-surat.surat-lain');
    Route::post('/pengajuan-surat', [MahasiswaController::class, 'pengajuanSuratPOST'])->name('pengajuan-surat.post');
});

Route::get('/generate-surat-aktifasi', [PdfController::class, 'generateSuratAktifasi']);
Route::get('/generate-surat-izin-penelitian', [PdfController::class, 'generateSuratIzinPenelitian']);
Route::get('/generate-surat-magang', [PdfController::class, 'generateSuratMagang']);
Route::get('/generate-surat-rekomendasi-beasiswa', [PdfController::class, 'generateSuratRekomendasiBeasiswa']);
Route::get('/generate-surat-lain', [PdfController::class, 'generateSuratLain']);
