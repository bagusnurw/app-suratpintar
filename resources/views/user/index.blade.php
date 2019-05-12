@extends('layouts.app')

@section('content')
<!-- Page Wrapper -->
  <div id="wrapper">
    @include('admin.sidebar')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <p class="mb-4">Pada halaman user ini digunakan untuk memanajemen hak akses dari user</p>

          <a href="{{ url('/user/create') }}" class="btn btn-info btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-info-circle"></i>
                    </span>
                    <span class="text">Tambah User</span>
          </a>

          <br/>
          <br/>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Surat Masuk dan Keluar</h6>
            </div>

            <br/>

            <div class="container">
            {!! Form::open(['method' => 'GET', 'url' => '/user', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Cari data ..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
            {!! Form::close() !!}
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <th style="display:none;">#</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Hak</th>
                    <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach($user as $item)
                     <tr>
                     <td style="display:none;">{{ $loop->iteration or $item->id }}</td>
                     <td>{{ $item->name }}</td>
                     <td>{{ $item->username }}</td>
                     <td>{{ $item->hak }}</td>
                     <td>
                    <a href="{{ url('/user/' . $item->id . '/edit') }}" class="btn btn-warning btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-exclamation-triangle"></i>
                    </span>
                    <span class="text">Edit</span>
                    </a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/user', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('
                                            <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                            </span><span class="text">Delete</span>
                                                        ', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-icon-split',
                                                        'title' => 'Delete Surat',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                  </tbody>
                </table>
                            <div class="pagination-wrapper"> {!! $user->appends(['search' => Request::get('search')])->render() !!} </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
  @endsection
