<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Surat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    // Function index return view index
    public function index()
    {
        // Query to count statuses
        $statusCounts = Surat::select('status', DB::raw('count(*) as total'))
            ->groupBy('status')
            ->get();

        // Initialize an array to store counts for each status
        $statusSummary = [
            'Approve' => 0,
            'Pending' => 0,
            'Reject' => 0,
        ];

        // Populate the statusSummary array with actual counts
        foreach ($statusCounts as $statusCount) {
            $statusSummary[$statusCount->status] = $statusCount->total;
        }

        $data_surat = Surat::with('user')->orderBy('updated_at', 'DESC')->get();

        return view('admin.index', [
            'data_surat' => $data_surat,
            'statusSummary' => $statusSummary,
        ]);
    }
    public function add_admin()
    {
        return view('admin.addadmin');
    }
    public function adminPOST(Request $request)
    {
        // Validate the request data
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Create a new admin
        $admin = new Admin;
        $admin->username = $request->username;
        $admin->password = bcrypt($request->password);
        $admin->save();

        // Redirect back with a success message
        return redirect()->route('admin.view')->with('success', 'Berhasil Menambahkan Data Admin!');
    }
    public function edit_admin(Request $request, $id)
    {
        $admin = Admin::find($id);

        return view('admin.editadmin', [
            'admin' => $admin,
        ]);
    }
    public function adminEditPOST(Request $request)
    {
        // Validate the request data
        $request->validate([
            'username' => 'required',
        ]);

        // Create a new admin
        $admin = Admin::find($request->id);
        if ($admin) {
            $admin->username = $request->username;
            $admin->password = $request->password ? bcrypt($request->password) : $admin->password;
            $admin->save();

            return redirect()->route('admin.view')->with('success', 'Berhasil Mengubah Data Admin');
        }
        return redirect()->route('admin.view')->with('error', 'Data Admin tidak ditemukan');
    }
    public function adminDeletePOST(Request $request, $id)
    {
        $admin = Admin::find($id);
        if ($admin) {
            $admin->delete();
            return redirect()->route('admin.view')->with('success', 'Berhasil Menghapus Data Admin');
        }
        return redirect()->route('admin.view')->with('error', 'Data Admin tidak ditemukan');
    }
    public function view_admin()
    {
        $data_admin = Admin::get();
        return view('admin.viewadmin', [
            'data_admin' => $data_admin,
        ]);
    }
    public function update_status_surat($id, $status)
    {
        $surat = Surat::with('user')->where('id', $id)->first();
        if ($surat) {
            $surat->status = $status;
            $surat->save();
            return redirect()->route('admin.surat-masuk')->with('success', 'Berhasil Mengubah Status Surat ' . $surat->jenis_surat . ' menjadi ' . $status . ' yang diajukan oleh ' . $surat->nim . ' - ' . $surat->user->nama);
        }
        return redirect()->route('admin.surat-masuk')->with('error', 'Data Surat tidak di temukan');
    }
    public function surat_masuk()
    {
        $data_surat = Surat::where('status', 'Pending')->get();
        return view('admin.suratmasuk', [
            'data_surat' => $data_surat,
        ]);
    }
    public function surat_keluar()
    {
        $data_surat = Surat::where('status', 'Approve')->get();
        return view('admin.suratkeluar', [
            'data_surat' => $data_surat,
        ]);
    }
    public function surat_ditolak()
    {
        $data_surat = Surat::where('status', 'Reject')->get();
        return view('admin.suratditolak', [
            'data_surat' => $data_surat,
        ]);
    }

    // Auth Proses
    public function login()
    {
        return view('admin.login');
    }
    public function loginPOST(Request $request)
    {
        // Attempt to log the user in
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::guard('admin')->attempt($request->only('username', 'password'))) {
            return redirect()->route('admin.dashboard');
        }

        // Return back with error if login fails
        return back()->with('error', 'Username atau Password kamu salah');
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login')->with('success', 'Berhasil Logout');
    }
}
