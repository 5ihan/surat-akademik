<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('mahasiswa.index');
})->name('index');

// Group Route Admin name route prefix Admin
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
    Route::middleware(['guest:admin'])->group(function () {
        Route::get('/login', [AdminController::class, 'login'])->name('login');
        Route::post('/login', [AdminController::class, 'loginPOST'])->name('login.post');
    });
    Route::middleware(['admin'])->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('dashboard');
        Route::get('/add', [AdminController::class, 'add_admin'])->name('add');
        Route::post('/add', [AdminController::class, 'adminPOST'])->name('add.post');
        Route::get('/edit/{admin}', [AdminController::class, 'edit_admin'])->name('edit');
        Route::post('/edit', [AdminController::class, 'adminEditPOST'])->name('edit.post');
        Route::post('/delete/{admin}', [AdminController::class, 'adminDeletePOST'])->name('delete');
        Route::get('/view', [AdminController::class, 'view_admin'])->name('view');
        Route::post('/update-status-surat/{id}/{status}', [AdminController::class, 'update_status_surat'])->name('update-status');
        Route::get('/surat-masuk', [AdminController::class, 'surat_masuk'])->name('surat-masuk');
        Route::get('/surat-keluar', [AdminController::class, 'surat_keluar'])->name('surat-keluar');
        Route::get('/surat-ditolak', [AdminController::class, 'surat_ditolak'])->name('surat-ditolak');

        // Generate File
        Route::get('/generate-surat-aktivasi/{id}/{user}/{action?}', [PdfController::class, 'generateSuratAktivasi'])->name('generate-surat-aktivasi');
        Route::get('/generate-surat-izin-penelitian/{id}/{user}/{action?}', [PdfController::class, 'generateSuratIzinPenelitian'])->name('generate-surat-izin-penelitian');
        Route::get('/generate-surat-magang/{id}/{user}/{action?}', [PdfController::class, 'generateSuratMagang'])->name('generate-surat-magang');
        Route::get('/generate-surat-rekomendasi-beasiswa/{id}/{user}/{action?}', [PdfController::class, 'generateSuratRekomendasiBeasiswa'])->name('generate-surat-rekomendasi-beasiswa');
        Route::get('/generate-surat-lain/{id}/{user}/{action?}', [PdfController::class, 'generateSuratLain'])->name('generate-surat-lain');
    });
});

// Group Route Mahasiswa name route prefix mahasiswa
Route::group(['prefix' => 'mahasiswa', 'as' => 'mahasiswa.'], function () {
    Route::post('/logout', [MahasiswaController::class, 'logout'])->name('logout');
    Route::get('/', [MahasiswaController::class, 'index'])->name('index');
    Route::middleware(['guest:web'])->group(function () {
        Route::get('/login', [MahasiswaController::class, 'login'])->name('login');
        Route::post('/login', [MahasiswaController::class, 'loginPOST'])->name('login.post');
        Route::get('/register', [MahasiswaController::class, 'register'])->name('register');
        Route::post('/register', [MahasiswaController::class, 'registerPOST'])->name('register.post');
    });

    Route::middleware(['user'])->group(function () {
        Route::get('/pengajuan-surat/aktivasi', [MahasiswaController::class, 'pengajuanSurat_aktivasi'])->name('pengajuan-surat.aktivasi');
        Route::get('/pengajuan-surat/magang', [MahasiswaController::class, 'pengajuanSurat_magang'])->name('pengajuan-surat.magang');
        Route::get('/pengajuan-surat/izin-penelitian', [MahasiswaController::class, 'pengajuanSurat_izin_penelitian'])->name('pengajuan-surat.izin-penelitian');
        Route::get('/pengajuan-surat/rekomendasi-beasiswa', [MahasiswaController::class, 'pengajuanSurat_rekomendasi_beasiswa'])->name('pengajuan-surat.rekomendasi-beasiswa');
        Route::get('/pengajuan-surat/surat-lain', [MahasiswaController::class, 'pengajuanSurat_surat_lain'])->name('pengajuan-surat.surat-lain');
        Route::post('/pengajuan-surat', [MahasiswaController::class, 'pengajuanSuratPOST'])->name('pengajuan-surat.post');
    });
});
