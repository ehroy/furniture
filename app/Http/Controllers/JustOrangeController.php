<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class JustOrangeController extends Controller
{
    public function index(Request $request): \Inertia\Response
    {
        $data = Product::all();
        return Inertia::render('justorange-default',$data);
    }
}
