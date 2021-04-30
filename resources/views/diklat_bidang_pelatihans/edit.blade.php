@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('diklatBidangPelatihans.index') !!}">Diklat Bidang Pelatihan</a>
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
                              <strong>Edit Diklat Bidang Pelatihan</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($diklatBidangPelatihan, ['route' => ['diklatBidangPelatihans.update', $diklatBidangPelatihan->id_bidang], 'method' => 'patch']) !!}

                              @include('diklat_bidang_pelatihans.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection