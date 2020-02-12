<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Delivery;

class DeliveryController extends Controller
{
public function index(){
    $deliveries = Delivery::get();
    return view('delivery.index', compact('deliveries'));
}

    public function create(){
        return view('delivery.create');
    }

    public function store(Request $request){
        $del = new Delivery();
        $del->location = $request->input('location');
        $del->cost = $request->input('cost');
        $del->description = $request->input('description');
        if($del->save())
            return redirect()->route('del.index')->with('success','Delivery Cost Added Successfully!');
        return redirect()->back();
    }

    public function checkout(Request $request){
        $location = $request->input('location');
        $address = $request->input('address');
        $del = Delivery::findorFail($location);
        $cost = $del->cost;
        session()->put('location', $location);
        session()->put('deliverycost', $cost);
        session()->put('deliveryaddress', $address);
        return redirect()->back();
    }
}
