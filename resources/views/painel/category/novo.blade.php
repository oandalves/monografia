@extends('adminlte::page')

@section('title', 'Nova categoria')

@section('content_header')
    <h1>Nova categoria</h1>
@stop

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Cadastrar nova categoria</h3>
                        </div>
                        <form action="{{ route('painel.categorias.store') }}" method="post">
                        @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input type="text" name="nome" class="form-control" placeholder="Nome" maxlength="255">
                                </div>
                                <div class="form-group">
                                    <label>Descrição</label>
                                    <input type="text" name="descricao" class="form-control" placeholder="Descrição"
                                        maxlength="255">
                                </div>
                                <x-adminlte-button class="btn-flat" type="submit" label="Salvar" theme="success" icon="fas fa-lg fa-save"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
@stop
