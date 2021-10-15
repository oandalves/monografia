@extends('adminlte::page')

@section('title', 'Produtos')

@section('content_header')
<h4><b>Listagem de produtos</b></h4>
@stop

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-2"><x-adminlte-button class="btn-flat" type="return" label="Download" theme="info"
                                icon="fas fa-lg fa-download" /></div>
                            <div class="col-sm-6"></div>
                            <div class="col-sm-4">
                                <form action="">
                                    @csrf
                                    <div class="form-group">
                                        <input type="search" name="" id="" placeholder="Pesquisar"
                                            class="form-control">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Nome</th>
                                    <th>Categoria</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach($products as $products)
                                    <tr>
                                        <td>{{ $products->id }}.</td>
                                        <td>{{ $products->nome }}</td>
                                        <td>{{ $products->created_at }}</td>
                                        <td><a href="" title="Visualizar"><i class="far fa-eye"></i></a>
                                            <a href="" title="Editar"><i class="far fa-edit"></i></a>
                                            <a href="" title="Excluir"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</section>
@stop

