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
                                        <p class="">Nome: Frutas<br>Esta categoria aparece em: 4 feiras cadastadas<br>Feira Orgãnica: 19 produtos vinculados a esta categoria
                                            <br>Feira Agroecológica: 12 produtos vinculados a esta categoria
                                            <br>Feira Livre: 18 produtos vinculados a esta categoria
                                            <br>Feira Major Prates: 20 produtos vinculados a esta categoria</p>
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
