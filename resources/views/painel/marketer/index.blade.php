@extends('adminlte::page')

@section('title', 'Feirantes')

@section('content_header')
<h4><b>Listagem de feirantes</b></h4>
@stop

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-info">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Nome</th>
                                    <th>Cidade/UF</th>
                                    <th>Feira vinculada</th>
                                    <th>Cadastrado</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach($marketers as $marketer)
                                    <tr>
                                        <td>{{ $marketer->id }}.</td>
                                        <td>{{ $marketer->user->name }}</td>
                                        <td>{{ $marketer->cidade }}/{{ $marketer->uf }}</td>
                                        <td>{{ $marketer->fair->nome }}</td>
                                        <td>{{ $marketer->created_at}}</td>
                                        <td><a href="{{ route('painel.feirantes.show', $marketer->id) }}" title="Visualizar"><i class="far fa-eye"></i></a>
                                            <a href="{{ route('painel.feirantes.edit', $marketer->id) }}" title="Editar"><i class="far fa-edit"></i></a>
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