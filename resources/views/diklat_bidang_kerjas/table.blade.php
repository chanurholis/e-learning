<div class="table-responsive-sm">
    <table class="table table-striped" id="diklatBidangKerjas-table">
        <thead>
            <tr>
                <th>Kode Jenis</th>
                <th>Kode Bidang</th>
                <th>Kode Kerja</th>
                <th>Nama Kerja</th>
                <th>Status Aktif</th>
                <th colspan="3">Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($diklatBidangKerjas as $diklatBidangKerja)
            <tr>
                <td>{{ $diklatBidangKerja->kode_jenis }}</td>
                <td>{{ $diklatBidangKerja->kode_bidang }}</td>
                <td>{{ $diklatBidangKerja->kode_kerja }}</td>
                <td>{{ $diklatBidangKerja->nama_kerja }}</td>
                <td>{{ $diklatBidangKerja->status_aktif }}</td>
                <td>
                    {!! Form::open(['route' => ['diklatBidangKerjas.destroy', $diklatBidangKerja->id_kerja], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('diklatBidangKerjas.show', [$diklatBidangKerja->id_kerja]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('diklatBidangKerjas.edit', [$diklatBidangKerja->id_kerja]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Apakah Anda yakin?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>