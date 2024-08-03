<!DOCTYPE html>
<html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Surat Rekomendasi</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 40px;
            }

            .header {
                text-align: left;
                margin-top: -60px;
            }

            .header img {
                width: 200px;
            }

            .title {
                text-align: center;
                font-weight: bold;
                font-size: 16px;
                margin-bottom: 20px;
            }

            .content {
                line-height: 1.6;
                margin-bottom: 20px;
            }

            .content p {
                margin: 0;
            }

            .info-table {
                margin-left: 20px;
            }

            .info-table td {
                line-height: 1 !important;
            }

            .signature {
                text-align: right;
            }

            .signature img {
                width: 250px;
            }

            .footer {
                border-top: 2px solid #005a9e;
                color: #005a9e;
                font-size: 12px;
                position: fixed;
                bottom: 0;
                left: 0;
                text-align: center;
                width: 100%;
            }

            .footer div {
                display: inline-block;
                vertical-align: middle;
            }

            .footer span {
                font-weight: bold;
                margin: 0 5px;
            }

            .footer a {
                color: #005a9e;
                text-decoration: none;
            }

            .watermark {
                position: absolute;
                top: 0;
                left: 0;
                opacity: 0.2;
                width: 100%;
                height: 100%;
                z-index: -1;
                background-image: url('{{ asset('image/logo.png') }}');
                background-size: contain;
                background-repeat: no-repeat;
                background-position: center;
            }
        </style>
    </head>

    <body>
        <div class="watermark"></div>

        <div class="header">
            <img src="{{ public_path('image/logo_ueu.png') }}" alt="Universitas Esa Unggul">
        </div>

        <div class="title">
            SURAT REKOMENDASI MAHASISWA PROGRAM MAGANG DAN STUDI<br>
            INDEPENDEN BERSERTIFIKAT KAMPUS MERDEKA<br>
            No: {{ $data->id }}/SR-Bangkid/Dekan/Fasilkom/UEU/VII/{{ date('Y') }}
        </div>

        <div class="content">
            <p>Yang bertanda tangan di bawah ini:</p>

            <table class="info-table">
                <tr>
                    <td>Nama</td>
                    <td>: Dr. Vivit Tundjungsari, ST., M.Sc, MM</td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>: Dekan Fakultas Ilmu Komputer</td>
                </tr>
                <tr>
                    <td>NIP/NIDN</td>
                    <td>: 222010872 / 301057601</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>: vitri.tundjungsari@esaunggul.ac.id</td>
                </tr>
                <tr>
                    <td>Telepon/HP</td>
                    <td>: 087775563300</td>
                </tr>
            </table>

            <p>Memberikan rekomendasi kepada mahasiswa berikut:</p>

            <table class="info-table">
                <tr>
                    <td>Nama Lengkap</td>
                    <td>: {{ $data->user->nama }}</td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>: {{ $data->nik }}</td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>: {{ $data->user->nim }}</td>
                </tr>
                <tr>
                    <td>Program Studi</td>
                    <td>: {{ $data->prodi }}</td>
                </tr>
                <tr>
                    <td>Semester Saat Ini</td>
                    <td>: {{ $data->semester }}</td>
                </tr>
                <tr>
                    <td>IPK</td>
                    <td>: {{ $data->ipk }}</td>
                </tr>
                <tr>
                    <td>Jumlah SKS yang sudah ditempuh dan lulus</td>
                    <td>: {{ $data->jml_sks }}</td>
                </tr>
                <tr>
                    <td>Nama Koordinator PT MSIB</td>
                    <td>: {{ $data->nama_koordinator }}</td>
                </tr>
                <tr>
                    <td>Nomor HP Koordinator</td>
                    <td>: {{ $data->nomor_koordinator }}</td>
                </tr>
                <tr>
                    <td>Email Koordinator</td>
                    <td>: {{ $data->email_koordinator }}</td>
                </tr>
            </table>

            <p>Untuk menjadi peserta {{ $data->kegiatan }} dan mendapatkan sertifikat sebagai akreditasi studi pada program yang diikuti.</p>

            <p>Demikian surat rekomendasi ini kami sampaikan untuk digunakan sebagaimana mestinya.</p>

            <p>Terima kasih atas perhatian dan kerja samanya.</p>

            <p style="text-align: end">Jakarta, {{ Carbon\Carbon::now()->translatedFormat('d F Y') }}</p>

            <div class="signature">
                <p>Dekan Fakultas Ilmu Komputer</p>
                <img src="{{ public_path('image/ttd_dekan.png') }}" alt="Signature"><br>
                <strong>Dr. Vitri Tundjungsari, ST., M.Sc, MM</strong><br>
                <span>NIP/NIDN 222010872 / 301057601</span>
            </div>

            <div class="footer">
                <table style="width: 100%">
                    <tr>
                        <td>Jl. Arjuna Utara 9, Tol Tomang, Kebon Jeruk, Jakarta 11510, Indonesia</td>
                        <td rowspan="2">
                            <a href="https://www.esaunggul.ac.id" target="_blank" style="font-size: 20px;font-weight:700;">www.esaunggul.ac.id</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="icons">
                                <span class="icon">&#9742;</span>
                                <span><span>(021)</span> 567 4223 <span>ext.</span> 206, 207</span>
                                <span class="icon">&#128222;</span>
                                <span>(021) 567 4248</span>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </body>

</html>
