<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\DetailOrder;
use App\Models\Warehouse;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;




class OrderController extends Controller
{
    public function order(Request $request, $id)
    {
        $warehouse = Warehouse::where('id', $id)->first();  // Ambil wareheose yg sesuai
        $date = Carbon::now();  // Carbon laravel

        // Validasi ketersediaan Stok
        if($request->jumlah_pesan > $warehouse->stock)
        {
            return redirect('/warehouses/'.$warehouse->slug);
        }

        // Cek validasi
        $checkOrder = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();

        if(empty($checkOrder))
        {
                    // Simpan ke database Order
        $order = new Order;
        $order->user_id = Auth::user()->id;
        $order->date = $date;
        $order->status = 0;  // belum bayar
        $order->total_price = 0;
        $order->save();
        }


        // Simpan ke database DetailOrder
        $new_order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();

        // Check detail pesanan
        $detail_orderCheck = DetailOrder::where('warehouse_id', $warehouse->id)->where('order_id', $new_order->id)->first();

        if (empty($detail_orderCheck)) {
            $detail_order = new DetailOrder;
            $detail_order->warehouse_id = $warehouse->id;
            $detail_order->order_id = $new_order->id;
            $detail_order->total = $request->jumlah_pesan;
            $detail_order->total_pay = $warehouse->harga * $request->jumlah_pesan;
            $detail_order->save();
        } else {
            $detail_order = DetailOrder::where('warehouse_id', $warehouse->id)->where('order_id', $new_order->id)->first();
            $detail_order->total = $request->jumlah_pesan + $detail_order->total;

            // harga baru
            $newTotal_orderDetail = $warehouse->harga * $request->jumlah_pesan;
            $detail_order->total_pay = $detail_order->total_pay + $newTotal_orderDetail;
            $detail_order->update();
        }

        // Total order
        $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();

        $order->total_price = $order->total_price + $warehouse->harga * $request->jumlah_pesan;
        $order->update();

        Alert::success('Pesanan berhasil ditambahkan');
        return redirect('/checkout');

    }

    public function checkout()
    {
        $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $user = User::where('id', Auth::user()->id)->first();
        if (!empty($order)) {
            $detail_order = DetailOrder::where('order_id', $order->id)->get();
                    $user = User::where('id', Auth::user()->id)->first();
            return view('order/checkout', compact('user', 'order', 'detail_order'), [
                'title' => 'Checkout',
                'active' => 'checkout',
            ]);
        }

        return view('order/checkout', [
            'title' => 'Checkout',
            'active' => 'checkout',
        ]);

    }

    public function delete($id)
    {
        $detail_order = DetailOrder::where('id', $id)->first();

        $order = Order::where('id', $detail_order->order_id)->first();
        $order->total_price = $order->total_price - $detail_order->total_pay;
        $order->update();

        $detail_order->delete();

        Alert::error('Pesanan telah dihapus', 'Hapus');
        return redirect('/checkout');
    }

    public function confirm()
    {
        $user = User::where('id', Auth::user()->id)->first();

        if(empty($user->address && $user->phone))
        {
            Alert::error('Error', 'Phone number and address required');
            return redirect('/profile');
        }

        $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $order_id = $order->id;
        $order->status = 1;
        $order->update();

        $detail_order = DetailOrder::where('order_id', $order_id)->get();
        foreach ($detail_order as $dOrder) {
            $warehouse = Warehouse::where('id', $dOrder->warehouse_id)->first();
            $warehouse->stock = $warehouse->stock - $dOrder->total;
            $warehouse->update();
        }

        Alert::success('Checkout berhasil', 'Success');
        return redirect('/transactions');
    }

}
