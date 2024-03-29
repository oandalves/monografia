<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::orderBY('id', 'ASC')
                        ->paginate(10);
        return view('painel.category.index', compact('categories'));
    }

    public function create() {
        return view('painel.category.novo');
    }

    public function store(Request $request) {
        Category::create($request->all());
        return redirect()->route('painel.categorias.index');
    }
}
