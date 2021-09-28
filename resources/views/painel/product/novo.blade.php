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
                        <form action="{{ route('painel.produtos.store') }}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Feirante</label>
                                    <select class="custom-select rounded-0" name="marketer_id">
                                        <option>Selecione</option>
                                        @foreach ($marketers as $marketer)
                                            <option value="{{ $marketer->id }}">{{ $marketer->user->name }}</option>
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
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Nome</label>
                                            <input type="text" name="nome" class="form-control" placeholder="Nome"
                                                maxlength="255">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Unidade</label>
                                            <select class="form-control" name="unidade">
                                                <option>Selecione</option>
                                                <option value="grama">grama</option>
                                                <option value="litro">litro</option>
                                                <option value="metro">metro</option>
                                                <option value="kilograma">kilograma</option>
                                                <option value="unidade">unidade</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Preço</label>
                                            <input type="text" name="preco" class="form-control" placeholder="Preço">
                                        </div>
                                    </div>
                                    <input type="hidden" name="status" value="0">
                                    <input type="hidden" name="quantidade" value="1">
                                </div>
                                <x-adminlte-button class="btn-flat" type="submit" label="Salvar" theme="success"
                                    icon="fas fa-lg fa-save" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
@stop
