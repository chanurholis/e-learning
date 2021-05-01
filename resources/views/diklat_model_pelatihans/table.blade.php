<div class="table-responsive-sm">
    <table class="table table-striped" id="diklatModelPelatihans-table">
        <thead>
            <tr>
                <th>Kode Model</th>
                <th>Nama Model</th>
                <th colspan="3">Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($diklatModelPelatihans as $diklatModelPelatihan)
            <tr>
                <td>{{ $diklatModelPelatihan->kode_model }}</td>
            <td>{{ $diklatModelPelatihan->nama_model }}</td>
                <td>
                    {!! Form::open(['route' => ['diklatModelPelatihans.destroy', $diklatModelPelatihan->id_model], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('diklatModelPelatihans.show', [$diklatModelPelatihan->id_model]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('diklatModelPelatihans.edit', [$diklatModelPelatihan->id_model]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Apakah Anda yakin?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>