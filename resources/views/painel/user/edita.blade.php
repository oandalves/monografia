@extends('adminlte::page')

@section('title', 'Novo usuário')

@section('content_header')
    <h1>Editar usuário</h1>
@stop

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Editar usuário</h3>
                        </div>
                        <auth-validation-errors class="mb-4" :errors="$errors" />

                        <form action="" method="post">
                        @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Tipo usuário</label>
                                    <select class="custom-select rounded-0" name="type">
                                        <option>Selecione</option>
                                        <option value="admin">Administrador</option>
                                        <option value="fair">Responsável por gerenciar feira</option>
                                        <option value="marketer">Feirante</option>
                                        <option value="user">Usuário</option>
                                    </select>
                                </div>
                            <div class="form-group">
                                <label>Nome</label>
                                <input type="text" class="form-control" name="name" placeholder="Nome"
                                    :value="old('name')" required autofocus>
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="email" class="form-control" name="email" placeholder="E-mail"
                                    :value="old('email')" required autofocus>
                            </div>
                            <div class="form-group">
                                <label>Senha</label>
                                <input type="password" class="form-control" name="password" placeholder="Senha"
                                    :value="old('password')" required autocomplete="new-password">
                            </div>
                            <div class="form-group">
                                <label>Confirmar senha</label>
                                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirme a senha"
                                    :value="old('password_confirmation')">
                            </div>
                            

                            <div class="flex items-center justify-end mt-4">

                                <x-adminlte-button class="btn-flat" type="submit" label="Salvar" theme="success" icon="fas fa-lg fa-save" />
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
@stop
