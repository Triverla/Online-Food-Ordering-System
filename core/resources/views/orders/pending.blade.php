@extends('layouts.masterpageweb')
@section('title', 'Pending Orders')
 
@section('content')
<br>
<div class="container">
    <h2 class="text-center">Orders</h2><nav class="nav nav-pills nav-justified">
        <a class="nav-link" href="{{route('order.index')}}">All Orders</a>
        <a class="nav-link" href="{{route('order.dispatched')}}">Dispatched Orders</a>
        <a class="nav-link active" href="{{route('order.pending')}}">Pending Orders</a>
      </nav>

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
        <td>{{$order->created_at->format('d M, Y h:ia')}}</td>
        <td id="col-{{$order->order_id}}">
            @if($order->status == 0)
            <span class="badge badge-primary">Pending</span>
            @elseif($order->status == 1)
            <span class="badge badge-success">Dispatched</span>
            @else
            <span class="badge badge-danger">Cancelled</span>
        @endif
        </td>
        <td>
        <a class="text-success" title="view order" href="{{route('order.show', [$order->order_id])}}"><i class="fa fa-eye"></i></a></td>
        <td>
            @if($order->checkDispatch($order->order_id))
            <a class="text-danger" id="rw-{{$order->order_id}}" title="cancel dispatch" onclick="dispatch('{{$order->order_id}}')"><i class="fa fa-times"></i></a> 
            @else
            <a class="text-info" title="dispatch order" id="rw-{{$order->order_id}}" onclick="dispatch('{{$order->order_id}}')"><i class="fa fa-truck"></i></a> 
            @endif
        <td><a class="text-danger" href="#"><i class="fa fa-trash"></i></a>
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
@section('js')
<script>
function dispatch(id){

    var data = new FormData();
    data.append('id', id);

    $.ajax({
        url: BASE_URL + '/order/dispatch/'+ id,
        type: "POST",
        timeout: 5000,
        data: data,
        contentType: false,
        cache: false,
        processData: false,
        headers: {'X-CSRF-TOKEN': CSRF},
        success: function(response){
            if (response.code == 200){
                if (response.type == 'dispatch'){
                    $('#col-'+id).html('<span class="badge badge-success">Dispatched</span>');
                    $('td #rw-'+id+' i').removeClass('fa-truck').addClass('fa-times');
                }else{
                    $('#col-'+id).html('<span class="badge badge-primary">Pending</span>');
                    $('td #rw-'+id+' i').removeClass('fa-times').addClass('fa-truck');
                }
            }else{
                $('#errorMessageModal').modal('show');
                $('#errorMessageModal #errors').html('Something went wrong!');
            }
        },
        error: function(){
            $('#errorMessageModal').modal('show');
            $('#errorMessageModal #errors').html('Something went wrong!');
        }
    });
}
</script>

@endsection