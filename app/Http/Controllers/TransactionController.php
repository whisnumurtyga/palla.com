<?php

namespace App\Http\Controllers;

use App\Models\DetailOrder;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{

    public function index()
    {

        $orders = Order::where('user_id', Auth::user()->id)->where('status', '!=' , 3)->get();

        return view('transactions/index', compact('orders'), [
            "title" => "Transactions",
            "active" => "transactions",
        ]);
        
    }

    public function detail($id)
    {
        $order = Order::where('id', $id)->first();
        $detail_order = DetailOrder::WHERE('order_id', $order->id)->get();

        return view('transactions/detail', compact('order', 'detail_order'),  [
            "title" => "Transactions",
            "active" => "transactions",
        ]);
    }

}
