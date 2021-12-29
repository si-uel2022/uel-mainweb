@extends('admin.layout')

@section('title', 'Admin')

@section('content')
<table id="table" class="display" style="width:100%">
    <thead>
    <tr>
        <th>No</th>
        <th>Nama Tim</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($tim as $t)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $t->nama }}</td>
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