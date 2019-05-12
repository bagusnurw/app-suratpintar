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
          <h1 class="h3 mb-2 text-gray-800">Disposisi : {{ $disposisi->id }}</h1>
          <p class="mb-4">Halaman disposisi ini adalah untuk memberi disposisi pada surat, dan dapat mencetak kartu disposisi user yang didaftarkan sebagai disposisi</p>

          <a href="{{ url('/surat') }}" class="btn btn-secondary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-arrow-left"></i>
                    </span>
                    <span class="text">Kembali</span>
          </a>

          <br/>
          <br/>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Surat Masuk dan Keluar</h6>
            </div>

            <br/>

            <div class="card-body">
              <div class="table-responsive">
                <h1 class="text-center">KARTU DISPOSISI</h1>
                <table width="100%">
                <tr>
                    <td width="200">No. Disposisi</td>
                    <td width="1">:</td>
                    <td> &nbsp;{{ $disposisi->no_agenda }}</td>
                </tr>
                <tr>
                    <td width="200">No. Agenda</td>
                    <td width="1">:</td>
                    <td> &nbsp;{{ $disposisi->no_agenda }}</td>
                </tr>
                <tr>
                    <td width="200">Tanggal Penyelesaian</td>
                    <td width="1">:</td>
                    <td> &nbsp; .........................................</td>
                </tr>
                </table>

                <hr width="100%">

                <table width="100%">
                <tr>
                    <td width="200">Surat Dari</td>
                    <td width="1">:</td>
                    <td> &nbsp; {{ $disposisi->surat->pengirim }}</td>
                </tr>
                <tr>
                    <td width="200">Tanggal Surat</td>
                    <td width="1">:</td>
                    <td> &nbsp;{{ Carbon\Carbon::parse($disposisi->surat->tanggal_kirim)->format('d M Y') }}</td>
                </tr>
                <tr>
                    <td width="200">No. Surat</td>
                    <td width="1">:</td>
                    <td> &nbsp; {{ $disposisi->surat->no_surat }}</td>
                </tr>
                <tr>
                    <td width="200">Perihal</td>
                    <td width="1">:</td>
                    <td> &nbsp; {{ $disposisi->surat->perihal }}</td>
                </tr>
                </table>
                            
                <br>

                <table width="100%" border="1" style="border-collapse: collapse;">
                <tr>
                    <td style="padding: 10px;" valign="top">
                        <p><b>Keterangan:</b></p>
                        <p>
                            {{ $disposisi->keterangan }}
                        </p>
                        <p><b>Tanggapan:</b></p>
                        <p>
                            {{ $disposisi->tanggapan }}
                        </p>
                    </td>
                    <td style="padding: 10px;" valign="top">
                        <p><b>Diteruskan Kepada</b></p>
                        <p>{{ $disposisi->kepada }}</p>
                    </td>
                </tr>
                </table>

                <br>

                <table width="100%">
                <tr>
                    <td width="50%"></td>
                    <td width="50%" align="center">
                        <p>Malang, ................................................................</p>
                        <p><b>Kepala</b></p>
                        <br>
                        <br>
                        <br>
                        <br>
                        <u><b>.................................................................</b></u>
                    </td>
                </tr>
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