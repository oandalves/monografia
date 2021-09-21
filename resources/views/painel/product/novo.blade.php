@extends('adminlte::page')

@section('title', 'Novo produto')

@section('content_header')
<h1>Novo produto</h1>
@stop

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Cadastrar novo produto</h3>
                    </div>
                    <form action="{{ route('painel.categorias.store') }}" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Categoria</label>
                                <select class="custom-select rounded-0" name="categoria">
                                    <option>Selecione</option>
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nome</label>
                                <input type="text" name="nome" class="form-control" placeholder="Nome" maxlength="255">
                            </div>
                            <div class="form-group">
                                <label>Imagem</label>
                                <input type="text" name="descricao" class="form-control" placeholder="Descrição" maxlength="255">
                            </div>
                            <x-adminlte-button class="btn-flat" type="submit" label="Salvar" theme="success" icon="fas fa-lg fa-save" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>
@stop