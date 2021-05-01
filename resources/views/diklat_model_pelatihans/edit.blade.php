@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('diklatModelPelatihans.index') !!}">Diklat Model Pelatihan</a>
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
                              <strong>Edit Diklat Model Pelatihan</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($diklatModelPelatihan, ['route' => ['diklatModelPelatihans.update', $diklatModelPelatihan->id_model], 'method' => 'patch']) !!}

                              @include('diklat_model_pelatihans.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection