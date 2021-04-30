<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Size;

class CartController extends Controller
{
    function index()
    {
        return view('layouts.cart');
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
                    "name" => $product->name,
                    "quantity" => $request->quantity,
                    "price" => $product->price * $request->quantity,
                    "photo" => $product->Img,
                    "size" => $request->size,
                    "topping" => $request->topping,
                    "sugar" => $request->sugar,
                    "ice" => $request->ice
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
            "name" => $product->name,
            "quantity" => $request->quantity,
            "price" => $product->price * $request->quantity,
            "photo" => $product->Img,
            "size" => $request->size,
            "topping" => $request->topping,
            "sugar" => $request->sugar,
            "ice" => $request->ice
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
