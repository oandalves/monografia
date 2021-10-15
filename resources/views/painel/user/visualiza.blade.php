@extends('adminlte::page')

@section('title', 'Visualiza usuário')

@section('content_header')
<h4><b>Visualizar usuário</b></h4>
@stop

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <!-- Profile Image -->
                                <div class="">
                                    <div class="">
                                        <p class="">Nome: {{ $user->name }}<br>Email: {{ $user->email }} <br>Tipo de usuário: {{ $user->type }} </p>
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
