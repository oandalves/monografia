<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'type' => $request->type,
        ]);
        return redirect()->route('painel.usuarios.index');
    }

    public function edit($id) {
        $user = User::find($id);
        return view('painel.user.edita', compact('user'));
    }

    public function show($id) {
        $user = User::find($id);
        return view('painel.user.visualiza', compact('user'));
    }
}
