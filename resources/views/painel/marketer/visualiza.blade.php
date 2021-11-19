@extends('adminlte::page')

@section('title', 'Visualiza feirante')

@section('content_header')
<h4><b>Visualizar feirante</b></h4>
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

                                            <h3 class="profile-username text-center">{{ $marketer->nome }}</h3>

                                            <p class="text-muted text-center">{{ $marketer->nome }}</p>

                                            <ul class="list-group list-group-unbordered mb-3">
                                                <li class="list-group-item">
                                                    <b>Associado a feira</b> <a class="float-right">{{ $marketer->fair->nome}}</a>
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
                                                <strong>Nome: </strong>{{ $marketer->nome }}<br>
                                                <strong>Telefone: </strong>{{ $marketer->telefone }}<br>
                                                <strong>Sexo: </strong>{{ $marketer->sexo }}<br>
                                            </p>

                                            <hr>

                                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Localização</strong>

                                            <p class="text-muted">{{ $marketer->local }} - {{ $marketer->cidade }} - {{ $marketer->uf }}</p>

                                            <hr>

                                            

                                            <strong><i class="far fa-file-alt mr-1"></i> Informações importantes</strong>

                                            <p class="text-muted">
                                                <strong>Tipo: </strong>{{ $marketer->tipo }}<br>
                                                <strong>Possui SIPAF: </strong>{{ $marketer->selo }}<br>
                                                <strong>Forma de manejo: </strong>{{ $marketer->manejo }}<br>
                                                <strong>Tipo de certificação: </strong>{{ $marketer->certificacao }}<br>
                                            </p>
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
