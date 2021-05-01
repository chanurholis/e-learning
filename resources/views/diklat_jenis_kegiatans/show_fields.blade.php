<!-- Kode Kegiatan Field -->
<div class="form-group">
    {!! Form::label('kode_kegiatan', 'Kode Kegiatan :') !!}
    <p class="font-weight-bold">{{ $diklatJenisKegiatan->kode_kegiatan }}</p>
</div>

<!-- Nama Kegiatan Field -->
<div class="form-group">
    {!! Form::label('nama_kegiatan', 'Nama Kegiatan :') !!}
    <p class="font-weight-bold">{{ $diklatJenisKegiatan->nama_kegiatan }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Dibuat :') !!}
    <p class="font-weight-bold">{{ $diklatJenisKegiatan->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Diperbarui :') !!}
    <p class="font-weight-bold">{{ $diklatJenisKegiatan->updated_at }}</p>
</div>

