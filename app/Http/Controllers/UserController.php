<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return view('painel.user.index');
    }

    public function create() {
        return view('painel.user.novo');
    }
}
