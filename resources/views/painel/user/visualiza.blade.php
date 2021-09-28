@extends('adminlte::page')

@section('title', 'Visualiza usuário')

@section('content_header')
    <h1>Visualizar usuário</h1>
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
                                        <h3 class="">Nome: {{ $user->name }}</h3>
                                        <p class="">Email: {{ $user->email }} <br>Tipo de usuário: {{ $user->type }} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@stop
