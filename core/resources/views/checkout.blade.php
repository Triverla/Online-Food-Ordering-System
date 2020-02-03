@extends('layouts.masterpageweb')
@section('title', 'Checkout')
 
@section('content')

<div class="container">
  <div class="jumbotron">
    <h1>Checkout</h1>
  </div>
  <div class="row">
    <div class="col-md-8">
 <h3 class="text-center">Your Information</h3>
    <form method="POST" action="">
    @csrf
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="{{auth()->user()->name}}" readonly>
    </div>
    <div class="form-group">
        <label>Email</label>
    <input type="email" name="email" value="{{auth()->user()->email}}" class="form-control" readonly>
    </div>
    <div class="form-group">
        <label>Phone Number</label>
        <input type="text" name="phone" class="form-control" value="{{auth()->user()->phone}}" readonly>
    </div>
    <div class="form-group">
        <label>Address</label>
      <textarea name="address" class="form-control" value="" cols="10" rows="5" readonly>{{auth()->user()->address}}</textarea>
    </div>
</form>
</div>
<div class="col-md-4">
<h4><a class="btn btn-link" href="{{route('cart')}}"><i class="fa fa-angle-left"></i> Return to Cart</a></h4>
  <div class="card">
  <div class="card-header">
  Ordered Items
  </div>
  <div class="card-body">
      <div class="row total-header-section">
          <div class="col-lg-6 col-sm-6 col-6">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
          </div>

          <?php $total = 0 ?>
          @foreach((array) session('cart') as $id => $details)
              <?php $total += $details['price'] * $details['quantity'] ?>
          @endforeach

          <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
              <p>Total: <span class="text-info">&#x20A6; {{ $total }}</span></p>
          </div>
      </div>

      @if(session('cart'))
          @foreach(session('cart') as $id => $details)
              <div class="row cart-detail">
                  <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                      <p>{{ $details['name'] }}</p>
                  </div>
                  <div class="col-lg-4 col-sm-4 col-4 cart-detail-product">
                      <span class="price text-info"> &#x20A6;{{ $details['price'] }}</span><br>
                       <span class="count"> Qty:{{ $details['quantity'] }}</span>
                  </div>
                  <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                    <p>&#x20A6;{{ $details['price'] * $details['quantity'] }}</p>
                </div>
              </div>
          @endforeach
      @endif
  </div>
  <div class="card-footer">
      <div class="row">
          <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
            <p>Total: <span class="text-info text-center">&#x20A6; {{ number_format($total) }}</span></p>
          </div>
      </div>
  </div>
</div>
</div>
  </div>
  <div class="col-md-6 offset-3">
  <a href="#" class="btn btn-primary btn-lg align-content-center text-center"><i class="fa fa-cc-visa"></i> Proceed to Payment</a>
  </div>
</div>
@endsection