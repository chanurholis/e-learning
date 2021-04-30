<!-- Kode Jenis Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kode_jenis', 'Kode Jenis :') !!}
    {!! Form::text('kode_jenis', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Jenis Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_jenis', 'Nama Jenis :') !!}
    {!! Form::text('nama_jenis', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Aktif Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status_aktif', 'Status Aktif :') !!}
    {!! Form::select('status_aktif', ['Y' => 'Y', 'N' => 'N'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('diklatJenis.index') }}" class="btn btn-secondary">Batalkan</a>
</div>
