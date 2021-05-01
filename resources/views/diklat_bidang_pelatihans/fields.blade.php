<!-- Kode Jenis Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kode_jenis', 'Kode Jenis :') !!}
    {{-- {!! Form::text('kode_jenis', null, ['class' => 'form-control']) !!} --}}
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
    {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('diklatBidangPelatihans.index') }}" class="btn btn-secondary">Batalkan</a>
</div>
