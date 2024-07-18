<?php

namespace App\Http\Controllers;

use App\Models\Categori;
use App\Models\Product;
use App\Models\ProductAttributes;
use App\Models\ProductImages;
use Illuminate\Http\Request;
use Inertia\Inertia;

class JustOrangeController extends Controller
{
    public function index(Request $request): \Inertia\Response
    {
        $filter = ($request->get('filter')) ? $request->get('filter') : null;
        // dd($filter);
        switch ($filter) {
            case 'all':
                $product = Product::where("active",true)->orderBy('created_at')->take(8)->with('category')->get();
                break;
            case 'new':
                $product = Product::where("active",true)->orderBy('id','desc')->take(8)->with('category')->get();
            case 'rekomendasi':
                $product = Product::where('recomended',true)->orderBy('id','asc')->take(8)->with('category')->get();
            case 'desc_harga':
                $product = Product::where('active',true)->orderBy('price','desc')->take(8)->with('category')->get();
            case 'asc_harga':
                $product = Product::where('active',true)->orderBy('price','asc')->take(8)->with('category')->get();
             default:
                $product =  Product::where('active', true)->orderBy('id', 'desc')->take(8)->with('category')->get();
                break;
        }
        $data["ProductsAll"] = $product;
        $data["ProductsPopuller"] = $product = Product::where('recomended',true)->orderBy('id','asc')->take(8)->with('category')->get();
        $data['Filter'] = $filter;
        $data['Categoris'] = Categori::all();
        // dd($data['Categoris']);
        return Inertia::render('justorange-default',$data);
    }
    public function product(Request $request): \Inertia\Response
    {

        $slug = $request->slug;
        $data["Products"] = Product::where("slug",$slug)->with('category')->first();
        $data["ProductsPopuller"] = Product::where("recomended",true)->with('category')->get();
        $data["Categori"] = Categori::where('id',$data["Products"]->category_id)->first();
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
