<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Size;
use App\Models\topping;
use App\Models\toppingoption;


class ProductController extends Controller
{
    const ITEM_PER_PAGE = 12;
    public function Index()
    {
        $products = Product::paginate(self::ITEM_PER_PAGE);
        $category = Category::all();
        $sizes = Size::all();
        $toppings = Topping::all();
        $toppingoptions = Toppingoption::all();
        return view('layouts.product', compact('products', 'category','sizes','toppings','toppingoptions'));
    }

    public function SortByCategory($id)
    {
        $products = Product::where('IdCategory', $id)->get();
        $category = Category::all();
        $sizes = Size::all();
        $toppings = Topping::all();
        $toppingoptions = Toppingoption::all();
        return view('layouts.product', compact('products', 'category', 'sizes','toppings','toppingoptions'));
    }
}
