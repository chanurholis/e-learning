@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{!! route('diklatJenis.index') !!}">Jenis Diklat</a>
        </li>
        <li class="breadcrumb-item active">Impor</li>
    </ol>
        <div class="container-fluid">
            <div class="animated fadeIn">
                @include('coreui-templates::common.errors')
            <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-file"></i>
                                <strong>Impor Jenis Diklat</strong>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('diklatJenis.import') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('post')
                                    <!-- Kode Jenis Field -->
                                    <div class="form-group col-sm-6">
                                        {!! Form::label('file', 'File :') !!}
                                        <input type="file" name="file" id="file" class="form-control">
                                    </div>

                                    <!-- Submit Field -->
                                    <div class="form-group col-sm-6">
                                        {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
                                        <a href="{!! route('users.index') !!}" class="btn btn-default">Batalkan</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
