@extends('adminlte::page')

@section('title', 'Nova feira')

@section('content_header')
    <h4><b>Cadastrar nova feira</b></h4>
@stop

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        {{-- <div class="card-header">
                            <h3 class="card-title">Cadastrar nova feira</h3>
                        </div> --}}
                        <form action="{{ route('painel.feiras.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Usuário responsável</label>
                                    <select class="custom-select rounded-0" name="user_id">
                                        <option>Selecione</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }} - {{ $user->email }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input type="text" name="nome" class="form-control" placeholder="Nome" maxlength="255">
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Dia da semana</label>
                                            <select class="custom-select rounded-0" name="dia">
                                                <option>Selecione</option>
                                                <option value="Segunda-feira">Segunda-feira</option>
                                                <option value="Terça-feira">Terça-feira</option>
                                                <option value="Quarta-feira">Quarta-feira</option>
                                                <option value="Quinta-feira">Quinta-feira</option>
                                                <option value="Sexta-feira">Sexta-feira</option>
                                                <option value="Sábado">Sábado</option>
                                                <option value="Domingo">Domingo</option>
                                            </select>
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
                                            <select class="custom-select rounded-0" name="periodicidade">
                                                <option>Selecione</option>
                                                <option value="Semanalmente">Semanalmente</option>
                                                <option value="Quinzenalmente">Quinzenalmente</option>
                                                <option value="Mensalmente">Mensalmente</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Descrição</label>
                                    <textarea id="descricao" name="descricao" class="form-control" required
                                        autocomplete="descricao" autofocus></textarea>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="address">Endereço</label>
                                        <input type="text" class="form-control map-input"
                                            placeholder="Insira o endereço do local onde a feira é realizada" name="address"
                                            id="address">
                                        <input type="hidden" name="latitude" id="address-latitude" />
                                        <input type="hidden" name="longitude" id="address-longitude" />
                                    </div>
                                </div>
                                <div id="address-map-container" class="mb-2" style="width:100%;height:400px;">
                                    <div style="width: 100%; height: 100%" id="address-map"></div>
                                </div>
                                <x-adminlte-button class="btn-flat" type="submit" label="Salvar" theme="success"
                                    icon="fas fa-lg fa-save" />
                                <x-adminlte-button class="btn-flat" type="return" label="Cancelar" theme="danger"
                                    icon="fas fa-lg fa-exit" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('assets/js/mapInput.js') }}"></script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize&language=en&region=GB">
    </script>
@stop
