@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('diklatJenisKegiatans.index') !!}">Diklat Jenis Kegiatan</a>
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
                              <strong>Edit Diklat Jenis Kegiatan</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($diklatJenisKegiatan, ['route' => ['diklatJenisKegiatans.update', $diklatJenisKegiatan->id_kegiatan], 'method' => 'patch']) !!}

                              @include('diklat_jenis_kegiatans.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection