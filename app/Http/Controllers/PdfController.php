<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function generateSuratAktifasi()
    {
        $data = Surat::with('user')->where('jenis_surat', 'Aktivasi')->first();

        $jenis_semester = null;
        // Mengidentifikasi angka Ganjil/Genap dari nilai $request->semester
        if ($data->semester % 2 == 0) {
            $jenis_semester = 'Genap';
        } else {
            $jenis_semester = 'Ganjil';
        }

        return view('mahasiswa.surat.aktifasi', [
            'data' => $data,
            'jenis_semester' => $jenis_semester,
        ]);
    }

    public function generateSuratIzinPenelitian()
    {
        $data = Surat::with('user')->where('jenis_surat', 'Izin Penelitian')->first();

        $jenis_semester = null;
        // Mengidentifikasi angka Ganjil/Genap dari nilai $request->semester
        if ($data->semester % 2 == 0) {
            $jenis_semester = 'Genap';
        } else {
            $jenis_semester = 'Ganjil';
        }

        return view('mahasiswa.surat.izin-penelitian', [
            'data' => $data,
            'jenis_semester' => $jenis_semester,
        ]);
    }

    public function generateSuratMagang()
    {
        $data = Surat::with('user')->where('jenis_surat', 'Magang')->first();

        $jenis_semester = null;
        // Mengidentifikasi angka Ganjil/Genap dari nilai $request->semester
        if ($data->semester % 2 == 0) {
            $jenis_semester = 'Genap';
        } else {
            $jenis_semester = 'Ganjil';
        }

        return view('mahasiswa.surat.magang', [
            'data' => $data,
            'jenis_semester' => $jenis_semester,
        ]);
    }
    public function generateSuratRekomendasiBeasiswa()
    {
        $data = Surat::with('user')->where('jenis_surat', 'Rekomendasi Beasiswa')->first();

        $jenis_semester = null;
        // Mengidentifikasi angka Ganjil/Genap dari nilai $request->semester
        if ($data->semester % 2 == 0) {
            $jenis_semester = 'Genap';
        } else {
            $jenis_semester = 'Ganjil';
        }

        return view('mahasiswa.surat.rekomendasi-beasiswa', [
            'data' => $data,
            'jenis_semester' => $jenis_semester,
        ]);
    }
    public function generateSuratLain()
    {
        $data = Surat::with('user')->where('jenis_surat', 'Lain')->first();

        $jenis_semester = null;
        // Mengidentifikasi angka Ganjil/Genap dari nilai $request->semester
        if ($data->semester % 2 == 0) {
            $jenis_semester = 'Genap';
        } else {
            $jenis_semester = 'Ganjil';
        }

        return view('mahasiswa.surat.lain', [
            'data' => $data,
            'jenis_semester' => $jenis_semester,
        ]);
    }
}
