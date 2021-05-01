<div class="table-responsive">
    <table class="table table-striped" id="diklats-table">
        <thead>
            <tr>
                <th>Jenis Diklat</th>
                <th>Bidang Pelatihan</th>
                <th>Jenis Kegiatan</th>
                <th>Model Palatihan</th>
                <th>Kode Diklat</th>
                <th>Kode Profil</th>
                <th>Nama Diklat</th>
                <th>Tahun</th>
                <th>Jenjang</th>
                <th>Syarat Peserta</th>
                <th>Syarat Wi</th>
                <th>Deskripsi</th>
                <th>Tujuan Diklat</th>
                <th>Keterangan</th>
                <th>Status Aktif</th>
                <th colspan="3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($diklats as $diklat)
                <tr>
                    <td>{{ $diklat->jenis_diklat }}</td>
                    <td>{{ $diklat->bidang_pelatihan }}</td>
                    <td>{{ $diklat->jenis_kegiatan }}</td>
                    <td>{{ $diklat->model_pelatihan }}</td>
                    <td>{{ $diklat->kode_diklat }}</td>
                    <td>{{ $diklat->kode_profil }}</td>
                    <td>{{ $diklat->nama_diklat }}</td>
                    <td>{{ $diklat->tahun }}</td>
                    <td>{{ $diklat->jenjang }}</td>
                    <td>{{ $diklat->syarat_peserta }}</td>
                    <td>{{ $diklat->syarat_wi }}</td>
                    <td>{{ $diklat->deskripsi }}</td>
                    <td>{{ $diklat->tujuan_diklat }}</td>
                    <td>{{ $diklat->keterangan }}</td>
                    <td>{{ $diklat->status_aktif }}</td>
                    <td>
                        {!! Form::open(['route' => ['diklats.destroy', $diklat->id_diklat], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('diklats.show', [$diklat->id_diklat]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                            <a href="{{ route('diklats.edit', [$diklat->id_diklat]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                            {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>