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

          <a href="{{ url('/surat') }}" class="btn btn-secondary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-arrow-left"></i>
                    </span>
                    <span class="text">Kembali</span>
          </a>

          <br/>
          <br/>
                        {!! Form::model($surat, [
                            'method' => 'PATCH',
                            'url' => ['/surat', $surat->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('surat.form', ['submitButtonText' => 'Perbarui'])

                        {!! Form::close() !!}
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
  @endsection

  @section('scripts')
    <script>
        jQuery(document).ready(function () {
            @if ($surat->tipe=='keluar')
            $('.tglTerima').hide();
            @endif
        });
    </script>
@endsection