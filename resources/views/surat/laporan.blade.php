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
          <p class="mb-4">Pada halaman ini user bisa melihat data rekap/laporan surat masuk dan surat keluar</p>

          <br/>
                <div class="panel-body">
                    {!! Form::open(['url' => 'surat/laporan','method' => 'get','class' => 'form-inline']) !!}
                    <div class="form-group">
                        <label for="" class="control-label">Dari : -</label>
                        {!! Form::date('from', $from, ['class'=>'form-control input-sm']) !!}
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">--Sampai : -</label>
                        {!! Form::date('to', $to, ['class'=>'form-control input-sm']) !!}
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">--Surat : -</label>
                        {!! Form::select('tipe', ['masuk' => 'Surat masuk', 'keluar' => 'Surat keluar'], $tipe, ['class' => 'form-control input-sm']) !!}
                    </div>
                    ---<button type="submit" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> Tampilkan</button>
                
                    {!! Form::close() !!}
          <br/>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Laporan Surat Masuk dan Keluar</h6>
            </div>

            <br/>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>No. Surat</th>
                      <th>No. Agenda</th>
                      <th>Jenis Surat</th>
                      <th>Tanggal Kirim</th>
                      @if ($tipe=='masuk')
                      <th>Tanggal Terima</th>
                      @endif
                      <th>Pengirim</th>
                      <th>Perihal</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach ($surats as $si => $s)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $s->no_surat }}</td>
                        <td>{{ $s->no_agenda }}</td>
                        <td>{{ $s->jenis_surat->name }}</td>
                        <td>{{ \Carbon\Carbon::parse($s->tanggal_kirim)->format('d/m/Y') }}</td>
                        @if ($tipe=='masuk')
                        <td>{{ \Carbon\Carbon::parse($s->tanggal_terima)->format('d/m/Y') }}</td>
                        @endif
                        <td>{{ $s->pengirim }}</td>
                        <td>{{ $s->perihal }}</td>
                    </tr>
                        @endforeach
                  </tbody>
                </table>
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