<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class JustOrangeController extends Controller
{
    public function index(Request $request): \Inertia\Response
    {
        return Inertia::render('justorange-default');
    }
}
