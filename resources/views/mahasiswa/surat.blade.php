<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Form Surat Aktivasi</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <body>
        <div class="container mt-5">
            <!-- Header -->
            <div class="text-center py-4 bg-primary text-white rounded shadow-sm">
                <h1 class="fw-bold">FAKULTAS ILMU KOMPUTER</h1>
            </div>

            <!-- Form Card -->
            <div class="card mt-4 shadow-sm">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Form Surat {{ $jenis_surat }}</h2>
                    <p class="text-center mb-4">Isi form di bawah ini untuk mengajukan surat {{ $jenis_surat }}. Pastikan semua informasi yang diberikan adalah akurat dan lengkap.</p>
                    <form method="POST" action="{{ route('mahasiswa.pengajuan-surat.post') }}">
                        @csrf

                        <input type="text" name="jenis_surat" value="{{ $jenis_surat }}" class="form-control d-none" id="jenis_surat" placeholder="Masukkan Jenis Surat Kamu" required readonly>

                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" name="nim" value="{{ $user->nim }}" class="form-control" id="nim" placeholder="Masukkan NIM Kamu" required readonly>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" value="{{ $user->nama }}" class="form-control" id="nama" placeholder="Masukkan Nama Kamu" required readonly>
                        </div>
                        <div class="mb-3">
                            <label for="fakultas" class="form-label">Fakultas</label>
                            <input type="text" name="fakultas" value="Fakultas Ilmu Komputer" class="form-control" id="fakultas" placeholder="Masukkan Fakultas" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="prodi" class="form-label">Program Studi</label>
                            <select class="form-select" id="prodi" name="prodi" required>
                                <option selected disabled>Pilih Program Studi</option>
                                <option {{ old('prodi') == 'Sistem Informasi' ? 'selected' : '' }} value="Sistem Informasi">Sistem Informasi</option>
                                <option {{ old('prodi') == 'Teknik Informatika' ? 'selected' : '' }} value="Teknik Informatika">Teknik Informatika</option>
                            </select>
                        </div>
                        @if ($jenis_surat != 'Izin Penelitian')
                            <div class="mb-3">
                                <label for="semester" class="form-label">Semester</label>
                                <input type="number" name="semester" value="{{ old('semester') }}" class="form-control" id="semester" placeholder="Masukkan Semester Kamu" required>
                            </div>
                        @endif

                        @if ($jenis_surat == 'Lain')
                            <div class="mb-3">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="text" name="nik" class="form-control" id="nik" placeholder="Masukkan NIK">
                            </div>
                            <div class="mb-3">
                                <label for="ipk" class="form-label">IPK</label>
                                <input type="text" name="ipk" class="form-control" id="ipk" placeholder="Masukkan IPK">
                            </div>
                            <div class="mb-3">
                                <label for="jml_sks" class="form-label">Jumlah SKS</label>
                                <input type="number" name="jml_sks" class="form-control" id="jml_sks" placeholder="Masukkan Jumlah SKS">
                            </div>
                            <div class="mb-3">
                                <label for="kegiatan" class="form-label">Kegiatan</label>
                                <input type="text" name="kegiatan" class="form-control" id="kegiatan" placeholder="Masukkan Kegiatan">
                            </div>
                            <div class="mb-3">
                                <label for="nama_koordinator" class="form-label">Nama Koordinator PT MSIB</label>
                                <input type="text" name="nama_koordinator" class="form-control" id="nama_koordinator" placeholder="Masukkan Nama Koordinator PT MSIB">
                            </div>
                            <div class="mb-3">
                                <label for="nomor_koordinator" class="form-label">Nomor Koordinator PT MSIB</label>
                                <input type="text" name="nomor_koordinator" class="form-control" id="nomor_koordinator" placeholder="Masukkan Nomor Koordinator PT MSIB">
                            </div>
                            <div class="mb-3">
                                <label for="email_koordinator" class="form-label">Email Koordinator PT MSIB</label>
                                <input type="text" name="email_koordinator" class="form-control" id="email_koordinator" placeholder="Masukkan Email Koordinator PT MSIB">
                            </div>
                        @endif

                        @if ($jenis_surat != 'Aktivasi' && $jenis_surat != 'Izin Penelitian' && $jenis_surat != 'Rekomendasi Beasiswa' && $jenis_surat != 'Lain')
                            <div class="mb-3">
                                <label for="kepada" class="form-label">Kepada</label>
                                <input type="text" name="kepada" class="form-control" id="kepada" placeholder="Masukkan Nama Penerima">
                            </div>
                            @if ($jenis_surat != 'Izin Penelitian')
                                <div class="mb-3">
                                    <label for="jabatan" class="form-label">Jabatan</label>
                                    <input type="text" name="jabatan" class="form-control" id="jabatan" placeholder="Masukkan Jabatan">
                                </div>
                            @endif
                            <div class="mb-3">
                                <label for="alamat_surat" class="form-label">Alamat Surat</label>
                                <input type="text" name="alamat_surat" class="form-control" id="alamat_surat" placeholder="Masukkan Alamat Surat">
                            </div>
                        @endif

                        @if ($jenis_surat == 'Izin Penelitian')
                            <div class="mb-3">
                                <label for="judul_penelitian" class="form-label">Judul Penelitian</label>
                                <input type="text" name="judul_penelitian" class="form-control" id="judul_penelitian" placeholder="Masukkan Judul Penelitian">
                            </div>
                        @endif
                        @if ($jenis_surat == 'Magang')
                            <div class="mb-3">
                                <label for="perusahaan_magang" class="form-label">Perusahaan Magang</label>
                                <input type="text" name="perusahaan_magang" class="form-control" id="perusahaan_magang" placeholder="Masukkan Nama Perusahaan Magang">
                            </div>
                            <div class="mb-3">
                                <label for="waktu_magang" class="form-label">Waktu Magang (bulan)</label>
                                <input type="number" name="waktu_magang" class="form-control" id="waktu_magang" placeholder="Masukkan Waktu Magang">
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi_magang" class="form-label">Deskripsi Magang</label>
                                <textarea name="deskripsi_magang" class="form-control" id="deskripsi_magang" placeholder="Masukkan Deskripsi Magang"></textarea>
                            </div>
                        @endif
                        @if ($jenis_surat == 'Aktivasi' || ($jenis_surat == 'Izin Penelitian' && $jenis_surat != 'Magang'))
                            <div class="mb-3">
                                <label for="tembusan" class="form-label">Tembusan</label>
                                <input type="text" name="tembusan" value="{{ old('tembusan') }}" class="form-control" id="tembusan" placeholder="Masukkan Tembusan Kamu" required>
                            </div>
                        @endif

                        <div class="d-flex gap-2">
                            <a type="button" href="{{ route('mahasiswa.index') }}" class="btn btn-outline-primary btn-lg mt-3">Back</a>
                            <button type="submit" class="w-100 btn btn-primary btn-lg mt-3">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Footer -->
            <div class="footer bg-light mt-5 p-4 rounded shadow-sm">
                <h5 class="fw-bold text-primary">Esa Unggul</h5>
                <p class="mb-0">Sistem Informasi Pengajuan Surat Akademik. Untuk informasi lebih lanjut, hubungi admin fakultas melalui WhatsApp: <a href="https://wa.me/6285715593359" class="text-primary text-decoration-none fw-bold">Hubungi Admin</a>.</p>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            ClassicEditor
                .create(document.querySelector('#deskripsi_magang'), {
                    toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote'],
                    language: 'id'
                })
                .catch(error => {
                    console.error(error);
                });
        </script>

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
