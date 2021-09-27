@extends('adminlte::page')

@section('title', 'Nova feira')

@section('content_header')
    <h1>Nova feira</h1>
@stop

@section('content')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Cadastrar nova feira</h3>
                        </div>
                        <form action="{{ route('painel.feiras.update', $fair->id) }}" method="post"
                            enctype="multipart/form-data">
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
                                    <input type="text" name="nome" class="form-control" placeholder="Nome" maxlength="255"
                                        value="{{ $fair->nome }}">
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Dia da semana</label>
                                            <select class="custom-select rounded-0" name="dia">
                                                <option value="{{ $fair->dia }}"">Selecione</option>
                                                    <option value=" Segunda-feira">Segunda-feira</option>
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
                                            <input type="text" class="form-control" name="horario" placeholder="Horário"
                                                value="{{ $fair->horario }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Periodicidade</label>
                                            <select class="custom-select rounded-0" name="periodicidade">
                                                <option value="{{ $fair->periodicidade }}">Selecione</option>
                                                <option value="Semanalmente">Semanalmente</option>
                                                <option value="Quinzenalmente">Quinzenalmente</option>
                                                <option value="Mensalmente">Mensalmente</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Descrição</label>
                                    <textarea id="descricao" name="descricao" name="descricao"
                                        value="{{ $fair->descricao }}" required autocomplete="descricao"
                                        autofocus></textarea>
                                    <script>
                                        $('#descricao').summernote({
                                            placeholder: 'Insira o texto da feira agroecológica e orgânica',
                                            tabsize: 2,
                                            height: 120,
                                            toolbar: [
                                                ['style', ['style']],
                                                ['font', ['bold', 'underline', 'clear']],
                                                ['color', ['color']],
                                                ['para', ['ul', 'ol', 'paragraph']],
                                                ['table', ['table']],
                                                ['insert', ['link', 'picture', 'video']],
                                                ['view', ['fullscreen', 'codeview', 'help']]
                                            ]
                                        });
                                    </script>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Telefone</label>
                                            <input type="text" class="form-control" name="telefone"
                                                placeholder="(XX)XXXX-XXXX" value="{{ $fair->telefone }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <input type="text" class="form-control" name="email" placeholder="E-mail"
                                                value="{{ $fair->email }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Link externo</label>
                                            <input type="text" class="form-control" name="link" placeholder="http://"
                                                value="{{ $fair->link }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <x-adminlte-input-file name="imagem" label="Imagem"
                                                placeholder="Seleciona uma imagem" value="{{ $fair->imagem }}"/>
                                            </div>
                                        </div>
                                        <div class=" col-sm-3">
                                                <div class="form-group">
                                                    <label>Cidade</label>
                                                    <input type="text" class="form-control" name="cidade"
                                                        placeholder="Cidade" value="{{ $fair->cidade }}">
                                                </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>UF</label>
                                                <select class="custom-select rounded-0" name="uf">
                                                    <option value="{{ $fair->uf }}>Selecione</option>
                                                    <option value=" AC">Acre</option>
                                                    <option value="AL">Alagoas</option>
                                                    <option value="AP">Amapá</option>
                                                    <option value="AM">Amazonas</option>
                                                    <option value="BA">Bahia</option>
                                                    <option value="CE">Ceará</option>
                                                    <option value="DF">Distrito Federal</option>
                                                    <option value="ES">Espírito Santo</option>
                                                    <option value="GO">Goiás</option>
                                                    <option value="MA">Maranhão</option>
                                                    <option value="MT">Mato Grosso</option>
                                                    <option value="MS">Mato Grosso do Sul</option>
                                                    <option value="MG">Minas Gerais</option>
                                                    <option value="PA">Pará</option>
                                                    <option value="PB">Paraíba</option>
                                                    <option value="PR">Paraná</option>
                                                    <option value="PE">Pernambuco</option>
                                                    <option value="PI">Piauí</option>
                                                    <option value="RJ">Rio de Janeiro</option>
                                                    <option value="RN">Rio Grande do Norte</option>
                                                    <option value="RS">Rio Grande do Sul</option>
                                                    <option value="RO">Rondônia</option>
                                                    <option value="RR">Roraima</option>
                                                    <option value="SC">Santa Catarina</option>
                                                    <option value="SP">São Paulo</option>
                                                    <option value="SE">Sergipe</option>
                                                    <option value="TO">Tocantins</option>
                                                    <option value="EX">Estrangeiro</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="address">Endereço</label>
                                            <input type="text"
                                                class="form-control map-input {{ $errors->has('address') ? 'is-invalid' : '' }}"
                                                placeholder="Insira o endereço do local onde a feira é realizada"
                                                name="address" id="address" value="{{ $fair->address }}">
                                            <input type="hidden" name="latitude" id="address-latitude"
                                                value="{{ $fair->latitude ?? '0' }}" />
                                            <input type="hidden" name="longitude" id="address-longitude"
                                                value="{{ $fair->longitude ?? '0' }}" />
                                            @if ($errors->has('address'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('address') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div id="address-map-container" class="mb-2" style="width:100%;height:400px;">
                                        <div style="width: 100%; height: 100%" id="address-map"></div>
                                    </div>
                                    <x-adminlte-button class="btn-flat" type="submit" label="Salvar" theme="success"
                                        icon="fas fa-lg fa-save" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
    <script src="{{ asset('assets/js/mapInput.js') }}"></script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize&language=en&region=GB">
    </script>
@stop
