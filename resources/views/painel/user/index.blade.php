@extends('adminlte::page')

@section('title', 'Usuários')

@section('content_header')
    <h1>Usuários</h1>
@stop

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Listagem todos os usuários</h3>
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
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}.</td>
                                        <td>
                                            {{ $user->name }}
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

