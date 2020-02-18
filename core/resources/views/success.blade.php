@extends('layouts.masterpageweb')
@section('title', 'Order Report')
 
@section('content')
<br>
<div class="container">
   
    <div class="col-md-8 offset-2 justify-content-center" style="color:green">
       
        <h2>Order Report</h2>
        <p>Hello {{$data['name']}},</p>
    <p>
        Your order with ID <b class="btn-link">#{{$data['order_id']}}</b> has been sent and is being processed.
        Below is a summary of your order.
    </p>
    <div class="card">
        <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <th>Name</th>
                <th>Data</th>
            </thead>
            <tbody>
                <tr>
                    <td>Name</td>
                <td>{{$data['name']}}</td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>{{$data['phone']}}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{$data['email']}}</td>
                </tr>
                <tr>
                    <td>Delivery Location</td>
                    <td>{{$data['location']}}</td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>{{$data['address']}}</td>
                </tr>
                <tr>
                    <td>Order Date</td>
                    <td>{{$data['date']->format('d F, Y h:ia')}}</td>
                </tr>
            </tbody>
        </table>
        <h4>Order Details</h4>
        <table id="cart" class="table table-sm table-hover table-condensed table-responsive">
            <thead>
            <tr>
                <th style="width:50%">Product</th>
                <th style="width:10%">Price</th>
                <th style="width:8%">Quantity</th>
                <th style="width:32%" class="text-center">Subtotal</th>
            </tr>
            </thead>
            <tbody>
     
            <?php $total = 0 ?>
     
            @if(session('cart'))
                @foreach(session('cart') as $id => $details)
     
                    <?php $total += $details['price'] * $details['quantity'] ?>
     
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="nomargin">{{ $details['name'] }}</h4>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">&#x20A6;{{ $details['price'] }}</td>
                        <td data-th="Quantity">
                            <p>{{ $details['quantity'] }}</p>
                        </td>
                        <td data-th="Subtotal" class="text-center">&#x20A6;{{ $details['price'] * $details['quantity'] }}</td>
                    </tr>
                @endforeach
            @endif
            @php
              $cost = $data['cost'];  
            @endphp
            <tr>
                <td>Delivery Cost</td>
            <td>&#x20A6;{{$cost}}</td>
            <td></td>
            <td>&#x20A6;{{$cost}}</td>
            </tr>
     
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3" class="hidden-xs"></td>
                <td class="hidden-xs text-center"><strong>Total &#x20A6;{{ number_format($total + $cost) }}</strong></td>
            </tr>
            </tfoot>
        </table>
        <p class="text-center"><i><b>Thank you for choosing Puzzo's Restaurant</b><br>
            We'll be glad to have you back</i></p>
    </div>
    </div>
</div>
</div>
@php
  session()->flush();   
@endphp
@endsection