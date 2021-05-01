<div class="table-responsive">
    <table class="table table-striped" id="diklatBidangPelatihans-table">
        <thead>
            <tr>
                <th>Kode Jenis</th>
                <th>Kode Bidang</th>
                <th>Nama Bidang</th>
                <th>Status Aktif</th>
                <th colspan="3">Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($diklatBidangPelatihans as $diklatBidangPelatihan)
            <tr>
                <td>{{ $diklatBidangPelatihan->kode_jenis }}</td>
                <td>{{ $diklatBidangPelatihan->kode_bidang }}</td>
                <td>{{ $diklatBidangPelatihan->nama_bidang }}</td>
                <td>{{ $diklatBidangPelatihan->status_aktif }}</td>
                <td>
                    {!! Form::open(['route' => ['diklatBidangPelatihans.destroy', $diklatBidangPelatihan->id_bidang], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('diklatBidangPelatihans.show', [$diklatBidangPelatihan->id_bidang]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('diklatBidangPelatihans.edit', [$diklatBidangPelatihan->id_bidang]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>