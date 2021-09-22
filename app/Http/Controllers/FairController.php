<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateFair;
use Illuminate\Http\Request;
use App\Models\Fair;
use App\Models\User;

class FairController extends Controller
{
    public function index() {
        $fairs = Fair::orderBY('id', 'ASC')
                        ->paginate(10);
        return view('painel.fair.index', compact('fairs'));
    }

    public function create() {
        $users = User::get();
        return view('painel.fair.novo', compact('users'));
    }

    public function store(Request $request) {
        //dd($request->all());
        Fair::create($request->all());
        return redirect()->route('painel.feiras.index');
    }
}
