@extends('admin.layout')

@section('title', 'Admin')

@section('content')
<div class="table-responsive">
    <table id="table" class="display" style="width:100%">
        <thead>
        <tr align="center" style="color: white">
            <th>No</th>
            <th>Nama</th>
            <th>NRP</th>
            <th>Fakultas</th>
            <th>Angkatan</th>
            <th>ID Line</th>
            <th>No WA</th>
            <th>Instagram</th>
            <th>Domisili</th>
            <th>Sebagai</th>
            <th>Detail Player</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($player as $p)
            <tr align="center">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->nrp }}</td>
                <td>{{ $p->fakultas }}</td>
                <td>{{ $p->angkatan }}</td>
                <td>{{ $p->id_line }}</td>
                <td>{{ $p->nomor }}</td>
                <td>{{ $p->instagram }}</td>
                <td>{{ $p->domisili }}</td>
                <td>{{ $p->sebagai }}</td>
                <td>
                    <a href="#modal_player" class="btn btn-primary" data-toggle="modal" onclick="getData({{ $p->id }});">
                        Detail Player
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="modal fade" id="modal_player" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Player</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
            </div>
            <div class="modal-body" id="isi_modal_player">
                Player
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

@endsection

@section('scripts')
<script>
    $(document).ready( function () {
        $('#table').DataTable();
    });

    function getData(id) 
    {
        $.ajax({
			type:'POST',
			url:'{{ route("admin.showDetailPUBG") }}',
			data:'_token= <?php echo csrf_token() ?> &id='+id,
			success:function(data) {
				$("#isi_modal_player").html(data.msg);
			}
		});
    }
</script>
@endsection