@extends('layouts.app')

@section('content')
<div class="row">
    <div class="panel col-md-6 col-md-offset-3">

        <div class="panel-body text-center">

            <img class="img-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSz_AVMQxFBNdQgrRPFCJIGDsOObDKdbdwSv6KBNZCzVEqkSBIw">
<h1>{{$user->username}}</h1>
            <h5> {{$user->email}}</h5>
            <h5> {{$user->dob}}</h5>
            <button class="btn btn-sm btn-success">Follow</button>
        </div>

    </div>
</div>
    @endsection