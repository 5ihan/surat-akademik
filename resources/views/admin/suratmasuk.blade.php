@extends('komponen.index')

@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Surat Masuk</h4>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Jenis Surat</th>
                                            <th>Nama</th>
                                            <th>NIM</th>
                                            <th>Jurusan</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_surat as $key => $data)
                                            @php
                                                if ($data->status == 'Pending') {
                                                    $badge = 'badge-warning';
                                                } elseif ($data->status == 'Approve') {
                                                    $badge = 'badge-success';
                                                } else {
                                                    $badge = 'badge-danger';
                                                }

                                                if ($data->jenis_surat == 'Aktivasi') {
                                                    $link = route('admin.generate-surat-aktivasi', [$data->id, $data->user->nim]);
                                                } elseif ($data->jenis_surat == 'Izin Penelitian') {
                                                    $link = route('admin.generate-surat-izin-penelitian', [$data->id, $data->user->nim]);
                                                } elseif ($data->jenis_surat == 'Magang') {
                                                    $link = route('admin.generate-surat-magang', [$data->id, $data->user->nim]);
                                                } elseif ($data->jenis_surat == 'Rekomendasi Beasiswa') {
                                                    $link = route('admin.generate-surat-rekomendasi-beasiswa', [$data->id, $data->user->nim]);
                                                } else {
                                                    $link = route('admin.generate-surat-lain', [$data->id, $data->user->nim]);
                                                }
                                            @endphp
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $data->jenis_surat }}</td>
                                                <td>{{ $data->user->nama }}</td>
                                                <td>{{ $data->user->nim }}</td>
                                                <td>{{ $data->prodi }}</td>
                                                <td>
                                                    <div class="badge {{ $badge }}">{{ $data->status }}</div>
                                                </td>
                                                <td>
                                                    <a type="button" href="{{ $link }}" target="_BLANK" class="btn btn-primary btn-sm"><span class="mdi mdi-eye"></span></a>
                                                    <form action="{{ route('admin.update-status', [$data->id, 'Approve']) }}" method="POST" style="display: inline-block">
                                                        @csrf
                                                        <button type="submit" class="btn btn-success btn-sm">Approve</button>
                                                    </form>
                                                    <form action="{{ route('admin.update-status', [$data->id, 'Reject']) }}" method="POST" style="display: inline-block">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm">Reject</i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
