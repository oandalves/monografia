@extends('adminlte::page')

@section('title', 'Visualiza feira')

@section('content_header')
    <h1>Feira {{ $fair->nome }}</h1>
@stop

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
            <img src="{{ url("storage/$fair->imagem") }}" alt="{{ $fair->nome }}">
            </div>
    </section>
@stop