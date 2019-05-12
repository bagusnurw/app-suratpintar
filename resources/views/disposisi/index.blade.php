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
          <p class="mb-4">Disposisi adalah pendapat mengenai surat, dan untuk menambah disposisi dimohon untuk melakukan penambahan data</p>

          @if ($surats>0)
          <a href="{{ url('/disposisi/create') }}" class="btn btn-info btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-info-circle"></i>
                    </span>
                    <span class="text">Tambah Disposisi</span>
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
            {!! Form::open(['method' => 'GET', 'url' => '/disposisi', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
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
                      <th>No Disposisi</th>
                      <th>No Agenda</th>
                      <th>No. Surat</th>
                      <th>Kepada</th>
                      <th>Keterangan</th>
                      <th>Tanggapan</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach($disposisi as $item)
                     <tr>
                     <td style="display:none;">{{ $loop->iteration or $item->id }}</td>
                     <td>{{ $item->no_disposisi }}</td>
                     <td>{{ $item->no_agenda }}</td>
                     <td>{{ $item->surat->no_surat }}</td>
                     <td>{{ $item->kepada }}</td>
                     <td>{{ $item->keterangan }}</td>
                     <td>{{ $item->tanggapan }}</td>
                     <td>
                    <a href="{{ url('/disposisi/' . $item->id) }}" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-flag"></i>
                    </span>
                    <span class="text">Lihat</span>

                    <a href="{{ url('/disposisi/' . $item->id . '/edit') }}" class="btn btn-warning btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-exclamation-triangle"></i>
                    </span>
                    <span class="text">Edit</span>
                    </a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/disposisi', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('
                                            <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                            </span><span class="text">Delete</span>
                                                        ', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-icon-split',
                                                        'title' => 'Delete Disposisi',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                  </tbody>
                </table>
                            <div class="pagination-wrapper"> {!! $disposisi->appends(['search' => Request::get('search')])->render() !!} </div>
              </div>
                        @else
                        <p class="lead text-center">Belum ada surat masuk</p>
                        @endif
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