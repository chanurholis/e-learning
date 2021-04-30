<!-- Kode Jenis Field -->
<div class="form-group">
    {!! Form::label('kode_jenis', 'Kode Jenis :') !!}
    <p>{{ $diklatJenis->kode_jenis }}</p>
</div>

<!-- Nama Jenis Field -->
<div class="form-group">
    {!! Form::label('nama_jenis', 'Nama Jenis :') !!}
    <p>{{ $diklatJenis->nama_jenis }}</p>
</div>

<!-- Status Aktif Field -->
<div class="form-group">
    {!! Form::label('status_aktif', 'Status Aktif :') !!}
    <p>{{ $diklatJenis->status_aktif }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At :') !!}
    <p>{{ $diklatJenis->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At :') !!}
    <p>{{ $diklatJenis->updated_at }}</p>
</div>

