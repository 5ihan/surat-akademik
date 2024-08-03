<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sistem Pengajuan Surat Akademik</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <body>
        <div class="container mt-5">
            <div class="card shadow-lg border-0">
                <div class="card-body text-center p-5">
                    <img width="300" src="{{ asset('image/logo_ueu.png') }}" alt="Universitas Esa Unggul">
                    <h1 class="display-5 fw-bold mb-3">Selamat Datang di Sistem Pengajuan Surat Akademik</h1>
                    <p class="lead mb-4">Platform ini merupakan langkah awal bagi mahasiswa untuk mengajukan berbagai surat akademik yang diperlukan. Proses pengajuan surat dibuat mudah dan efisien untuk mendukung kebutuhan akademik Kamu.</p>

                    <!-- Dropdown for Letter Selection -->
                    @if (auth()->check())
                        <div class="dropdown mb-4">
                            <button class="btn btn-lg btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Pilih Jenis Surat
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('mahasiswa.pengajuan-surat.aktivasi') }}">Surat Aktivasi</a></li>
                                <li><a class="dropdown-item" href="{{ route('mahasiswa.pengajuan-surat.magang') }}">Surat Magang/KP</a></li>
                                <li><a class="dropdown-item" href="{{ route('mahasiswa.pengajuan-surat.izin-penelitian') }}">Surat Izin Penelitian</a></li>
                                <li><a class="dropdown-item" href="{{ route('mahasiswa.pengajuan-surat.rekomendasi-beasiswa') }}">Surat Rekomendasi Beasiswa</a></li>
                                <li><a class="dropdown-item" href="{{ route('mahasiswa.pengajuan-surat.surat-lain') }}">Surat Lain</a></li>
                            </ul>
                        </div>
                    @endif

                    <!-- Buttons for Other Actions -->
                    @if (!auth()->check())
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('mahasiswa.login') }}" class="btn btn-outline-secondary btn-lg me-3">Login</a>
                            <a href="{{ route('mahasiswa.register') }}" class="btn btn-outline-secondary btn-lg">Register</a>
                        </div>
                    @else
                        <form method="POST" action="{{ route('mahasiswa.logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-outline-secondary btn-lg">Logout</button>
                        </form>
                    @endif
                    <p class="mt-4 text-muted">Untuk informasi lebih lanjut, hubungi admin fakultas melalui <a href="https://wa.me/1234567890" class="text-decoration-none">WhatsApp</a>.</p>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            // Implement Sweetalert ketika ada session error dan success dari PHP
            @if (session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: '{{ session('error') }}'
                })
            @endif
            @if (session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: '{{ session('success') }}'
                })
            @endif
        </script>
    </body>

</html>
