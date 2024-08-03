<!DOCTYPE html>
<html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Permohonan Magang</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 40px;
            }

            .header {
                text-align: right;
                margin-top: -60px;
            }

            .header img {
                width: 200px;
            }

            .content {
                line-height: 1.6;
                margin-bottom: 20px;
            }

            .content .table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 10px;
            }

            .content .table th,
            .content .table td {
                border: 1px solid black;
                padding: 5px;
                text-align: left;
            }

            .signature {
                margin-top: 50px;
                text-align: right;
            }

            .signature img {
                width: 250px;
            }

            .footer {
                position: fixed;
                bottom: 0;
                left: 50%;
                transform: translateX(-50%);
                text-align: center;
                font-size: 12px;
                margin-top: 40px;
            }
        </style>
    </head>

    <body>
        <div class="header">
            <img src="{{ public_path('image/logo_ueu.png') }}" alt="Universitas Esa Unggul">
        </div>

        <div class="content">
            <table style="width: 100%;">
                <tr>
                    <td>Nomor</td>
                    <td>: 021/EXT/KP-{{ $data->prodi == 'Sistem Informasi' ? 'SI' : 'IF' }}/FASILKOM/UEU/VII/2024</td>
                    <td style="text-align: end">Jakarta, {{ Carbon\Carbon::now()->translatedFormat('d F Y') }}</td>
                </tr>
                <tr>
                    <td>Perihal</td>
                    <td colspan="2">: <strong>Permohonan Magang</strong></td>
                </tr>
            </table>
            <p>Kepada Yth. {{ $data->kepada }}<br>
                {{ $data->jabatan . ' ' . $data->perusahaan_magang }}<br>
                {{ $data->alamat_surat }}

            <p>Pertama kali terimalah salam dan do'a kami semoga Bapak / Ibu selalu dalam keadaan sehat dan sukses dalam menjalankan tugas.</p>

            <p>Dalam upaya kita bersama membangun sumber daya manusia Indonesia yang berkualitas. Dan penerapan kurikulum Program Studi {{ $data->prodi . ' ' . $data->fakultas }} Universitas Esa Unggul, Maka setiap mahasiswa diwajibkan melaksanakan kerja praktek/Magang untuk memberikan gambaran kerja nyata kepada mahasiswa dan menerapkan ilmu-ilmu yang telah diperoleh di Perguruan Tinggi sekaligus memperoleh pengalaman kerja.</p>

            <p>Sehubungan dengan hal itu, kami mengharapkan kesediaan Bapak/Ibu untuk dapat menerima mahasiswa berikut :</p>

            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>No HP</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>{{ $data->user->nim }}</td>
                        <td>{{ $data->user->nama }}</td>
                        <td>{{ $data->user->no_hp }}</td>
                    </tr>
                </tbody>
            </table>

            <p>Untuk melaksanakan Kerja Praktek/Magang di Perusahaan yang Bapak/Ibu pimpin</p>
            <p style="margin: 0;padding:0;">Waktu : {{ $data->waktu_magang }} Bulan<br>
                Tugas :
                {!! $data->deskripsi_magang !!}
            </p>

            <p>Besar harapan kami Bapak/Ibu dapat memberikan kesempatan Magang kepada mahasiswa kami,</p>
            <p>Atas perhatian dan kerjasamanya kami ucapkan terima kasih.</p>
        </div>

        <div class="signature">
            <p>Program Studi {{ $data->prodi }}<br>Ketua</p>
            <img width="1000" src="{{ public_path('image/ttd_ka_' . $data->prodi . '.png') }}" alt="Signature {{ $data->prodi }}"><br>
            <strong>{{ $data->prodi == 'Sistem Informasi' ? 'Anik Hanifatul Azizah, S.Kom, M.IM' : 'M.Bahrul Ulum, S.Kom, M.Kom' }}</strong>
        </div>

        <div class="footer">
            <p>Fakultas Ilmu Komputer<br>
                Gedung C, Lantai 5<br>
                Universitas Esa Unggul Jakarta
            </p>
        </div>
    </body>

</html>
