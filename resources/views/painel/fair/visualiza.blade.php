@extends('adminlte::page')

@section('title', 'Visualiza feira')

@section('content_header')
<h4><b>Visualizar feira</b></h4>
@stop

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <!-- Profile Image -->
                                    <div class="card card-info">
                                        <div class="card-body box-profile">

                                            <h3 class="profile-username text-center">{{ $fair->user->name }}</h3>

                                            <p class="text-muted text-center">{{ $fair->user->email }}</p>

                                            <ul class="list-group list-group-unbordered mb-3">
                                                <li class="list-group-item">
                                                    <b>Feirantes Vinculados</b> <a class="float-right">22</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <b>Produtos cadastrados</b> <a class="float-right">543</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="card card-info">
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <strong><i class="fas fa-book mr-1"></i> Sobre</strong>

                                            <p class="text-muted">
                                                <strong>Nome: </strong>{{ $fair->nome }}<br>
                                                <strong>Dia da semana: </strong>{{ $fair->dia }}<br>
                                                <strong>Horário: </strong>{{ $fair->horario }}<br>
                                                <strong>Periodicidade: </strong>{{ $fair->periodicidade }}<br>
                                            </p>

                                            <hr>

                                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Localização</strong>

                                            <p class="text-muted">{{ $fair->address }}</p>

                                            <hr>

                                            <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                                            <p class="text-muted">
                                                <strong>Telefone: </strong>{{ $fair->telefone }}<br>
                                                <strong>Email: </strong>{{ $fair->email }}<br>
                                                <strong>Link: </strong><a href="{{ $fair->link }}" target="_blank">Link externo</a><br>
                                            </p>

                                            <hr>

                                            <strong><i class="far fa-file-alt mr-1"></i> Descrição</strong>

                                            <p class="text-muted">{{ $fair->descricao }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <x-adminlte-button class="btn-flat" type="print" label="Imprimir" theme="success"
                                        icon="fas fa-lg fa-print" />
                                    <x-adminlte-button class="btn-flat" type="return" label="Voltar" theme="info"
                                        icon="fas fa-lg fa-back" />
                        </div>
                    </div>
                </div>
            </div>
    </section>
@stop
