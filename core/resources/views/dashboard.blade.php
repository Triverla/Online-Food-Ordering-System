@extends('layouts.masterpageweb')
@section('title','Menu')

@section('content')
<br>
<div class="jumbotron">
    <h1>Administrator Dashboard</h1>
</div>
<div class="container">
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                Total Categories: &nbsp;<span class="h2" >{{$categorycount}}</span>
            </div>
            
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                Total Food: &nbsp;<span class="h2" >{{$foodcount}}</span>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                Orders: 
            </div>
        </div>
    </div>
</div>
</div>

@endsection
