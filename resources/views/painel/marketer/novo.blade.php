@extends('adminlte::page')

@section('title', 'Nova feira')

@section('content_header')
    <h1>Novo feirante</h1>
@stop

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Cadastrar novo feirante</h3>
                        </div>
                        <form action="" method="post">
                            <div class="card-body">
                                <input type="hidden" name="user_id" value="1">
                                <input type="hidden" name="fair_id" value="1">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input type="text" name="nome" class="form-control" placeholder="Nome" maxlength="255">
                                </div>
                                <div class="row">
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
                                <div class="form-group">
                                    <label>Descrição</label>
                                    <input type="text" name="descricao" class="form-control" placeholder="Descrição"
                                        maxlength="255">
                                </div>
                                <div class="form-group">
                                    <label>Endereço</label>
                                    <input type="text" name="local" class="form-control" placeholder="Endereço"
                                        maxlength="255">
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Endereço</label>
                                            <input type="text" class="form-control" name="local"
                                                placeholder="Endereço">
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
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Telefone</label>
                                            <input type="text" class="form-control" name="telefone"
                                                placeholder="(XX)XXXX-XXXX">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <input type="text" class="form-control" name="email" placeholder="E-mail">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Link externo</label>
                                            <input type="text" class="form-control" name="link" placeholder="http://">
                                        </div>
                                    </div>
                                </div>
                                <x-adminlte-button class="btn-flat" type="submit" label="Salvar" theme="success" icon="fas fa-lg fa-save"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
@stop
