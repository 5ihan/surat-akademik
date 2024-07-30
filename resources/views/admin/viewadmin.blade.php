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
                          <th>Admin ID</th>
                          <th>Admin Name</th>
                          <th>Email</th>
                          <th>Password</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>admin1</td>
                          <td>Admin 1</td>
                          <td>admin1@example.com</td>
                          <td>******</td>
                          <td>
                            <a href="#" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#editAdminModal">
                              Edit
                            </a>
                            <a href="#" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#deleteAdminModal">
                              Delete
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>admin2</td>
                          <td>Admin 2</td>
                          <td>admin2@example.com</td>
                          <td>******</td>
                          <td>
                            <a href="#" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#editAdminModal">
                              Edit
                            </a>
                            <a href="#" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#deleteAdminModal">
                              Delete
                            </a>
                          </td>
                        </tr>
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        @endsection
