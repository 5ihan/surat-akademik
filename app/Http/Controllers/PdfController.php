<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function generateSuratAktivasi($id, $user, $action = 'see')
    {
        // Cek mahasiswa berdasarkan nim yang dicocokan dengan $user, jika tidak ditemukan redirect ke route('admin.index')
        $mahasiswa = User::where('nim', $user)->first();
        if (!$mahasiswa) {
            return redirect()->route('admin.dashboard');
        }

        $data = Surat::with('user')->where([
            'jenis_surat' => 'Aktivasi',
            'id' => $id
        ])->first();

        $jenis_semester = null;
        // Mengidentifikasi angka Ganjil/Genap dari nilai $request->semester
        if ($data->semester % 2 == 0) {
            $jenis_semester = 'Genap';
        } else {
            $jenis_semester = 'Ganjil';
        }

        $nameFile = $data->user->nim . '-' . $data->jenis_surat;

        $pdf = Pdf::loadView('mahasiswa.surat.aktivasi', [
            'data' => $data,
            'jenis_semester' => $jenis_semester,
        ]);

        if ($action == 'see') {
            // Stream the PDF to the browser without downloading
            return $pdf->stream($nameFile . '.pdf');
        } else {
            return $pdf->download($nameFile . '.pdf');
        }
    }

    public function generateSuratIzinPenelitian($id, $user, $action = 'see')
    {
        // Cek mahasiswa berdasarkan nim yang dicocokan dengan $user, jika tidak ditemukan redirect ke route('admin.index')
        $mahasiswa = User::where('nim', $user)->first();
        if (!$mahasiswa) {
            return redirect()->route('admin.dashboard');
        }

        $data = Surat::with('user')->where([
            'jenis_surat' => 'Izin Penelitian',
            'id' => $id
        ])->first();

        $jenis_semester = null;
        // Mengidentifikasi angka Ganjil/Genap dari nilai $request->semester
        if ($data->semester % 2 == 0) {
            $jenis_semester = 'Genap';
        } else {
            $jenis_semester = 'Ganjil';
        }

        $nameFile = $data->user->nim . '-' . $data->jenis_surat;

        $pdf = Pdf::loadView('mahasiswa.surat.izin-penelitian', [
            'data' => $data,
            'jenis_semester' => $jenis_semester,
        ]);

        if ($action == 'see') {
            // Stream the PDF to the browser without downloading
            return $pdf->stream($nameFile . '.pdf');
        } else {
            return $pdf->download($nameFile . '.pdf');
        }
    }

    public function generateSuratMagang($id, $user, $action = 'see')
    {
        // Cek mahasiswa berdasarkan nim yang dicocokan dengan $user, jika tidak ditemukan redirect ke route('admin.index')
        $mahasiswa = User::where('nim', $user)->first();
        if (!$mahasiswa) {
            return redirect()->route('admin.dashboard');
        }
        $data = Surat::with('user')->where([
            'jenis_surat' => 'Magang',
            'id' => $id
        ])->first();

        $jenis_semester = null;
        // Mengidentifikasi angka Ganjil/Genap dari nilai $request->semester
        if ($data->semester % 2 == 0) {
            $jenis_semester = 'Genap';
        } else {
            $jenis_semester = 'Ganjil';
        }

        $nameFile = $data->user->nim . '-' . $data->jenis_surat;

        $pdf = Pdf::loadView('mahasiswa.surat.magang', [
            'data' => $data,
            'jenis_semester' => $jenis_semester,
        ]);

        if ($action == 'see') {
            // Stream the PDF to the browser without downloading
            return $pdf->stream($nameFile . '.pdf');
        } else {
            return $pdf->download($nameFile . '.pdf');
        }
    }
    public function generateSuratRekomendasiBeasiswa($id, $user, $action = 'see')
    {
        // Cek mahasiswa berdasarkan nim yang dicocokan dengan $user, jika tidak ditemukan redirect ke route('admin.index')
        $mahasiswa = User::where('nim', $user)->first();
        if (!$mahasiswa) {
            return redirect()->route('admin.dashboard');
        }

        $data = Surat::with('user')->where([
            'jenis_surat' => 'Rekomendasi Beasiswa',
            'id' => $id
        ])->first();

        $jenis_semester = null;
        // Mengidentifikasi angka Ganjil/Genap dari nilai $request->semester
        if ($data->semester % 2 == 0) {
            $jenis_semester = 'Genap';
        } else {
            $jenis_semester = 'Ganjil';
        }

        $nameFile = $data->user->nim . '-' . $data->jenis_surat;

        $pdf = Pdf::loadView('mahasiswa.surat.rekomendasi-beasiswa', [
            'data' => $data,
            'jenis_semester' => $jenis_semester,
        ]);

        if ($action == 'see') {
            // Stream the PDF to the browser without downloading
            return $pdf->stream($nameFile . '.pdf');
        } else {
            return $pdf->download($nameFile . '.pdf');
        }
    }
    public function generateSuratLain($id, $user, $action = 'see')
    {
        // Cek mahasiswa berdasarkan nim yang dicocokan dengan $user, jika tidak ditemukan redirect ke route('admin.index')
        $mahasiswa = User::where('nim', $user)->first();
        if (!$mahasiswa) {
            return redirect()->route('admin.dashboard');
        }

        $data = Surat::with('user')->where([
            'jenis_surat' => 'Lain',
            'id' => $id
        ])->first();

        $jenis_semester = null;
        // Mengidentifikasi angka Ganjil/Genap dari nilai $request->semester
        if ($data->semester % 2 == 0) {
            $jenis_semester = 'Genap';
        } else {
            $jenis_semester = 'Ganjil';
        }

        $nameFile = $data->user->nim . '-' . $data->jenis_surat;

        $pdf = Pdf::loadView('mahasiswa.surat.lain', [
            'data' => $data,
            'jenis_semester' => $jenis_semester,
        ]);

        if ($action == 'see') {
            // Stream the PDF to the browser without downloading
            return $pdf->stream($nameFile . '.pdf');
        } else {
            return $pdf->download($nameFile . '.pdf');
        }
    }
}
