@extends('layouts.masterpageweb')
@section('title', 'Delivery Admin')
 
@section('content')

<div class="container">
  <div class="jumbotron">
    <h1>Delivery Settings</h1>
  </div>
    <div class="col-md-8 offset-2">
 <h3 class="text-center">Add Delivery Cost</h3>
    <form method="POST" action="{{route('del.store')}}">
    @csrf
    <div class="form-group">
        <label>Location</label>
        <input type="text" name="location" class="form-control" placeholder="Eg. Wuse II">
    </div>
    <div class="form-group">
        <label>Cost</label>
    <input type="number" name="cost" class="form-control">
    </div>
    <div class="form-group">
        <label>Description</label>
        <input type="text" name="description" class="form-control">
    </div>
    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-primary">Add</button>
    </div>
</form>
</div>
</div>
@endsection