@extends('komponen.index')

@section('content')
    <div class="main-panel">
        <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                    <div class="card-body">
                        <h4 class="font-weight-normal mb-3">Surat Keluar</h4>
                        <h2 class="mb-5 font-weight-bold">{{ $statusSummary['Approve'] }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                    <div class="card-body">
                        <h4 class="font-weight-normal mb-3">Surat Masuk</h4>
                        <h2 class="mb-5 font-weight-bold">{{ $statusSummary['Pending'] }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                    <div class="card-body">
                        <h4 class="font-weight-normal mb-3">Surat Di Tolak</h4>
                        <h2 class="mb-5 font-weight-bold">{{ $statusSummary['Reject'] }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Nama Pengirim</h5>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="font-weight-medium">Mahasiswa</div>
                                        </th>
                                        <th>
                                            <div class="font-weight-medium">Jenis Surat</div>
                                        </th>
                                        <th>
                                            <div class="font-weight-medium">Tanggal Pembuatan</div>
                                        </th>
                                        <th>
                                            <div class="font-weight-medium">Status</div>
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_surat as $data)
                                        @php
                                            if ($data->status == 'Pending') {
                                                $badge = 'badge-warning';
                                            } elseif ($data->status == 'Approve') {
                                                $badge = 'badge-success';
                                            } else {
                                                $badge = 'badge-danger';
                                            }
                                        @endphp
                                        <tr>
                                            <td>
                                                <div class="font-weight-medium"> {{ $data->user->nim . ' - ' . $data->user->nama }}</div>
                                            </td>
                                            <td>
                                                <div class="font-weight-medium"> {{ $data->jenis_surat }}</div>
                                            </td>
                                            <td>
                                                <div class="font-weight-medium"> {{ $data->created_at }}</div>
                                            </td>
                                            <td>
                                                <div class="badge {{ $badge }}">{{ $data->status }}</div>
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
