@extends('layouts.masterpageweb')
@section('title', 'Checkout')
 
@section('content')

<div class="container">
  <br>
  <div class="row">
    <div class="col-md-4">
 <h3 class="text-center">Personal Information</h3>
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
</form>
</div>
<div class="col-md-4">
    <h3>Update Delivery Location</h3>
    <small><b>Note:</b> Your default location and address will be used</small>
    <form method="POST" action="{{route('update-location')}}">
        @csrf
        <div class="form-group">
            <label>Delivery Location</label>
            @php
               $location = App\Delivery::get();
            @endphp
            <select class="form-control" name="location">
                <option selected>--Select Location--</option>
                @if(auth()->user()->delivery_location == null)
                @foreach($location as $loc)
                <option value="{{$loc->id}}" @if(auth()->user()->delivery_location == $loc->id)selected @endif data-toggle="tooltip" data-placement="right" title="{{$loc->description}}">{{$loc->location}}[&#x20A6;{{$loc->cost}}]</option>
                @endforeach
                @else
                @foreach($location as $loc)
                <option value="{{$loc->id}}" @if(auth()->user()->delivery_location == $loc->id)selected @endif data-toggle="tooltip" data-placement="right" title="{{$loc->description}}">{{$loc->location}}[&#x20A6;{{$loc->cost}}]</option>
                @endforeach
                @endif
            </select>
        </div>
        <div class="form-group">
            <label>Address</label>
          <textarea name="address" class="form-control" value="" cols="10" rows="5">{{auth()->user()->address}}</textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-info">Submit</button>
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
      @if(auth()->user()->delivery_location != null)
      <div class="row cart-detail">
        <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
            <p>Delivery Cost</p>
        </div>
        <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
            @php
                $cost = App\Delivery::find(auth()->user()->delivery_location)->cost;  
            @endphp
        <span class="price text-info"> &#x20A6;{{$cost}}</span>
        </div>
        </div>
      @endif
  </div>
  <div class="card-footer">
      <div class="row">
        @php
         if(auth()->user()->delivery_location != null){
             $cost = App\Delivery::find(auth()->user()->delivery_location)->cost;
         }else{
             $cost = 0;
         }  
    @endphp
          <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
            <p>Total: <span class="text-info text-center">&#x20A6; {{ number_format($total + $cost) }}</span></p>
          </div>
      </div>
  </div>
</div>
</div>
  </div>
  <div class="col-md-6 offset-3">
    @if(auth()->user()->delivery_location == null)
    <br>
  <a href="#" class="btn btn-primary btn-lg align-content-center text-center" onclick="alert('Choose Delivery Location before you proceed!');"> Proceed to Payment</a>
  @else
  <br>
  <form action="{{route('order.store')}}" method="post">
    @csrf
  <input type="hidden" name="user_id" value="{{auth()->user()->id}}"/>
  <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary btn-lg align-content-center text-center">
  </form>
  @endif
  </div>
  
</div>
@endsection
@section('js')
 
 
    <script type="text/javascript">
 
        $(".update-location").click(function (e) {
           e.preventDefault();
 
           var ele = $(this);
 
            $.ajax({
               url: '{{ url('update-location') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), location: ele.parents("input").find("#location").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });
 
    </script>
 
@endsection