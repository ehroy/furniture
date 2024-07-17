<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductAttributes;
use App\Models\ProductImages;
use Illuminate\Http\Request;
use Inertia\Inertia;

class JustOrangeController extends Controller
{
    public function index(Request $request): \Inertia\Response
    {
        $data["ProductsAll"] = Product::all();
        return Inertia::render('justorange-default',$data);
    }
    public function product(Request $request): \Inertia\Response
    {

        $slug = $request->slug;
        $data["Products"] = Product::where("slug",$slug)->first();
        $data['ProductAttribute'] = ProductAttributes::where('product_id',$data["Products"]->id)->get();
        $data['ProductImage'] = ProductImages::where('product_id',$data["Products"]->id)->get();
        return Inertia::render('products/detail',$data);
    }
    public function showproducts(Request $request): \Inertia\Response
    {
        $data["Products"] = Product::all();
        // $data['ProductAttribute'] = ProductAttributes::where('product_id',$data["Products"]->id)->get();
        // $data['ProductImage'] = ProductImages::where('product_id',$data["Products"]->id)->get();
        return Inertia::render('products/index',$data);
    }
}
