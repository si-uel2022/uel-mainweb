@extends('admin.layout')

@section('title', 'Admin')

@section('content')

    @if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @elseif (session('error'))
    <div class="alert alert-danger">
        {{session('error')}}    
    </div>    
    @endif

    <h1 class="text-center">Update Poin Valorant</h1><br>
{{-- 
    <form action="{{url('poin/simpanpoin_Valorant')}}" enctype="multipart/form-data" method="POST" class="form-input">
    @csrf
        <input type="file" name="inpBracket" class="textbox form-control" required> <br>
        <div class="row text-center">
            <div class="col-sm"></div>
            <div class="col-sm">
                <button type="submit" class="nav-btn button-input">Submit Data</button>
            </div>
            <div class="col-sm"></div>
        </div>
    </form> --}}

    <iframe src="https://challonge.com/uelueluel/module" width="100%" height="500" frameborder="0" scrolling="auto" allowtransparency="true"></iframe>
@endsection