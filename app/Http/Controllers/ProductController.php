<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::orderBY('nome', 'ASC')
                        ->paginate(10);
        return view('painel.product.index', compact('products'));
    }

    public function create() {
        return view('painel.product.novo');
    }
}
