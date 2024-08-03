<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register Mahasiswa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <body class="bg-light">
        <div class="container d-flex justify-content-center align-items-center vh-100">
            <div class="card shadow-sm border-0" style="max-width: 400px;">
                <div class="card-body">
                    <h3 class="card-title text-center mb-4">Register Mahasiswa</h3>
                    <p class="text-center text-muted mb-4">Silakan isi form di bawah ini untuk membuat akun baru.</p>
                    <form method="POST" action="{{ route('mahasiswa.register.post') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama:</label>
                            <input type="text" name="nama" class="form-control" id="name" value="{{ old('nama') }}" placeholder="Masukkan nama kamu" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}" placeholder="Masukkan email kamu" required>
                        </div>
                        <div class="mb-3">
                            <label for="no_hp" class="form-label">No HP:</label>
                            <input type="no_hp" name="no_hp" class="form-control" id="no_hp" value="{{ old('no_hp') }}" placeholder="Masukkan no hp kamu" required>
                        </div>
                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM:</label>
                            <input type="text" name="nim" class="form-control" id="nim" value="{{ old('nim') }}" placeholder="Masukkan NIM kamu" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" name="password" class="form-control" id="password" value="{{ old('password') }}" placeholder="Masukkan password kamu" required>
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Konfirmasi Password:</label>
                            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Konfirmasi password kamu" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success btn-lg mt-3">Register</button>
                        </div>
                    </form>
                    <div class="text-center mt-4">
                        <p class="text-muted">Sudah punya akun? <a href="{{ route('mahasiswa.login') }}" class="text-decoration-none">Login di sini</a></p>
                    </div>
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
