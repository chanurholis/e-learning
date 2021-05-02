@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Bidang Kerja</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('flash::message')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>
                                Bidang Kerja
                            <a class="pull-right ml-2" href="{{ route('diklatBidangKerjas.create') }}"><i class="fa fa-plus-square"></i> Tambah</a>
                            <a class="pull-right ml-2" href="{{ 'show-form-import-bidang-kerja' }}"><i class="fa fa-file"></i> Impor</a>
                            <a class="pull-right" href="{{ 'format-import-bidang-kerja' }}"><i class="fa fa-download"></i> Format Impor</a>
                        </div>
                        <div class="card-body">
                            @include('diklat_bidang_kerjas.table')
                            <div class="pull-right mr-3">
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

