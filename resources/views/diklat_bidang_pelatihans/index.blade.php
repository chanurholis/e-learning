@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Bidang Pelatihan</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('flash::message')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>
                                Bidang Pelatihan
                            <a class="pull-right ml-2" href="{{ route('diklatBidangPelatihans.create') }}"><i class="fa fa-plus-square"></i> Tambah</a>
                            <a class="pull-right ml-2" href="{{ route('diklatBidangPelatihans.create') }}"><i class="fa fa-file"></i> Impor</a>
                            <a class="pull-right" href="{{ 'format-import-bidang-pelatihan' }}"><i class="fa fa-download"> Format Impor</i></a>
                        </div>
                        <div class="card-body">
                            @include('diklat_bidang_pelatihans.table')
                            <div class="pull-right mr-3">
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

