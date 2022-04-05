<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Stevebauman\Location\Facades\Location;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::latest()->get();
        $categories = Category::inRandomOrder()->take(3)->get();
        $orderItems = OrderItem::where('session_id', Session::getId())
                                    ->where('status', 'pending')->get();
        
                                   // dd($items);
        $total = 0;

        foreach ($orderItems as $key => $orderItem) {
            $total = $total + $orderItem->item_price;
        }

        // static ip for testing purpose : '162.159.24.227'
        $clientIP = \Request::getClientIp(true);
        $address = Location::get('162.159.24.227');

        $address = $address->toArray();
        return view('orders.index', compact('items', 'categories', 'orderItems', 'total', 'address'));

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $orderItems = OrderItem::where('session_id', '=', Session::getId())->latest()->get();

        $total = 0;
        foreach ($orderItems as $key => $orderItem) {
            $total = $total + $orderItem->item_price;
            $orderItem->status = 'ordered';
            $orderItem->save();
        }

        $order = new Order();
        $order->user_address = $request->user_address;
        $order->session_id = Session::getId();
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->total_price = $total;
        $order->save();

        return redirect()->route('order.index')->with('message', 'Order Places Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
