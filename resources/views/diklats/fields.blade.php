<!-- Jenis Diklat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jenis_diklat', 'Jenis Diklat:') !!}
    {!! Form::select('jenis_diklat', [], null, ['class' => 'form-control']) !!}
</div>

<!-- Bidang Pelatihan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bidang_pelatihan', 'Bidang Pelatihan:') !!}
    {!! Form::select('bidang_pelatihan', [], null, ['class' => 'form-control']) !!}
</div>

<!-- Jenis Kegiatan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jenis_kegiatan', 'Jenis Kegiatan:') !!}
    {!! Form::select('jenis_kegiatan', [], null, ['class' => 'form-control']) !!}
</div>

<!-- Model Palatihan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('model_palatihan', 'Model Palatihan:') !!}
    {!! Form::select('model_palatihan', [], null, ['class' => 'form-control']) !!}
</div>

<!-- Kode Diklat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kode_diklat', 'Kode Diklat:') !!}
    {!! Form::text('kode_diklat', null, ['class' => 'form-control']) !!}
</div>

<!-- Kode Profil Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kode_profil', 'Kode Profil:') !!}
    {!! Form::text('kode_profil', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Diklat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_diklat', 'Nama Diklat:') !!}
    {!! Form::text('nama_diklat', null, ['class' => 'form-control']) !!}
</div>

<!-- Tahun Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tahun', 'Tahun:') !!}
    {!! Form::text('tahun', null, ['class' => 'form-control']) !!}
</div>

<!-- Jenjang Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jenjang', 'Jenjang:') !!}
    {!! Form::text('jenjang', null, ['class' => 'form-control']) !!}
</div>

<!-- Syarat Peserta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('syarat_peserta', 'Syarat Peserta:') !!}
    {!! Form::text('syarat_peserta', null, ['class' => 'form-control']) !!}
</div>

<!-- Syarat Wi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('syarat_wi', 'Syarat Wi:') !!}
    {!! Form::text('syarat_wi', null, ['class' => 'form-control']) !!}
</div>

<!-- Deskripsi Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('deskripsi', 'Deskripsi:') !!}
    {!! Form::textarea('deskripsi', null, ['class' => 'form-control']) !!}
</div>

<!-- Tujuan Diklat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tujuan_diklat', 'Tujuan Diklat:') !!}
    {!! Form::text('tujuan_diklat', null, ['class' => 'form-control']) !!}
</div>

<!-- Keterangan Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    {!! Form::textarea('keterangan', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('diklats.index') }}" class="btn btn-secondary">Cancel</a>
</div>
