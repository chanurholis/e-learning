<!-- Kode Model Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kode_model', 'Kode Model :') !!}
    {!! Form::text('kode_model', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Model Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_model', 'Nama Model :') !!}
    {!! Form::text('nama_model', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('diklatModelPelatihans.index') }}" class="btn btn-secondary">Batalkan</a>
</div>
