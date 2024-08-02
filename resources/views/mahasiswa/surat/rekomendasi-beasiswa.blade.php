<!DOCTYPE html>
<html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Surat Rekomendasi Beasiswa</title>
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
                margin-top: 30px;
                margin-bottom: 30px;
            }

            .content {
                line-height: 1.6;
                margin-bottom: 20px;
            }

            .content p {
                margin: 0;
            }

            .signature {
                margin-top: 50px;
                text-align: right;
            }

            .signature img {
                width: 250px;
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
            <p style="margin: 0;padding:0">Jakarta, {{ Carbon\Carbon::now()->translatedFormat('d F Y') }}</p>
        </div>

        <div class="title">
            <span style="font-weight: bold;">SURAT KETERANGAN</span><br>
            No. {{ $data->id }}/S.Ket/Kaprodi-SI/Fasilkom/UEU/VII/{{ date('Y') }}
        </div>

        <div class="content">
            <p>
                Yang bertandatangan di bawah ini:
            <table style="margin-left: 50px">
                <tr>
                    <td>Nama</td>
                    <td>: Anik Hanifatul Azizah, S.Kom, MMSI</td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>: Kaprodi {{ $data->prodi }}</td>
                </tr>
            </table>
            </p>

            <p>
                Menerangkan bahwa nama di bawah ini:
            <table style="margin-left: 50px">
                <tr>
                    <td>Nama</td>
                    <td>: {{ $data->nama }}</td>
                </tr>
            </table>
            </p>

            <p>Benar merupakan mahasiswa pada program Studi {{ $data->prodi }}, dan yang bersangkutan sedang menjalankan skripsi pada semester {{ $jenis_semester }} {{ date('Y') - 1 . '/' . date('Y') }}.</p>

            <p>Demikianlah surat keterangan ini dibuat untuk diketahui dan dapat digunakan sebagaimana mestinya untuk perpanjangan Yayasan Beasiswa Jakarta.</p>
        </div>

        <div class="signature">
            <p>Jakarta, {{ Carbon\Carbon::now()->translatedFormat('d F Y') }}</p>
            <img width="1000" src="{{ asset('image/ttd_ka_' . $data->prodi . '.png') }}" alt="Signature {{ $data->prodi }}"><br>
            <strong>Anik Hanifatul Azizah, S.Kom, M.IM<br>
                Kaprodi {{ $data->prodi }}</strong>
        </div>

        <div class="footer">
            <p>
                {{ $data->fakultas }}<br>
                Gedung C, Lantai 5<br>
                Universitas Esa Unggul Jakarta
            </p>
        </div>
    </body>

</html>
