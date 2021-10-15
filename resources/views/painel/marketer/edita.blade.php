@extends('adminlte::page')

@section('title', 'Nova feira')

@section('content_header')
<h4><b>Editar feirante</b></h4>
@stop

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-info">
                    <form action="{{ route('painel.feirantes.store') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Vincular a feira</label>
                                <select class="custom-select rounded-0" name="fair_id">
                                    <option>Selecione</option>
                                    @foreach($fairs as $fair)
                                        <option value="{{$fair->id}}">{{$fair->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Possui SIPAF?</label>
                                        <select class="custom-select rounded-0" name="selo">
                                            <option>Selecione</option>
                                            <option value="Sim">Sim</option>
                                            <option value="Não">Não</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Forma de manejo</label>
                                        <select class="custom-select rounded-0" name="manejo">
                                            <option>Selecione</option>
                                            <option value="Convencional">Convencional</option>
                                            <option value="Orgânica">Orgânica</option>
                                            <option value="Agroecológica">Agroecológica</option>
                                            <option value="Agroextrativista">Agroextrativista</option>
                                            <option value="Biodinâmica">Biodinâmica</option>
                                            <option value="Permacultural">Permacultural</option>
                                            <option value="Outra">Outra</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Tipo de certificação</label>
                                        <select class="custom-select rounded-0" name="certificacao">
                                            <option>Selecione</option>
                                            <option value="Nenhuma">Nenhuma</option>
                                            <option value="Orgânica">Orgânica</option>
                                            <option value="Agroecológica">Agroecológica</option>
                                            <option value="Comércio justo (Fair trade)">Comércio justo (Fair trade)</option>
                                            <option value="Socioambiental">Socioambiental</option>
                                            <option value="Bem-estar animal">Bem-estar animal</option>
                                            <option value="Outra">Outra</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Endereço</label>
                                        <input type="text" class="form-control" name="local" placeholder="Endereço">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Cidade</label>
                                        <input type="text" class="form-control" name="cidade" placeholder="Cidade">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>UF</label>
                                        <select class="custom-select rounded-0" name="uf">
                                            <option>Selecione</option>
                                            <option value="AC">Acre</option>
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
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Telefone</label>
                                        <input type="text" class="form-control" name="telefone" placeholder="(XX)XXXX-XXXX">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Sexo</label>
                                        <select class="custom-select rounded-0" name="sexo">
                                            <option>Selecione</option>
                                            <option value="Masculino">Masculino</option>
                                            <option value="Feminino">Feminino</option>
                                            <option value="Outro">Outro</option>
                                        </select>
                                    </div>
                                </div>
                                <input type="hidden" name="status" value="0">
                            </div>
                            <x-adminlte-button class="btn-flat" type="submit" label="Salvar" theme="success" icon="fas fa-lg fa-save" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>
@stop