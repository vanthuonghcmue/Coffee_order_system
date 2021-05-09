<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Size;
use App\Models\Toppingoption;
use App\Models\Topping;

class CartController extends Controller
{
    function index()
    {
        $toppings = Topping::all();
        $toppingoptions = Toppingoption::all();
        $price= 0;
        if (session('cart')){
            foreach (session('cart') as $id => $product){
                $price_product = Size::where('product_name',$product['slug'])->where( 'Size', $product['size'])->first()->Price * $product['quantity'];
                $discount = Product::where('id',$product['id'])->first()->discount;
                $price_topping =  $product['topping'] ? Topping::where('Idtopping', $product['topping'] )->first()->price : 0;
                $discount > 0 ? $price+=$price_product-$price_product*$discount/100+$price_topping :$price+=$price_product + $price_topping;
                $cart = session()->get('cart');
                $cart[$id]["price"] =  $price_product;
                session()->put('cart', $cart);
               
            }
        }
        return view('layouts.cart', compact('toppings','toppingoptions','price'));
    }

    public function add(Request $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {

            abort(404);
        }
        $cart = session()->get('cart');
        // if cart is empty then this the first product
        if (!$cart) {

            $cart = [
                $id => [
                    "price" => Null,
                    "id"=> $product->id,
                    "name" => $product->name,
                    "quantity" => $request->quantity,
                    "photo" => $product->Img,
                    "size" => $request->size,
                    "topping" => $request->topping,
                    "sugar" => $request->sugar,
                    "ice" => $request->ice,
                    "slug" => $product-> slug,
                    "image" =>$product->Img
                ]
            ];

            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if cart not empty then check if this product exist then increment quantity
        if (isset($cart[$id]['size'])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "price" => Null,
            "id"=> $product->id,
            "name" => $product->name,
            "quantity" => $request->quantity,
            "photo" => $product->Img,
            "size" => $request->size,
            "topping" => $request->topping,
            "sugar" => $request->sugar,
            "ice" => $request->ice,
            "image" => $product->Img,
            "slug" => $product-> slug
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function remove($id)
    {
        $cart = session()->get('cart');
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        return redirect()->back()->with('success', "Removed from Cart");
    }

    public function update(Request $request, $id){
        
        $this ->remove($id);   
        $this ->add($request,$id);
        return redirect()->back()->with('success', "Update from Cart");
    }
}
