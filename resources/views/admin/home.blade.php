@extends('admin.layout')

@section('title', 'Admin')

@section('content')
{{-- <div class="container">
    <div class="row">
        <div class="col-sm-4">
            <a href="/admin/showML" class="btn btn-primary">Show ML</a> <br>
        </div>
        <div class="col-sm-4">
            <a href="/admin/showPUBG" class="btn btn-primary">Show PUBG</a> <br>
        </div>
        <div class="col-sm-4">
            <a href="/admin/showValorant" class="btn btn-primary">Show Valorant</a>
        </div>
    </div>
</div> --}}

<h1 class="text-center">Admin</h1>
<br><br><br>
<div class="row text-center">
    <div class="col-sm">
        {{-- <button class="nav-btn">Show ML</button> --}}
        <a href="/admin/showML" class="nav-btn">Show ML</a>
    </div>
    <div class="col-sm">
        <a href="/admin/showPUBG" class="nav-btn">Show PUBG</a>
    </div>
    <div class="col-sm">
        <a href="/admin/showValorant" class="nav-btn">Show Valorant</a>
    </div>
    <div class="col-sm">
        <a href="/admin/showBA" class="nav-btn">Show Brand Ambassador</a>
    </div>
</div>

@endsection