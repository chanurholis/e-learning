<div class="table-responsive">
    <table class="table table-striped" id="diklatJenis-table">
        <thead>
            <tr>
                <th>Kode Jenis</th>
                <th>Nama Jenis</th>
                <th>Status Aktif</th>
                <th colspan="3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($diklatJenis as $diklatJenis)
                <tr>
                    <td>{{ $diklatJenis->kode_jenis }}</td>
                    <td>{{ $diklatJenis->nama_jenis }}</td>
                    <td>{{ $diklatJenis->status_aktif }}</td>
                    <td>
                        {!! Form::open(['route' => ['diklatJenis.destroy', $diklatJenis->id_jenis], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('diklatJenis.show', [$diklatJenis->id_jenis]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                            <a href="{{ route('diklatJenis.edit', [$diklatJenis->id_jenis]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                            {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Apakah Anda yakin?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>