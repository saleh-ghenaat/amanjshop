<?php

namespace App\Http\Controllers\Customer\Profile;

use App\Http\Controllers\Controller;
use App\Models\Market\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        // if(isset(request()->type))
        // {
        //     $orders = auth()->user()->orders()->where('order_status', request()->type)->orderBy('id', 'desc')->Paginate(5);

        // }
        // else{
        //     $orders = auth()->user()->orders()->orderBy('id', 'desc')->Paginate(5);
        // }
        // return view('customer.profile.orders', compact('orders'));
        return view('customer.profile.orders');
    }

    public function show(Order $order)
    {
        return view('customer.profile.order-item', compact('order'));
    }
}
