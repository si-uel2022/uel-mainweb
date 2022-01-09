@extends('admin.layout')

@section('title', 'Admin')

@section('content')
@if(session('status_accept'))
<div class="alert alert-success" role="alert">
    {{ session('status_accept') }}
</div>
@endif

@if(session('status_reject'))
<div class="alert alert-danger" role="alert">
    {{ session('status_reject') }}
</div>
@endif

<h1>Brand Ambassador</h1><br>

<div class="table-responsive">
    <table id="table" class="display" style="width:100%">
        <thead>
        <tr align="center" style="color: white">
            <th>No</th>
            <th>Nama</th>
            <th>NRP</th>
            <th>Email</th>
            <th>Line</th>
            <th>WhatsApp</th>
            <th>Instagram</th>
            <th>Status</th>
            <th>Download</th>
            <th>Action</th>
            <th>Detail</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($ba as $b)
            <tr align="center">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $b->nama }}</td>
                <td>{{ $b->nrp }}</td>
                <td>{{ $b->email }}</td>
                <td>{{ $b->line }}</td>
                <td>{{ $b->whatsapp }}</td>
                <td>{{ $b->instagram }}</td>
                <td>{{ $b->status }}</td>
                <td>
                    <a href="{{ url('admin/downloadPorto/' . $b->id) }}" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Portofolio</a>
                    <a href="{{ url('admin/downloadBA/' . $b->id) }}" class="btn btn-primary"><i class="fa fa-picture-o"></i> Foto</a>
                </td>
                <td>
                    <a href="{{ url('admin/acceptBA/' . $b->id) }}" class="btn btn-info">Accept <i class="fa fa-check"></i></a>
                    <a href="{{ url('admin/rejectBA/' . $b->id) }}" class="btn btn-danger">Reject <i class="fa fa-close"></i></a>
                </td>
                <td> 
                    <a href="#modal_detail" class="btn btn-primary" data-toggle="modal" onclick="getData({{ $b->id }});">
                        Detail
                    </a> 
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="modal fade" id="modal_detail" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Brand Ambassador</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
            </div>
            <div class="modal-body" id="isi_modal_detail">
                BA
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
			url:'{{ route("admin.showDetailBA") }}',
			data:'_token= <?php echo csrf_token() ?> &id='+id,
			success:function(data) {
				$("#isi_modal_detail").html(data.msg);
			}
		});
    }
</script>
@endsection