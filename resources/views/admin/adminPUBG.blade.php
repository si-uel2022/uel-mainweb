@extends('admin.layout')

@section('title', 'Admin')

@section('content')
<table id="table" class="display" style="width:100%">
    <thead>
    <tr align="center">
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
            <td> <a href="{{ route('admin.showPlayerML',$t->id) }}">Show</a> </td>
            <td> 
                <a href="{{ url('admin/acceptTim/' . $t->id) }}" class="btn btn-info">Accept</a>
                <a href="{{ url('admin/rejectTim/' . $t->id) }}" class="btn btn-danger">Reject</a> 
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

@section('scripts')
<script>
    $(document).ready( function () {
        $('#table').DataTable();
    });
</script>
@endsection