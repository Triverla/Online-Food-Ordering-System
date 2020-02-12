@extends('layouts.masterpageweb')
@section('title','Menu')

@section('content')
<style>

.total-header-section{
    border-bottom:1px solid #d2d2d2;
}
.total-section p{
    margin-bottom:20px;
}
.cart-detail{
    padding:15px 0px;
}
.cart-detail-img img{
    width:100%;
    height:100%;
    padding-left:15px;
}
.cart-detail-product p{
    margin:0px;
    color:#000;
    font-weight:500;
}
.cart-detail .price{
    font-size:12px;
    margin-right:10px;
    font-weight:500;
}
.cart-detail .count{
    color:#C2C2DC;
}
.checkout{
    border-top:1px solid #d2d2d2;
    padding-top: 15px;
}
.checkout .btn-primary{
    border-radius:50px;
    height:50px;
}
.dropdown-menu:before{
    content: " ";
    position:absolute;
    top:-20px;
    right:50px;
    border:10px solid transparent;
    border-bottom-color:#fff;
}
 
.thumbnail {
    position: relative;
    padding: 0px;
    margin-bottom: 20px;
}
 
.thumbnail img {
    width: 100%;
}
 
.thumbnail .caption{
    margin: 7px;
}
 
.page {
    margin-top: 50px;
}
 
.btn-holder{
    text-align: center;
}
 
.table>tbody>tr>td, .table>tfoot>tr>td{
    vertical-align: middle;
}
@media screen and (max-width: 600px) {
    table#cart tbody td .form-control{
        width:20%;
        display: inline !important;
    }
    .actions .btn{
        width:36%;
        margin:1.5em 0;
    }
 
    .actions .btn-info{
        float:left;
    }
    .actions .btn-danger{
        float:right;
    }
 
    table#cart thead { display: none; }
    table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
    table#cart tbody tr td:first-child { background: #333; color: #fff; }
    table#cart tbody td:before {
        content: attr(data-th); font-weight: bold;
        display: inline-block; width: 8rem;
    }
 
 
 
    table#cart tfoot td{display:block; }
    table#cart tfoot td .btn{display:block;}
 
}
      </style>
<br>
<div class="container" id="menu">
    <div class="row">
        <div class="col-md-8">
            <h3>Puzzo's Menu</h3>
            
                <div class="accordion" id="accordionExample">
                  
                    @foreach($categories as $category)
                    @php
                    $foodcount = \App\Food::where('category_id',$category->id)->count(); 
                @endphp
                    <div class="card">
                    <div class="card-header" id="heading-{{$category->id}}">
                        <h2 class="mb-0">
                          <button class="btn btn-link h4" type="button" data-toggle="collapse" data-target="#collapse-{{$category->id}}" aria-expanded="true" aria-controls="collapse-{{$category->id}}">
                            {{$category->name}}&nbsp;<i class="fa fa-angle-down"></i>
                          </button>
                          <button class="btn btn-primary btn-sm float-right" type="button" data-toggle="collapse" data-target="#collapse-{{$category->id}}" aria-expanded="true" aria-controls="collapse-{{$category->id}}">
                            {{$foodcount}}
                          </button>
                        </h2>
                      </div>
                  
                      <div id="collapse-{{$category->id}}" class="collapse" aria-labelledby="heading-{{$category->id}}" data-parent="#accordionExample">
                        <div class="card-body">
                            <table class="table table-striped table-responsive">
                           
                                <tbody>
                                    @php
                                        $foods = \App\Food::where('category_id',$category->id)->paginate(10); 
                                    @endphp
                                    @if(count($foods) > 0)
                                    @foreach($foods as $food)
                                    <tr>  
                                        <td><img src="{{asset('storage'.$food->photos[0]->path)}}" width="100" height="auto"/></td>
                                    <td>{{$food->name}}
                                    <br><small>{{$food->description}}</small></td>
                                    <td>&#x20A6;{{$food->price}}</td>
                                    <td><a class="btn btn-info" href="{{route('addtocart',$food->id)}}"><i class="fa fa-plus-circle">&nbsp;Add</i></a>   
                                    </tr>
                                    @endforeach
                                    @else
                                    <p class="text-center"><i class="fa fa-info-o"></i> No Food Found under this category</p>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
            
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                Mini Cart
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
                                <div class="col-lg-6 col-sm-6 col-6 cart-detail-img">
                                    <p>{{ $details['name'] }}</p>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-6 cart-detail-product">
                                    <span class="price text-info"> &#x20A6;{{ $details['price'] }}</span><br>
                                     <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                            <a href="{{ url('cart') }}" class="btn btn-primary btn-block">View Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection
