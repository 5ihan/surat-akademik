@extends('komponen.index')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">View Admin</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Admin Username</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_admin as $key => $data)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $data->username }}</td>
                                                <td>
                                                    <a href="{{ route('admin.edit', $data->id) }}" class="btn btn-outline-primary btn-sm">
                                                        Edit
                                                    </a>

                                                    <form action="{{ route('admin.delete', $data->id) }}" method="POST" style="display: inline-block">
                                                        @csrf
                                                        <button type="submit" class="btn btn-outline-danger btn-sm">
                                                            Delete
                                                        </button>
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
