<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('admin.Index');
});

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

Route::get('/ajuansurat', function () {
    return view('mahasiswa.ajuansurat');
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa.mahasiswa');
});

Route::get('/loginmahasiswa', function () {
    return view('mahasiswa.loginmahasiswa');
});

Route::get('/registermahasiswa', function () {
    return view('mahasiswa.registermahasiswa');
});
