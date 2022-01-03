@extends('admin.layout')

@section('title', 'Admin')

@section('content')
<div class="container">
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
</div>
    
    
    
@endsection