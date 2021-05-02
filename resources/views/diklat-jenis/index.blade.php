@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Jenis Diklat</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('flash::message')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>
                            Jenis Diklat
                            <a class="pull-right ml-2" href="{{ route('diklatJenis.create') }}"><i class="fa fa-plus-square"></i> Tambah</a>
                            <a class="pull-right ml-2" href="{{ '/show-form-import-diklat-jenis' }}"><i class="fa fa-file"></i> Impor</a>
                            <a class="pull-right" href="{{ '/format-import-jenis-diklat' }}"><i class="fa fa-download"></i> Format Impor</a>
                        </div>
                        <div class="card-body">
                            @include('diklat-jenis.table')
                            <div class="pull-right mr-3">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

