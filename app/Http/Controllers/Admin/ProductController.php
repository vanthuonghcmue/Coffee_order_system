<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Size;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    const ITEM_PER_PAGE = 12;
    public function index()
    {
        $products = Product::paginate(self::ITEM_PER_PAGE);
        $sizes = Size::all();
        return view('admin.product.index', compact('products', 'sizes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sizes = Size::all();
        $Categories = Category::all();
        return view('admin.product.create', compact('Categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->Name;
        $product->idCategory = $request->idCategory;
        $product->Description = $request->Description;
        $product->status = $request->Status;
        $product->slug = Str::slug($product->name);
        $product->discount = $request->Discount;

        if ($request->hasFile('imageM')) {
            $size = new Size();
            $size->product_name = $product->slug;
            $size->Size = 'M';
            $size->Price = $request->PriceM;
            $size->image = time() . '.M' . $size->product_name . '.' . $request->file('imageM')->extension();
            $request->file('imageM')->storeAs('product', $size->image, 'local');
            $size->save();
        }

        if ($request->hasFile('imageL')) {
            $size = $size = new Size();
            $size->product_name = $product->slug;
            $size->Size = 'L';
            $size->Price = $request->PriceL;
            $size->image = time() . '.L' . $size->product_name . '.' . $request->file('imageL')->extension();
            $request->file('imageL')->storeAs('product', $size->image, 'local');
            $size->save();
        }

        if ($request->hasFile('imageS')) {
            $size = $size = new Size();
            $size->product_name = $product->slug;
            $size->Size = 'S';
            $size->Price = $request->PriceS;
            $size->image = time() . '.S' . $size->product_name . '.' . $request->file('imageS')->extension();
            $product->Img = $size->image;
            $request->file('imageS')->storeAs('product', $size->image, 'local');
            $size->save();
        }

        $product->save();
        $request->session()->flash('notice', 'Create product successful');
        return back()->withInput();
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
        $Categories = Category::all();
        $Product = Product::find($id);
        $sizes = Size::where('product_name', $Product->slug)->get();
        return view('admin.product.edit', compact('Product', 'Categories', 'sizes'));
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
        $product = Product::find($id);
        $product->name = $request->Name;
        $product->idCategory = $request->idCategory;
        $product->Description = $request->Description;
        $product->slug =  $product->slug;
        $product->Img = $product->Img;
        $product->status = $request->Status;
        $product->discount = $request->Discount;

        if ($request->hasFile('imageM')) {
            $size = Size::where('product_name', $product->slug)->where('Size', 'M')->first();
            $size->product_name = $product->slug;
            $size->Size = 'M';
            $size->Price = $request->PriceM;
            $size->image = time() . '.M' . $size->product_name . '.' . $request->file('imageM')->extension();
            $request->file('imageM')->storeAs('product', $size->image, 'local');
            $size->save();
        }

        if ($request->hasFile('imageL')) {
            $size = Size::where('product_name', $product->slug)->where('Size', 'L')->first();
            $size->product_name = $product->slug;
            $size->Size = 'L';
            $size->Price = $request->PriceL;
            $size->image = time() . '.L' . $size->product_name . '.' . $request->file('imageL')->extension();
            $request->file('imageL')->storeAs('product', $size->image, 'local');
            $size->save();
        }

        if ($request->hasFile('imageS')) {
            $size = Size::where('product_name', $product->slug)->where('Size', 'S')->first();
            $size->product_name = $product->slug;
            $size->Size = 'S';
            $size->Price = $request->PriceS;
            $size->image = time() . '.S' . $size->product_name . '.' . $request->file('imageS')->extension();
            $product->Img = $size->image;
            $request->file('imageS')->storeAs('product', $size->image, 'local');
            $size->save();
        }

        $product->save();
        $request->session()->flash('notice', 'Update product successful');
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $product_slug = Product::find($id);
        $delete = Size::where('product_name', $product_slug->slug)->get();
        $delete->each->delete();
        Product::destroy($id);
        $request->session()->flash('notice', 'Delete product successful');
        return back();
    }
}
