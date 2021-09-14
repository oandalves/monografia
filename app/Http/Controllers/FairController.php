<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fair;

class FairController extends Controller
{
    public function index() {
        $fairs = Fair::get();
        return view('painel.fair.index', compact('fairs'));
    }

    public function create() {
        return view('painel.fair.novo');
    }
}
