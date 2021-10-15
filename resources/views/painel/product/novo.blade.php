@extends('adminlte::page')

@section('title', 'Novo produto')

@section('content_header')
    <h4><b>Cadastrar novo produto</b></h4>
@stop

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <form action="{{ route('painel.produtos.store') }}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Feira</label>
                                    <select class="custom-select rounded-0" name="fair_id">
                                        <option>Selecione</option>
                                        @foreach ($fairs as $fair)
                                            <option value="{{ $fair->id }}">{{ $fair->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Categoria</label>
                                    <select class="custom-select rounded-0" name="categoria_id">
                                        <option>Selecione</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->nome }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input type="text" name="nome" class="form-control" placeholder="Nome"
                                        maxlength="255">
                                </div>
                                <x-adminlte-button class="btn-flat" type="submit" label="Salvar" theme="success"
                                    icon="fas fa-lg fa-save" />
                                    <x-adminlte-button class="btn-flat" type="return" label="Cancelar" theme="danger"
                                    icon="fas fa-lg fa-exit" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
