@extends('adminlte::page')

@section('title', 'Feiras')

@section('content_header')
    <h1>Feiras</h1>
@stop

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Listagem todas as feiras</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Nome</th>
                                        <th>Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($fairs as $fair)
                                    <tr>
                                        <td>{{ $fair->id }}.</td>
                                        <td>
                                            {{ $fair->nome }}
                                        </td>
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