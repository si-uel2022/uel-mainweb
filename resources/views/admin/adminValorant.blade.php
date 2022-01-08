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

<h1>Tim Valorant</h1><br>

<div class="table-responsive">
    <table id="table" class="display" style="width:100%">
        <thead>
        <tr align="center" style="color: white">
            <th>No</th>
            <th>Nama Tim</th>
            <th>Status</th>
            <th>List Player</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($tim as $t)
            <tr align="center">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $t->nama }}</td>
                <td>{{ $t->status }}</td>
                <td> <a href="{{ route('admin.showPlayerValorant',$t->id) }}">Show</a> </td>
                <td> 
                    <a href="{{ url('admin/acceptTimValorant/' . $t->id) }}" class="btn btn-info">Accept</a>
                    <a href="{{ url('admin/rejectTimValorant/' . $t->id) }}" class="btn btn-danger">Reject</a> 
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready( function () {
        $('#table').DataTable();
    });
</script>
@endsection