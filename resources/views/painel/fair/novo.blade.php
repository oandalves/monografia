@extends('adminlte::page')

@section('title', 'Nova feira')

@section('content_header')
    <h1>Nova feira</h1>
@stop

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Cadastrar nova feira</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nome</label>
                                <input type="text" name="nome" class="form-control" placeholder="Nome" maxlength="255">
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Dia da semana</label>
                                        <input type="text" class="form-control" name="dia da semana" placeholder="Dia">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Horário</label>
                                        <input type="text" class="form-control" name="horario" placeholder="Horário">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Periodicidade</label>
                                        <select class="custom-select rounded-0">
                                            <option>Selecione</option>
                                            <option>Semanalmente</option>
                                            <option>Mensalmente</option>
                                            <option>Quinzenal</option>
                                        </select>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
    </section>
@stop
