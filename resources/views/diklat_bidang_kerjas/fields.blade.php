<!-- Kode Jenis Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kode_jenis', 'Kode Jenis :') !!}
    <select name="kode_jenis" id="kode_jenis" class="form-control">
        <option value="">Pilih Kode Jenis</option>
        @foreach ($diklatJenis as $jenis)
            <option value="{{ $jenis->kode_jenis }}">{{ $jenis->nama_jenis }}</option>
        @endforeach
    </select>
</div>

<!-- Kode Bidang Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kode_bidang', 'Kode Bidang :') !!}
    <select name="kode_bidang" id="kode_bidang" class="form-control">
        <option value="">Pilih Kode Bidang</option>
        @foreach ($diklatBidang as $bidang)
            <option value="{{ $bidang->kode_bidang }}">{{ $bidang->nama_bidang }}</option>
        @endforeach
    </select>
</div>

<!-- Kode Kerja Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kode_kerja', 'Kode Kerja :') !!}
    {!! Form::text('kode_kerja', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Kerja Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_kerja', 'Nama Kerja :') !!}
    {!! Form::text('nama_kerja', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Aktif Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status_aktif', 'Status Aktif :') !!}
    {!! Form::select('status_aktif', ['Y' => 'Y', 'N' => 'N'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('diklatBidangKerjas.index') }}" class="btn btn-secondary">Batalkan</a>
</div>
