@extends('adminlte::page')

@section('title', 'Nova categoria')

@section('content_header')
<h4><b>Cadastrar nova categoria</b></h4>
@stop

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <form action="{{ route('painel.categorias.store') }}" method="post">
                        @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input type="text" name="nome" class="form-control" placeholder="Nome" maxlength="255">
                                </div>
                                <x-adminlte-button class="btn-flat" type="submit" label="Salvar" theme="success" icon="fas fa-lg fa-save"/>
                                <x-adminlte-button class="btn-flat" type="return" label="Cancelar" theme="danger"
                                    icon="fas fa-lg fa-exit" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
@stop
