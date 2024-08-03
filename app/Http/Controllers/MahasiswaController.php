<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('mahasiswa.index');
    }
    public function pengajuanSurat_aktivasi()
    {
        $user = auth()->user();

        return view('mahasiswa.surat', [
            'user' => $user,
            'jenis_surat' => 'Aktivasi',
        ]);
    }
    public function pengajuanSurat_magang()
    {
        $user = auth()->user();

        return view('mahasiswa.surat', [
            'user' => $user,
            'jenis_surat' => 'Magang',
        ]);
    }
    public function pengajuanSurat_izin_penelitian()
    {
        $user = auth()->user();

        return view('mahasiswa.surat', [
            'user' => $user,
            'jenis_surat' => 'Izin Penelitian',
        ]);
    }
    public function pengajuanSurat_rekomendasi_beasiswa()
    {
        $user = auth()->user();

        return view('mahasiswa.surat', [
            'user' => $user,
            'jenis_surat' => 'Rekomendasi Beasiswa',
        ]);
    }
    public function pengajuanSurat_surat_lain()
    {
        $user = auth()->user();

        return view('mahasiswa.surat', [
            'user' => $user,
            'jenis_surat' => 'Lain',
        ]);
    }
    public function pengajuanSuratPOST(Request $request)
    {
        // Membuat surat baru
        $surat = new Surat();
        $surat->nim = $request->nim ?? null;
        $surat->kepada = $request->kepada ?? null;
        $surat->jabatan = $request->jabatan ?? null;
        $surat->alamat_surat = $request->alamat_surat ?? null;
        $surat->judul_penelitian = $request->judul_penelitian ?? null;
        $surat->perusahaan_magang = $request->perusahaan_magang ?? null;
        $surat->waktu_magang = $request->waktu_magang ?? null;
        $surat->deskripsi_magang = $request->deskripsi_magang ?? null;
        $surat->nik = $request->nik ?? null;
        $surat->semester = $request->semester ?? null;
        $surat->ipk = $request->ipk ?? null;
        $surat->jml_sks = $request->jml_sks ?? null;
        $surat->kegiatan = $request->kegiatan ?? null;
        $surat->nama_koordinator = $request->nama_koordinator ?? null;
        $surat->nomor_koordinator = $request->nomor_koordinator ?? null;
        $surat->email_koordinator = $request->email_koordinator ?? null;
        $surat->tembusan = $request->tembusan ?? null;
        $surat->prodi = $request->prodi ?? null;
        $surat->fakultas = $request->fakultas ?? null;
        $surat->jenis_surat = $request->jenis_surat ?? null;
        $surat->status = 'pending';
        $surat->save();

        return redirect()->route('mahasiswa.index')->with('success', 'Berhasil mengajukan Surat ' . $request->jenis_surat);
    }

    // Auth Proses
    public function login()
    {
        return view('mahasiswa.login');
    }
    public function loginPOST(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'nim' => 'required',
            'password' => 'required',
        ]);

        // Attempt to log the user in
        if (Auth::guard('web')->attempt($credentials)) {
            $request->session()->regenerate();

            // Redirect to route page or default to home
            return redirect()->route('mahasiswa.index')->with('success', 'Login Berhasil!');
        }

        // Return back with error if login fails
        return back()->with('error', 'NIM atau Password kamu salah');
    }

    // Register
    public function register()
    {
        return view('mahasiswa.register');
    }
    public function registerPOST(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'email' => 'required',
            'nim' => 'required|unique:users',
            'no_hp' => 'required',
            'password' => 'required|min:5|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Buat user baru ke table users pada database
        $user = new User();
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->nim = $request->nim;
        $user->no_hp = $request->no_hp;
        $user->password = bcrypt($request->password);
        $user->level = 'mahasiswa';
        $user->save();

        // Redirect atau aksi lainnya setelah registrasi
        return redirect()->route('mahasiswa.login')->with('success', 'Registrasi berhasil. Silakan login.');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('mahasiswa.login')->with('success', 'Berhasil Logout');
    }
}
