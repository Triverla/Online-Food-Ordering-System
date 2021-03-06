@extends('layouts.masterpageweb')
@section('title', 'My Account')
 
@section('content')
<br>
<div class="container">
    <div class="col-md-6 offset-3">
 <h3 class="text-center">Your Information</h3>
    <form method="POST" action="">
    @csrf
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="{{auth()->user()->name}}">
    </div>
    <div class="form-group">
        <label>Email</label>
    <input type="email" name="email" value="{{auth()->user()->email}}" class="form-control">
    </div>
    <div class="form-group">
        <label>Phone Number</label>
        <input type="text" name="phone" class="form-control" value="{{auth()->user()->phone}}">
    </div>
    <div class="form-group">
        <label>Address</label>
      <textarea name="address" class="form-control" value="" cols="10" rows="5">{{auth()->user()->address}}</textarea>
    </div>
    <div class="form-group">
     <input type="submit" name="submit" value="Update" class="btn btn-primary"/>
    </div>
</form>
</div>
<h3>Order History</h3>
<table class="table table-hover table-striped" style="color: black">
    <thead>
        <th>ORDER_ID</th>
        <th>Products Ordered</th>
        <th>Total</th>
        <th>Location</th>
        <th>Address</th>
        <th>Ordered By</th>
        <th>Phone</th>
        <th>Date</th>
        <th>Status</th>
        <th colspan="2">Actions</th>
    </thead>
    @if($orders)
    @foreach($orders as $order)
    @php
       $productsum = App\Order::where('order_id',$order->order_id)->sum('total_money');
       $productcount = App\Order::where('order_id',$order->order_id)->count();

    @endphp
    <tr>
        <td>{{$order->order_id}}</td>
        <td>{{$productcount}}</td>
        <td>&#x20A6;{{number_format($productsum)}}</td>
        <td>{{App\Delivery::find($order->location)->location}}</td>
        <td>{{$order->address}}</td>
        <td>{{App\User::find($order->user_id)->name}}</td>
        <td>{{App\User::find($order->user_id)->phone}}</td>
        <td>{{$order->created_at->format('F M, Y h:ia')}}</td>
        <td>
            @if($order->status == 0)
            <span class="badge badge-primary">Pending</span>
            @elseif($order->status == 1)
            <span class="badge badge-success">Dispatched</span>
            @else
            <span class="badge badge-danger">Cancelled</span>
        @endif
        </td>
        <td>
        <a class="btn btn-primary btn-sm" href="{{route('order.show', [$order->order_id])}}"><i class="fa fa-eye"></i></a></td>
            <td><a class="btn btn-danger btn-sm" href="#"><i class="fa fa-trash"></i></a>
        </td>
    </tr>
    @endforeach
    @else
    <tr>
        <td colspan="8"><p class="text-center">Products not found</p>
    </tr>
    @endif
</table>
{{$orders->links()}}
</div>
@endsection