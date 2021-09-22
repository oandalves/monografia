<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::orderBY('id', 'ASC')
                        ->paginate(10);
        return view('painel.user.index', compact('users'));
    }

    public function create() {
        return view('painel.user.novo');
    }

    public function store(Request $request) {
        User::create($request->all());
        return redirect()->route('painel.usuarios.index');
    }
}
