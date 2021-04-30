<!-- Kode Jenis Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kode_jenis', 'Kode Jenis :') !!}
    {!! Form::text('kode_jenis', null, ['class' => 'form-control']) !!}
</div>

<!-- Kode Bidang Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kode_bidang', 'Kode Bidang :') !!}
    {!! Form::text('kode_bidang', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Bidang Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_bidang', 'Nama Bidang :') !!}
    {!! Form::text('nama_bidang', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Aktif Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status_aktif', 'Status Aktif :') !!}
    {!! Form::select('status_aktif', ['Y' => 'Y', 'N' => 'N'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('diklatBidangPelatihans.index') }}" class="btn btn-secondary">Cancel</a>
</div>
