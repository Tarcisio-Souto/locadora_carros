@extends('layouts.app')

@section('content')

    <!--
    <form action="{{ route('user.edit', ['user' => $user->id])}}" method="GET">
        <img src="{{ url("storage/{$user->path_photo}") }}" width="200px" />
        <input type="submit" value="Editar">
    </form>
    -->

    <div class="container-fluid conteudo">
        <div class="row head_form">
            <div class="col-md-12">
                <p>Visualizando Cadastro</p>
            </div>
        </div>

        <div class='row photo-cad-user' align="center">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <img src="{{ url("storage/{$user->path_photo}") }}" />
            </div>
            <div class="col-md-1"></div>
        </div>
        <br>

        <span class="titulo_form">
            <p>Dados Pessoais</p>
        </span>

        <form action="{{ route('user.edit', ['user' => $user->id]) }}"  enctype="multipart/form-data" method="GET">
            @csrf
            <div class="sessoes">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nome:</label>
                            <input type="text" class="form-control" name="txtNome" value="{{ $user->name }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>E-mail:</label>
                            <input type="email" class="form-control" name="txtEmail" 
                                value="{{ $user->email }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Celular:</label>
                            <input type="text" class="form-control" name="txtCelular" required
                                value="{{ $user->tel_celular }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Naturalidade:</label>
                            <input type="text" class="form-control" name="txtNaturalidade"
                                value="{{ $user->naturalidade }}" disabled>
                        </div>

                        <div class="form-group">
                            <label>Sexo:</label>
                            <div class="form-check">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input class="form-check-input" type="radio" name="txtSexo" value="m"
                                            {{ !empty(old('txtSexo')) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Masculino
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <input class="form-check-input" type="radio" name="txtSexo" value="f"
                                            {{ !empty(old('txtSexo')) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="exampleRadios2">
                                            Feminino
                                        </label>
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Idade:</label>
                            <input type="text" class="form-control" name="txtIdade"
                                value="{{ $user->idade }}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>CPF:</label>
                            <input type="text" class="form-control" id="cpf" name="txtCpf" value="{{ $user->cpf }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>RG:</label>
                            <input type="text" class="form-control" name="txtRg" value="{{ $user->rg }}" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>

            <span class="titulo_form">
                <p>Endereço</p>
            </span>
            <div class="sessoes">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Logradouro:</label>
                            <input type="text" class="form-control" name="txtLogradouro"
                                value="{{ $user->addresses[0]->street }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Bairro:</label>
                            <input type="text" class="form-control" name="txtBairro"
                                value="{{ $user->addresses[0]->district }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Cidade</label>
                            <input type="text" class="form-control" name="txtBairro"
                                value="{{ $user->addresses[0]->district }}" disabled>
                        </div>

                        <div class="form-group">
                            <label>Estado</label>
                            <select name="txtEstado" class="form-control" disabled>
                                <option selected value="{{ $user->addresses[0]->state }}">{{ $user->addresses[0]->state }}</option>
                                <option>Selecione o estado</option>
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
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Número:</label>
                            <input type="text" class="form-control" name="txtNumero"
                                value="{{ $user->addresses[0]->number }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Referência:</label>
                            <input type="text" class="form-control" name="txtReferencia"
                                value="{{ $user->addresses[0]->reference }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>CEP:</label>
                            <input type="text" class="form-control" name="txtCep" value="{{ $user->addresses[0]->zipcode }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>País:</label>
                            <input type="text" class="form-control" name="txtPais" required value="{{ $user->addresses[0]->country }}" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>

            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6 btnConfirm">
                    <button type="submit" class="btn btn-warning">Alterar</button>
                </div>
            </div>

        </form>
    </div>


    <br><br><br><br><Br><br>
    <br><br><br><br><Br><br>
    <br><br><br><br><Br><br>


@endsection
