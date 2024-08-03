@extends('komponen.index')

@section('content')
    <!-- Add Admin Table -->
    <div class="container ml-4 mt-4">
        <h3>Add Admin</h3>
        <form method="POST" action="{{ route('admin.add.post') }}">
            @csrf
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="adminPassword">Password</label>
                <input type="password" class="form-control" id="adminPassword" name="password" value="{{ old('password') }}" placeholder="Enter password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!-- Add Admin Table End -->
@endsection
