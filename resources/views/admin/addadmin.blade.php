@extends('komponen.index')

@section('content')
      <!-- Add Admin Table -->
      <div class="container ml-4 mt-4">
        <h3>Add Admin</h3>
        <form>
          <div class="form-group">
            <label for="adminName">Name</label>
            <input type="text" class="form-control" id="adminName" placeholder="Enter name">
          </div>
          <div class="form-group">
            <label for="adminEmail">Email address</label>
            <input type="email" class="form-control" id="adminEmail" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="adminPassword">Password</label>
            <input type="password" class="form-control" id="adminPassword" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="adminRole">Role</label>
            <select class="form-control" id="adminRole">
              <option>Admin</option>
              <option>Super Admin</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <!-- Add Admin Table End -->
@endsection
