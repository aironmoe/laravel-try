<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
   public function index() {
    $products = []; 
    return Inertia::render('products/Index', [
        'test' => $products,
    ]);
}

}
