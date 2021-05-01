@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{!! route('diklatJenis.index') !!}">Jenis Diklat</a>
        </li>
        <li class="breadcrumb-item active">Edit</li>
        </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('coreui-templates::common.errors')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-edit fa-lg"></i>
                            <strong>Edit Jenis Diklat</strong>
                        </div>
                        <div class="card-body">
                            {!! Form::model($diklatJenis, ['route' => ['diklatJenis.update', $diklatJenis->id_jenis], 'method' => 'patch']) !!}

                            @include('diklat-jenis.fields')

                            {!! Form::close() !!}
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection