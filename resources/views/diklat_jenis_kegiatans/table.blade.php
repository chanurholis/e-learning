<div class="table-responsive">
    <table class="table table-striped" id="diklatJenisKegiatans-table">
        <thead>
            <tr>
                <th>Kode Kegiatan</th>
                <th>Nama Kegiatan</th>
                <th colspan="3">Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($diklatJenisKegiatans as $diklatJenisKegiatan)
            <tr>
                <td>{{ $diklatJenisKegiatan->kode_kegiatan }}</td>
            <td>{{ $diklatJenisKegiatan->nama_kegiatan }}</td>
                <td>
                    {!! Form::open(['route' => ['diklatJenisKegiatans.destroy', $diklatJenisKegiatan->id_kegiatan], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('diklatJenisKegiatans.show', [$diklatJenisKegiatan->id_kegiatan]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('diklatJenisKegiatans.edit', [$diklatJenisKegiatan->id_kegiatan]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Apakah Anda yakin?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>