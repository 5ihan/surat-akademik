@extends('komponen.index')

@section('content')
     <div class="main-panel">
            <div class="row">
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <h4 class="font-weight-normal mb-3">Surat Keluar</h4>
                    <h2 class="mb-5 font-weight-bold">15</h2>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <h4 class="font-weight-normal mb-3">Surat Masuk</h4>
                    <h2 class="mb-5 font-weight-bold">5</h2>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body">
                    <h4 class="font-weight-normal mb-3">Surat Di Tolak</h4>
                    <h2 class="mb-5 font-weight-bold">14</h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Nama Pengirim</h5>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="dropdown mb-4">
                        <button class="btn btn-sm btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          This week
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">This month</a>
                          <a class="dropdown-item" href="#">Last month</a>
                        </div>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>
                              <div class="font-weight-medium">User</div>
                            </th>
                            <th>
                              <div class="font-weight-medium">No Surat</div>
                            </th>
                            <th>
                              <div class="font-weight-medium">Date</div>
                            </th>
                            <th>
                              <div class="font-weight-medium">Status</div>
                            </th>

                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center">
                                <img src="images/faces/face1.jpg" alt="profile" class="rounded-circle" />
                                <div class="ml-3">
                                  <h5 class="mb-0 font-weight-medium">Henry Klein</h5>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="font-weight-medium"> #895425</div>
                            </td>
                            <td>
                              <div class="font-weight-medium"> 12 Jan 2019</div>
                            </td>
                            <td>
                              <div class="badge badge-warning">Pending</div>
                            </td>

                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center">
                                <img src="images/faces/face2.jpg" alt="profile" class="rounded-circle" />
                                <div class="ml-3">
                                  <h5 class="mb-0 font-weight-medium">Esmeralda Harris</h5>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="font-weight-medium"> #214375</div>
                            </td>
                            <td>
                              <div class="font-weight-medium"> 27 Jan 2019</div>
                            </td>
                            <td>
                              <div class="badge badge-success">Approved</div>
                            </td>

                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center">
                                <img src="images/faces/face3.jpg" alt="profile" class="rounded-circle" />
                                <div class="ml-3">
                                  <h5 class="mb-0 font-weight-medium">Lorene Boyle</h5>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="font-weight-medium"> #347582</div>
                            </td>
                            <td>
                              <div class="font-weight-medium"> 21 Jan 2019</div>
                            </td>
                            <td>
                              <div class="badge badge-danger">Rejected</div>
                            </td>

                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center">
                                <img src="images/faces/face4.jpg" alt="profile" class="rounded-circle" />
                                <div class="ml-3">
                                  <h5 class="mb-0 font-weight-medium">Carl Henson</h5>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="font-weight-medium"> #895425</div>
                            </td>
                            <td>
                              <div class="font-weight-medium"> 21 Jan 2019</div>
                            </td>
                            <td>
                              <div class="badge badge-info">In progress</div>
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
