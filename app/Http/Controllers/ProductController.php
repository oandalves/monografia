<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Fair;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::orderBY('id', 'ASC')
                        ->paginate(10);
        return view('painel.product.index', compact('products'));
    }

    public function create() {
        $categories = Category::get();
        $fairs = Fair::get();
        return view('painel.product.novo', compact('categories', 'fairs'));
    }

    public function store(Request $request) {
        //dd($request->all());
        Product::create($request->all());
        return redirect()->route('painel.produtos.index');
    }
}
