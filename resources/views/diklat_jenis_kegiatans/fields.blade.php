<!-- Kode Kegiatan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kode_kegiatan', 'Kode Kegiatan :') !!}
    {!! Form::text('kode_kegiatan', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Kegiatan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_kegiatan', 'Nama Kegiatan :') !!}
    {!! Form::text('nama_kegiatan', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('diklatJenisKegiatans.index') }}" class="btn btn-secondary">Batalkan</a>
</div>
