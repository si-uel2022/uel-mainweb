@extends('admin.layout')

@section('title', 'Admin')

@section('content')
<table id="table" class="display" style="width:100%">
    <thead>
    <tr>
        <th>Nama</th>
        <th>NRP</th>
        <th>Angkatan</th>
        <th>ID Line</th>
        <th>No WA</th>
        <th>Instagram</th>
        <th>Nickname</th>
        <th>ID Server</th>
        <th>Hero Favorit</th>
        <th>Role</th>
        <th>Device</th>
        <th>Sebagai</th>
        <th>Domisili</th>
        <th>Vaksin</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($player as $p)
        <tr>
            <td>{{ $p->nama }}</td>
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