<!DOCTYPE html>
<html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Surat Permohonan Izin Penelitian</title>
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

            .header_surat {
                text-align: left;
            }

            .header_surat .details {
                margin-bottom: 20px;
            }

            .header_surat .details p {
                margin: 0;
                line-height: 1.5;
            }

            .title {
                text-align: center;
                font-weight: bold;
                font-size: 16px;
                text-decoration: underline;
                margin-bottom: 20px;
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
                margin-top: 30px;
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

        <div class="header_surat">
            <p>Jakarta, {{ Carbon\Carbon::now()->translatedFormat('d F Y') }}</p>
            <div class="details">
                <table>
                    <tr>
                        <td>Nomor</td>
                        <td>: {{ $data->id }}-031/SP/KAPRODI-{{ $data->prodi == 'Sistem Informasi' ? 'SI' : 'IF' }}/FASILKOM/UEU/EXT/VII/{{ date('Y') }}</td>
                    </tr>
                    <tr>
                        <td>Lampiran</td>
                        <td>: -</td>
                    </tr>
                    <tr>
                        <td>Perihal</td>
                        <td>: <strong>Surat Permohonan Izin Untuk Penelitian</strong></td>
                    </tr>
                </table>
            </div>
            <p>Kepada Yth Dekan Fakultas Ilmu Komputer<br>
                Jl. Arjuna Utara No.9, Duri Kepa, Kec. Kb. Jeruk,<br>
                Kota Jakarta Barat, 11510</p>
        </div>

        <div class="content">
            <p>Dengan hormat,</p>
            <p>Sehubungan dengan mata kuliah Tugas Akhir (Skripsi) yang memerlukan data dan informasi bagi mahasiswa Fakultas Ilmu Komputer Program Studi {{ $data->prodi }}, bersama ini kami sampaikan bahwa mahasiswa kami bermaksud untuk mencari beberapa data / informasi. Adapun nama mahasiswa tersebut adalah :</p>

            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>No HP</th>
                        <th>Judul Skripsi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>{{ $data->user->nim }}</td>
                        <td>{{ $data->user->nama }}</td>
                        <td>{{ $data->user->no_hp }}</td>
                        <td>{{ $data->judul_penelitian }}</td>
                    </tr>
                </tbody>
            </table>

            <p>Kami berharap Bapak/Ibu memberikan izin penelitian untuk Mahasiswa tersebut.</p>
            <p>Demikianlah atas perhatian dan kerjasamanya, kami ucapkan terima kasih.</p>
        </div>

        <div class="signature">
            <p>Hormat kami,<br>
                Ketua Program Studi {{ $data->prodi }}</p>
            <img width="1000" src="{{ public_path('image/ttd_ka_' . $data->prodi . '.png') }}" alt="Signature {{ $data->prodi }}"><br>
            <strong>{{ $data->prodi == 'Sistem Informasi' ? 'Anik Hanifatul Azizah, S.Kom, M.IM' : 'M.Bahrul Ulum, S.Kom, M.Kom' }}</strong>
        </div>

        <p>C.c:
            @foreach (explode(';', $data->tembusan) as $key => $tembusan)
                {{ $key + 1 . '.' . $tembusan }}
                @if ($key != count(explode(';', $data->tembusan)) - 1)
                    ;&nbsp;&nbsp;
                @endif
            @endforeach
        </p>
        {{-- <ol type="1">
            @foreach (explode(';', $data->tembusan) as $tembusan)
                <li>{{ $tembusan }}</li>
            @endforeach
        </ol> --}}
        <div class="footer">
            <p>
                {{ $data->fakultas }}<br>
                Gedung C, Lantai 5<br>
                Universitas Esa Unggul Jakarta
            </p>
        </div>
    </body>

</html>
