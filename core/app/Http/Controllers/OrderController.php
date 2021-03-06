<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderResponce;
use App\Order;
use App\User;
use App\Food;
use App\Delivery;
use Illuminate\Http\Request;
use Mockery\Exception;
use DB;
use Response;
Use Alert;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminOrderMail;
use App\Mail\ClientOrderMail;

class OrderController extends Controller
{

    public function cart(){
        return view('cart');
    }

    public function checkout(){
        return view('checkout');
    }

    public function addToCart($id){
        {
            $product = Food::find($id);
     
            if(!$product) {
     
                abort(404);
     
            }
     
            $cart = session()->get('cart');
     
            // if cart is empty then this the first product
            if(!$cart) {
     
                $cart = [
                        $id => [
                            "id" => $product->id,
                            "name" => $product->name,
                            "quantity" => 1,
                            "price" => $product->price,
                            //"photo" => $product->pic
                        ]
                ];
     
                session()->put('cart', $cart);
                toast('Product added to cart successfully!','success');
     
                return redirect()->back();
            }
     
            // if cart not empty then check if this product exist then increment quantity
            if(isset($cart[$id])) {
     
                $cart[$id]['quantity']++;
     
                session()->put('cart', $cart);
                toast('Product added to cart successfully!','success');
     
                return redirect()->back();
     
            }
     
            // if item not exist in cart then add to cart with quantity = 1
            $cart[$id] = [
                "id" => $product->id,
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                //"photo" => $product->pic
            ];
     
            session()->put('cart', $cart);
            toast('Product added to cart successfully!','success');
            return redirect()->back();
        }
    }
  
    //Increment Quantity
    public function updatecart($id)
    {
        if($id)
        {
            $cart = session()->get('cart');
 
            $cart[$id]["quantity"]++;
 
            session()->put('cart', $cart);
            toast('Cart Updated successfully!','success');
 
            session()->flash('success', 'Cart updated successfully');
        }
    }

    //Decrement Qty
    public function subQty($id)
    {
        if($id)
        {
            $cart = session()->get('cart');
 
            $cart[$id]["quantity"]--;
 
            session()->put('cart', $cart);
            toast('Cart Updated successfully!','success');
 
            session()->flash('success', 'Cart updated successfully');
        }
    }
 
    public function remove(Request $request)
    {
        if($request->id) {
 
            $cart = session()->get('cart');
 
            if(isset($cart[$request->id])) {
 
                unset($cart[$request->id]);
 
                session()->put('cart', $cart);
            }
            toast('Product removed from cart successfully!','success');
            session()->flash('success', 'Product removed successfully');
        }
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::distinct()->groupBy('order_id')->orderBy('created_at', 'DESC')->paginate(10);
       // $orders = Order::groupBy('order_id')->select('order_id', DB::raw('count(*) as total'))
        //->select('order_id', DB::raw('count(*) as total'))->get();
        return view('orders.index', compact('orders'));
        //return OrderResponce::collection(Order::with(['foods.category','user'])->latest()->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $cart = session()->get('cart');
            $order_id = date('dmyhis');
        foreach($cart as $id => $food){
            $total = $food['price'] * $food['quantity'];
            $order = new Order();
            $order->order_id = $order_id;
            $order->location = auth()->user()->delivery_location;
            $order->address = auth()->user()->address;
            $order->user_id = $request->get('user_id');
            $order->food_id = $food['id'];
            $order->quantity = $food['quantity'];
            $order->price = $food['price'];
            $order->total_money = $total;
            $order->save();
        }
        $data = [
            'name'=> auth()->user()->name,
            'email'=> auth()->user()->email,
            'phone' => auth()->user()->phone,
            'location' => Delivery::find(auth()->user()->delivery_location)->location,
            'address' => auth()->user()->address,
            'cart' => $cart,
            'order_id' => $order_id,
            'cost' => Delivery::find(auth()->user()->delivery_location)->cost,
            'date' => now()
        ];

        Mail::to(auth()->user()->email)->send(New ClientOrderMail($data));
        Mail::to('orders@puzzosrestaurant.com')->send(New AdminOrderMail($data));
         //session()->flush();
        toast('Order Successful!','success');
        return view('success', compact('data')); 
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function show($order_id)
    {
        $order = Order::where('order_id',$order_id)->get();
       // dd($order);
        return view('orders.show',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function dispatch($id){
        $response = array();
        $response['code'] = 400;
        
        $order = Order::where('order_id',$id)->get();
        foreach($order as $ord){
        if($ord->status == 1){
            $ord->status = 0;
            if ($ord->save()){
            $response['code'] = 200;
            $response['type'] = 'cancel';
            toast('Dispatch cancelled!','success');
            }
        }else{
        $ord->status = 1;
        if ($ord->save()){
            $response['code'] = 200;
            $response['type'] = 'dispatch';
            toast('Order Dispatched','success');
        }
        }
    }
        return Response::json($response);
    }

    public function dispatchedOrders(){
        $orders = Order::where('status',1)->paginate(10);
        return view('orders.dispatch',compact('orders'));
    }

    public function pendingOrders(){
        $orders = Order::where('status',0)->paginate(10);
        return view('orders.pending',compact('orders'));
    }
}
