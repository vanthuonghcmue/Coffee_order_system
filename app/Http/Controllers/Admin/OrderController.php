<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use App\Models\Order_item;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Topping;
use App\Models\Toppingoption;
use App\Models\size;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    public function Index()
    {
        $orders = Order::all();
        $order_items = Order_item::all();
        $users = User::all();
        return view('admin.order.index', compact('orders', 'order_items', 'users'));
    }
    public function ShowDetail($id)
    {

        $order_items = Order_item::where('id_order', $id)->get();

        return view('admin.order.orderdetail', compact('order_items'));
    }

    public function store(Request $request)
    {
        $order = new Order;
        $order->id_user = Auth::user()->id;
        $order->status = 0;
        $id_order = mt_rand();
        $price = 0;
        if (session('cart')) {
            foreach (session('cart') as $id => $product) {
                var_dump($product['name']);
                $order_item = new Order_item;
                $order_item->id_order = $id_order;
                $order_item->product_id = $product['id'];
                $order_item->product_name = $product['name'];
                $order_item->quantily = $product['quantity'];
                $order_item->price = $product['price'];
                $order_item->size = $product['size'];
                $order_item->topping = $product['topping'];
                $order_item->save();

                $price_product = Size::where('product_name', $product['slug'])->where('Size', $product['size'])->first()->Price * $product['quantity'];
                $discount = Product::where('id', $product['id'])->first()->discount;
                $price_topping =  $product['topping'] ? Topping::where('Idtopping', $product['topping'])->first()->price : 0;
                $discount > 0 ? $price += $price_product - $price_product * $discount / 100 + $price_topping : $price += $price_product + $price_topping;
            }
        }

        $order->id = $id_order;
        $order->total_price = $price;
        $order->save();

        $cart = session()->get('cart');
        if ($cart) {
            session()->forget('cart');
        }
        return redirect()->route('user.products.showProduct')->with('success', "Removed from Cart");
    }
}
