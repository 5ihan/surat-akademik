@extends('komponen.index')

@section('content')
    <!-- Add Admin Table -->
    <div class="container ml-4 mt-4">
        <h3>Edit Admin</h3>
        <form method="POST" action="{{ route('admin.edit.post') }}">
            @csrf
            <input type="text" class="form-control" id="id" name="id" value="{{ old('id', $admin->id) }}" hidden>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="{{ old('username', $admin->username) }}" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="adminPassword">New Password</label>
                <input type="password" class="form-control" id="adminPassword" name="password" placeholder="Enter New password">
            </div>
            <button type="submit" class="btn btn-warning">Edit</button>
        </form>
    </div>
    <!-- Add Admin Table End -->
@endsection
