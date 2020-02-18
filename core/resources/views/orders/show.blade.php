@extends('layouts.masterpageweb')
@section('title', 'View Order')
 
@section('content')
<br>
<div class="container">
    <div class="" style="color:green">
    
        <table class="table table-bordered table-striped table-responsive fixed-table-body">
           
        <h4>Order Details<p class="float-right">Status:@if($order[0]->status == 1)
            <span class="badge badge-primary">Dispatched</span>
        @else
        <span class="badge badge-warning">Pending</span>
        @endif
        </p> </h4>

        <table id="cart" class="table table-hover table-condensed">
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
     
                @foreach($order as $details)
     
                    <?php $total += $details->price * $details->quantity ?>
     
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="nomargin">{{ App\Food::find($details->food_id)->name }}</h4>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">&#x20A6;{{ $details->price }}</td>
                        <td data-th="Quantity">
                            <p>{{ $details->quantity}}</p>
                        </td>
                        <td data-th="Subtotal" class="text-center">&#x20A6;{{ $details->price * $details->quantity }}</td>
                    </tr>
               
           
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3" class="hidden-xs"></td>
                <td class="hidden-xs text-center"><strong>Total &#x20A6;{{ number_format($total) }}</strong></td>
            </tr>
            
            </tfoot>
        </table>
    </div>
</div>
@endsection