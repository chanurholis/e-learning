<div class="row">
    <!-- Jenis Diklat Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('jenis_diklat', 'Jenis Diklat :') !!}
        <select name="jenis_diklat" id="jenis_diklat" class="form-control">
            <option value="">Pilih Jenis Diklat</option>
            @foreach ($jenisDiklat as $jenis)
                <option value="{{ $jenis->kode_jenis }}">{{ $jenis->nama_jenis }}</option>
            @endforeach
        </select>
    </div>

    <!-- Bidang Pelatihan Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('bidang_pelatihan', 'Bidang Pelatihan :') !!}
        <select name="bidang_pelatihan" id="bidang_pelatihan" class="form-control">
            <option value="">Pilih Bidang Pelatihan</option>
            @foreach ($bidangPelatihan as $pelatihan)
                <option value="{{ $pelatihan->kode_bidang }}">{{ $pelatihan->nama_bidang }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="row">
    <!-- Jenis Kegiatan Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('jenis_kegiatan', 'Jenis Kegiatan :') !!}
        <select name="jenis_kegiatan" id="jenis_kegiatan" class="form-control">
            <option value="">Pilih Jenis Kegiatan</option>
            @foreach ($jenisKegiatan as $kegiatan)
                <option value="{{ $kegiatan->kode_kegiatan }}">{{ $kegiatan->nama_kegiatan }}</option>
            @endforeach
        </select>
    </div>

    <!-- Model Palatihan Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('model_palatihan', 'Model Palatihan :') !!}
        <select name="model_pelatihan" id="model_pelatihan" class="form-control">
            <option value="">Pilih Model Pelatihan</option>
            @foreach ($modelPelatihan as $pelatihan)
                <option value="{{ $pelatihan->kode_model }}">{{ $pelatihan->nama_model }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="row">
    <!-- Kode Diklat Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('kode_diklat', 'Kode Diklat :') !!}
        {!! Form::text('kode_diklat', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Kode Profil Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('kode_profil', 'Kode Profil :') !!}
        {!! Form::text('kode_profil', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="row">
    <!-- Nama Diklat Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('nama_diklat', 'Nama Diklat :') !!}
        {!! Form::text('nama_diklat', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Tahun Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('tahun', 'Tahun :') !!}
        {!! Form::text('tahun', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="row">
    <!-- Jenjang Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('jenjang', 'Jenjang :') !!}
        {!! Form::text('jenjang', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Syarat Peserta Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('syarat_peserta', 'Syarat Peserta :') !!}
        {!! Form::text('syarat_peserta', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="row">
    <!-- Syarat Wi Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('syarat_wi', 'Syarat Wi :') !!}
        {!! Form::text('syarat_wi', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Tujuan Diklat Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('tujuan_diklat', 'Tujuan Diklat :') !!}
        {!! Form::text('tujuan_diklat', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="row">
    <!-- Deskripsi Field -->
    <div class="form-group col-sm-12 col-lg-12">
        {!! Form::label('deskripsi', 'Deskripsi :') !!}
        {!! Form::textarea('deskripsi', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="row">
    <!-- Keterangan Field -->
    <div class="form-group col-sm-12 col-lg-12">
        {!! Form::label('keterangan', 'Keterangan :') !!}
        {!! Form::textarea('keterangan', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="row">
    <!-- Status Aktif Field -->
    <div class="form-group col-sm">
        {!! Form::label('status_aktif', 'Status Aktif :') !!}
        {!! Form::select('status_aktif', ['Y' => 'Y', 'N' => 'N'], null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="row">
    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
        <a href="{{ route('diklats.index') }}" class="btn btn-secondary">Batalkan</a>
    </div>
</div>
