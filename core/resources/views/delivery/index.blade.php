@extends('layouts.masterpageweb')
@section('title', 'Delivery Costs')
 
@section('content')

<div class="container">
  <div class="jumbotron">
    <h1>Delivery Costs</h1>
  </div>
    <div class="col-md-8 offset-2">
 <table class="table table-hover" style="color:black">
     <thead>
         <th>ID</th>
         <th>Location</th>
         <th>Cost</th>
         <th>Description</th>
     </thead>
     <tbody>
        @foreach($deliveries as $delivery)
         <tr>
         <td>{{$delivery->id}}</td>
             <td>{{$delivery->location}}</td>
             <td>{{$delivery->cost}}</td>
             <td>{{$delivery->description}}</td>
         </tr>
         @endforeach
     </tbody>
 </table>
</div>
</div>
@endsection