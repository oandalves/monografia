<?php

namespace App\Http\Controllers;

use App\Models\Fair;
use App\Models\Marketer;
use App\Models\User;
use Illuminate\Http\Request;

class MarketerController extends Controller
{
    public function index() {
        $marketers = Marketer::orderBY('id', 'ASC')
                        ->paginate(10);
        return view('painel.marketer.index', compact('marketers'));
    }

    public function create() {
        $users = User::get();
        $fairs = Fair::get();
        return view('painel.marketer.novo', compact('users', 'fairs'));
    }

    public function store(Request $request) {
        Marketer::create($request->all());
        return redirect()->route('painel.feirantes.index');
    }
}
