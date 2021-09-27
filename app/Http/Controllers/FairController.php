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
        $users = User::where('type', 'fair')->get();
        return view('painel.fair.novo', compact('users'));
    }

    public function store(Request $request) {
        //dd($request->all());
        $data = $request->all();
        if ($request->imagem->isValid()) {
            $imagem = $request->imagem->store('fairs');
            $data['imagem'] = $imagem;
        }
        Fair::create($data);
        return redirect()
            ->route('painel.feiras.index')
            ->with('message', 'Feira cadastrada com sucesso.');
    }

    public function show($id) {
        $fair = Fair::find($id);

        if(!$fair) {
            return redirect()
                ->back()
                ->with('message', 'Feira não localizada.');
        }

        return view('painel.fair.visualiza', compact('fair'));
    }

    public function edit($id) {
        $fair = Fair::find($id);
        $users = User::where('type', 'fair')->get();
        if(!$fair) {
            return redirect()
                ->back()
                ->with('message', 'Feira não localizada.');
        }

        return view('painel.fair.edita', compact('fair', 'users'));
    }

    public function update(Request $request, $id)
    {
        $fair = Fair::find($id);
        if(!$fair) {
            return redirect()
                ->back()
                ->with('message', 'Feira não localizada.');
        }

        $fair->update($request->all());
        return redirect()
        ->route('painel.feiras.index')
        ->with('message', 'Feira atualizada com sucesso.');
    }

    public function destroy($id) {
        $fair = Fair::find($id);

        if(!$fair) {
            return redirect()
                ->back()
                ->with('message', 'Feira não localizada.');
        }

        $fair->delete();
        return redirect()
            ->route('painel.feiras.index')
            ->with('message', 'Feira excluída com sucesso.');
    }
}
