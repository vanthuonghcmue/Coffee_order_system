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
use App\Models\Topping;
use App\Models\Toppingoption;
use App\Models\size;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    public function Index()
    {
        $orders = Order::all();
        $order_items = Order_items::all();
        $users = User::all();
        return view('admin.order.index', compact('orders', 'order_items', 'users'));
    }

    public function store(Request $request){
        $order = new Order;
        $order->id_user = Auth::admin()->id;
        $order->status =0;
        $toppings = Topping::all();
        $toppingoptions = Toppingoption::all();
        $price= 0;
        if (session('cart')){
            foreach (session('cart') as $id => $product){
                $price_product = Size::where('product_name',$product['slug'])->where( 'Size', $product['size'])->first()->Price * $product['quantity'];
                $discount = Product::where('id',$product['id'])->first()->discount;
                $price_topping =  $product['topping'] ? Topping::where('Idtopping', $product['topping'] )->first()->price : 0;
                $discount > 0 ? $price+=$price_product-$price_product*$discount/100+$price_topping :$price+=$price_product + $price_topping;
                
            }
        }
        $order->total_price =$price;
        $order->save();
    }
}
