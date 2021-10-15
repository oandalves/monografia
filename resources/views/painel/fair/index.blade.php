@extends('adminlte::page')

@section('title', 'Feiras')

@section('content_header')
    <h4><b>Listagem de feiras</b></h4>
@stop

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        @if (session('message'))
                            <div id="toastsContainerTopRight" class="toasts-top-right fixed">
                                <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="toast-header"><strong class="mr-auto">Mensagem</strong><button
                                            data-dismiss="toast" type="button" class="ml-2 mb-1 close"
                                            aria-label="Close"><span aria-hidden="true">×</span></button></div>
                                    <div class="toast-body">{{ session('message') }}
                                    </div>
                                </div>
                            </div>
                        @endif
                        <!-- /.card-header -->
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
                                        <th>Responsável</th>
                                        <th>Endereço</th>
                                        <th>Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fairs as $fair)
                                        <tr>
                                            <td>{{ $fair->id }}.</td>
                                            <td>{{ $fair->nome }}</td>
                                            <td>{{ $fair->user->name }}</td>
                                            <td>{{ $fair->address }}</td>
                                            <td><a href="{{ route('painel.feiras.show', $fair->id) }}"
                                                    title="Visualizar"><i class="far fa-eye"></i></a>
                                                <a href="{{ route('painel.feiras.edit', $fair->id) }}" title="Editar"><i
                                                        class="far fa-edit"></i></a>
                                                <a href="" title="Excluir"><i
                                                            class="far fa-trash-alt"></i></a>
                                                        <!--
                                                <form action="{{ route('painel.feiras.destroy', $fair->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" title="Excluir" class="toastsDefaultSuccess"><i
                                                            class="far fa-trash-alt"></i></button>
                                                </form>
                                            -->
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
