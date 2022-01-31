@extends('admin.layout')

@section('title', 'Admin')

@section('content')

<h1 class="text-center">Update Poin,  Pilih Cabang</h1>
<br><br><br>
<div class="row text-center">
    <div class="col-sm">
        {{-- <button class="nav-btn">Show ML</button> --}}
        <a href="/poin/ml" class="nav-btn">&nbsp; ML &nbsp;</a>
    </div>
    <div class="col-sm">
        <a href="/poin/pubg" class="nav-btn">&nbsp; PUBG &nbsp;</a>
    </div>
    <div class="col-sm">
        <a href="/poin/valorant" class="nav-btn">&nbsp; Valorant &nbsp;</a>
    </div>
</div>

@endsection