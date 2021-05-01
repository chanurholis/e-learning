<!-- Kode Jenis Field -->
<div class="form-group">
    {!! Form::label('kode_jenis', 'Kode Jenis :') !!}
    <p class="font-weight-bold">{{ $diklatJenis->kode_jenis }}</p>
</div>

<!-- Nama Jenis Field -->
<div class="form-group">
    {!! Form::label('nama_jenis', 'Nama Jenis :') !!}
    <p class="font-weight-bold">{{ $diklatJenis->nama_jenis }}</p>
</div>

<!-- Status Aktif Field -->
<div class="form-group">
    {!! Form::label('status_aktif', 'Status Aktif :') !!}
    <p class="font-weight-bold">{{ $diklatJenis->status_aktif }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Dibuat :') !!}
    <p class="font-weight-bold">{{ $diklatJenis->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Diperbarui :') !!}
    <p class="font-weight-bold">{{ $diklatJenis->updated_at }}</p>
</div>

