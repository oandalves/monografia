@extends('adminlte::page')

@section('title', 'Usuários')

@section('content_header')
    <h4><b>Listagem de usuários</b></h4>
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
                                    <th>Email</th>
                                    <th>Tipo</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}.</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->type }}</td>
                                        <td><a href="{{ route('painel.usuarios.show', $user->id) }}" title="Visualizar"><i class="far fa-eye"></i></a>
                                            <a href="{{ route('painel.usuarios.edit', $user->id) }}" title="Editar"><i class="far fa-edit"></i></a>
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

