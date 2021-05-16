<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use App\Models\Order_items;
use Illuminate\Support\Str;
use App\Models\User;


class OrderController extends Controller
{
    public function Index()
    {
        $orders = Order::all();
        $order_items = Order_items::all();
        $users = User::all();
        return view('admin.order.index', compact('orders', 'order_items', 'users'));
    }
    public function ShowDetail($id)
    {

        $order_items = Order_items::where('id_order', $id)->get();
        // die($order_items);

        return view('admin.order.orderdetail', compact('order_items'));
    }
}
