<html>
    <head>
        <style>
            table {
        border-collapse: collapse;
        border-spacing: 0;
        text-align: center;
    }

    .table>thead>tr>th {
        vertical-align: bottom;
        border-bottom: 2px solid #dddddd;
    }

    .table>thead>tr>th,
    .table>tbody>tr>th,
    .table>tfoot>tr>th,
    .table>thead>tr>td,
    .table>tbody>tr>td,
    .table>tfoot>tr>td {
        padding: 5px;
        line-height: 1.42857143;
        vertical-align: top;
        border-top: 1px solid #F0F0F0;
        border: 1px solid black;
        text-align: center;
    }

    .xcrud-th th {

        background: #efefef;
        white-space: nowrap;
        font-size: 12px;
        font-weight: bold;

    }

    th {
        text-align: left;
    }

    .btn-warning {
        color: #ffffff;
        background-color: #fbb450;
        border-color: #faa937;
    }

    .btn-xcrud,
    .btn-group-sm>.btn {

        padding: 0px 5px;
        font-size: 12px;
        line-height: 1.5;
        -webkit-border-radius: 0;
        border-radius: 0;

    }

    .btn-danger {

        color: #ffffff;
        background-color: #ee5f5b;
        border-color: #ec4844;

    }

    .btn-warning {

        color: #ffffff;
        background-color: #fbb450;
        border-color: #faa937;

    }

    .btn-danger {

        color: #ffffff;
        background-color: #ee5f5b;
        border-color: #ec4844;

    }

    .pull-left {
        padding-right: 3px;
    }

    .table {
        width: 100%;
        margin-bottom: 1rem;
        background-color: transparent
    }

    .table td,
    .table th {
        padding: .75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6
    }

    .table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid #dee2e6
    }

    .table tbody+tbody {
        border-top: 2px solid #dee2e6
    }

    .table .table {
        background-color: #f8fafc
    }

    .table-sm td,
    .table-sm th {
        padding: .3rem
    }

    .table-bordered,
    .table-bordered td,
    .table-bordered th {
        border: 1px solid #dee2e6
    }

    .table-bordered thead td,
    .table-bordered thead th {
        border-bottom-width: 2px
    }

    .table-borderless tbody+tbody,
    .table-borderless td,
    .table-borderless th,
    .table-borderless thead th {
        border: 0
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(0, 0, 0, .05)
    }

    .table-hover tbody tr:hover {
        background-color: rgba(0, 0, 0, .075)
    }

    .table-primary,
    .table-primary>td,
    .table-primary>th {
        background-color: #c6e0f5
    }

    .table-hover .table-primary:hover,
    .table-hover .table-primary:hover>td,
    .table-hover .table-primary:hover>th {
        background-color: #b0d4f1
    }

    .table-secondary,
    .table-secondary>td,
    .table-secondary>th {
        background-color: #d6d8db
    }

    .table-hover .table-secondary:hover,
    .table-hover .table-secondary:hover>td,
    .table-hover .table-secondary:hover>th {
        background-color: #c8cbcf
    }

    .table-success,
    .table-success>td,
    .table-success>th {
        background-color: #c7eed8
    }

    .table-hover .table-success:hover,
    .table-hover .table-success:hover>td,
    .table-hover .table-success:hover>th {
        background-color: #b3e8ca
    }

    .table-info,
    .table-info>td,
    .table-info>th {
        background-color: #d6e9f9
    }

    .table-hover .table-info:hover,
    .table-hover .table-info:hover>td,
    .table-hover .table-info:hover>th {
        background-color: #c0ddf6
    }

    .table-warning,
    .table-warning>td,
    .table-warning>th {
        background-color: #fffacc
    }

    .table-hover .table-warning:hover,
    .table-hover .table-warning:hover>td,
    .table-hover .table-warning:hover>th {
        background-color: #fff8b3
    }

    .table-danger,
    .table-danger>td,
    .table-danger>th {
        background-color: #f7c6c5
    }

    .table-hover .table-danger:hover,
    .table-hover .table-danger:hover>td,
    .table-hover .table-danger:hover>th {
        background-color: #f4b0af
    }

    .table-light,
    .table-light>td,
    .table-light>th {
        background-color: #fdfdfe
    }

    .table-hover .table-light:hover,
    .table-hover .table-light:hover>td,
    .table-hover .table-light:hover>th {
        background-color: #ececf6
    }

    .table-dark,
    .table-dark>td,
    .table-dark>th {
        background-color: #c6c8ca
    }

    .table-hover .table-dark:hover,
    .table-hover .table-dark:hover>td,
    .table-hover .table-dark:hover>th {
        background-color: #b9bbbe
    }

    .table-active,
    .table-active>td,
    .table-active>th,
    .table-hover .table-active:hover,
    .table-hover .table-active:hover>td,
    .table-hover .table-active:hover>th {
        background-color: rgba(0, 0, 0, .075)
    }

    .table .thead-dark th {
        color: #f8fafc;
        background-color: #212529;
        border-color: #32383e
    }

    .table .thead-light th {
        color: #495057;
        background-color: #e9ecef;
        border-color: #dee2e6
    }

    .table-dark {
        color: #f8fafc;
        background-color: #212529
    }

    .table-dark td,
    .table-dark th,
    .table-dark thead th {
        border-color: #32383e
    }

    .table-dark.table-bordered {
        border: 0
    }

    .table-dark.table-striped tbody tr:nth-of-type(odd) {
        background-color: hsla(0, 0%, 100%, .05)
    }

    .table-dark.table-hover tbody tr:hover {
        background-color: hsla(0, 0%, 100%, .075)
    }

    @media (max-width:575.98px) {
        .table-responsive-sm {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            -ms-overflow-style: -ms-autohiding-scrollbar
        }

        .table-responsive-sm>.table-bordered {
            border: 0
        }
    }

    @media (max-width:767.98px) {
        .table-responsive-md {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            -ms-overflow-style: -ms-autohiding-scrollbar
        }

        .table-responsive-md>.table-bordered {
            border: 0
        }
    }

    @media (max-width:991.98px) {
        .table-responsive-lg {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            -ms-overflow-style: -ms-autohiding-scrollbar
        }

        .table-responsive-lg>.table-bordered {
            border: 0
        }
    }

    @media (max-width:1199.98px) {
        .table-responsive-xl {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            -ms-overflow-style: -ms-autohiding-scrollbar
        }

        .table-responsive-xl>.table-bordered {
            border: 0
        }
    }

    .table-responsive {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar
    }

    .table-responsive>.table-bordered {
        border: 0
    }
            </style>
    </head>
    <body>
        <div class="col-md-8 offset-2 justify-content-center">
       
            <h2>Order Report</h2>
            <p>Hello {{$data['name']}},</p>
        <p>
            Your order with ID <b class="btn-link">#{{$data['order_id']}}</b> has been sent and is being processed.
            Below is a summary of your order.
        </p>
        <div class="card">
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
    </body>
</html>