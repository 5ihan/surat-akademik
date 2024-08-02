<!DOCTYPE html>
<html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Surat Keterangan</title>
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

            .title {
                text-align: center;
                font-weight: bold;
                margin-bottom: 30px;
            }

            .content {
                line-height: 1.6;
            }

            .signature {
                margin-top: 50px;
                text-align: right;
            }

            .signature img {
                width: 255px;
            }

            .footer {
                text-align: center;
                font-size: 12px;
                margin-top: 40px;
            }
        </style>
    </head>

    <body>
        <div class="header">
            <img src="{{ asset('image/logo_ueu.png') }}" alt="Universitas Esa Unggul">
        </div>

        <div class="title">
            <span style="text-decoration: underline;font-size:32px;">SURAT KETERANGAN</span><br>
            <span style="font-weight:400">Nomor: {{ $data->id }}-012/ SK / KAPRODI-SI / VII / {{ date('Y') }}</span>
        </div>

        <div class="content">
            <p>Ketua Program Studi {{ $data->prodi . ' ' . $data->fakultas }}, Universitas Esa Unggul menerangkan bahwa:</p>
            <p style="margin-left:50px">
                Nama : {{ $data->user->nama }}<br>
                NIM : {{ $data->user->nim }}
            </p>
            <p>
                Adalah benar mahasiswa {{ $data->fakultas }} Program Studi {{ $data->prodi }} dan masih terdaftar sebagai mahasiswa Aktif pada Semester {{ $jenis_semester }} {{ date('Y') - 1 . '/' . date('Y') }} di Universitas Esa Unggul.
            </p>
            <p>
                Selama Perkuliahan, mahasiswa yang bersangkutan telah menunjukkan sikap baik sebagai seorang mahasiswa, hingga surat ini dikeluarkan.
            </p>
            <p>
                Demikianlah surat keterangan ini dibuat untuk digunakan sebagaimana mestinya. Atas perhatian dan kerjasamanya kami ucapkan terima kasih.
            </p>
        </div>

        <div class="signature">
            Jakarta, {{ Carbon\Carbon::now()->translatedFormat('d F Y') }}<br><br>
            <img width="1000" src="{{ asset('image/ttd_ka_' . $data->prodi . '.png') }}" alt="Signature {{ $data->prodi }}"><br>
            <strong>Aniq Hanifatul Azizah, S.Kom, M.MSI</strong><br>
            Ketua Program Studi {{ $data->prodi }}.
        </div>

        <p>C.c:
            @foreach (explode(';', $data->tembusan) as $key => $tembusan)
                {{ $key + 1 . '.' . $tembusan }}
                @if ($key != count(explode(';', $data->tembusan)) - 1)
                    ;&nbsp;&nbsp;
                @endif
            @endforeach
        </p>
        <div class="footer">
            <p>
                {{ $data->fakultas }}<br>
                Gedung C, Lantai 5<br>
                Universitas Esa Unggul Jakarta
            </p>
        </div>
    </body>

</html>
