<!-- Kode Jenis Field -->
<div class="form-group">
    {!! Form::label('kode_jenis', 'Kode Jenis :') !!}
    <p class="font-weight-bold">{{ $diklatBidangPelatihan->kode_jenis }}</p>
</div>

<!-- Kode Bidang Field -->
<div class="form-group">
    {!! Form::label('kode_bidang', 'Kode Bidang :') !!}
    <p class="font-weight-bold">{{ $diklatBidangPelatihan->kode_bidang }}</p>
</div>

<!-- Nama Bidang Field -->
<div class="form-group">
    {!! Form::label('nama_bidang', 'Nama Bidang :') !!}
    <p class="font-weight-bold">{{ $diklatBidangPelatihan->nama_bidang }}</p>
</div>

<!-- Status Aktif Field -->
<div class="form-group">
    {!! Form::label('status_aktif', 'Status Aktif :') !!}
    <p class="font-weight-bold">{{ $diklatBidangPelatihan->status_aktif }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Dibuat :') !!}
    <p class="font-weight-bold">{{ $diklatBidangPelatihan->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Diperbarui :') !!}
    <p class="font-weight-bold">{{ $diklatBidangPelatihan->updated_at }}</p>
</div>

