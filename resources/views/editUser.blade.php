@extends('layouts.app')

@section('content')

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

        <form action="{{ route('user.update', ['user' => $user->id]) }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <div class="sessoes">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nome:</label>
                            <input type="text" class="form-control" name="txtNome" value="{{ $user->name }}">
                        </div>
                        <div class="form-group">
                            <label>E-mail:</label>
                            <input type="email" class="form-control" name="txtEmail" value="{{ $user->email }}"
                                >
                        </div>
                        <div class="form-group">
                            <label>Celular:</label>
                            <input type="text" class="form-control" name="txtCelular" required
                                value="{{ $user->tel_celular }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Naturalidade:</label>
                            <input type="text" class="form-control" name="txtNaturalidade"
                                value="{{ $user->naturalidade }}" >
                        </div>

                        <div class="form-group">
                            <label>Sexo:</label>
                            <div class="form-check">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input class="form-check-input" type="radio" name="txtSexo" value="m"
                                            {{ $user->sexo == 'm' ? 'checked' : '' || !empty(old('txtSexo')) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Masculino
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <input class="form-check-input" type="radio" name="txtSexo" value="f"
                                            {{ $user->sexo == 'f' ? 'checked' : '' || !empty(old('txtSexo')) ? 'checked' : '' }}>
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
                            <input type="text" class="form-control" name="txtIdade" value="{{ $user->idade }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>CPF:</label>
                            <input type="text" class="form-control" id="cpf" name="txtCpf" value="{{ $user->cpf }}"
                                >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>RG:</label>
                            <input type="text" class="form-control" name="txtRg" value="{{ $user->rg }}">
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
                                value="{{ $user->addresses[0]->street }}">
                        </div>
                        <div class="form-group">
                            <label>Bairro:</label>
                            <input type="text" class="form-control" name="txtBairro"
                                value="{{ $user->addresses[0]->district }}">
                        </div>
                        <div class="form-group">
                            <label>Cidade</label>
                            <input type="text" class="form-control" name="txtBairro"
                                value="{{ $user->addresses[0]->district }}">
                        </div>

                        <div class="form-group">
                            <label>Estado</label>
                            <select name="txtEstado" class="form-control">
                                <option selected value="{{ $user->addresses[0]->state }}">
                                    {{ $user->addresses[0]->state }}</option>
                                <option>Selecione o estado</option>
                                <option value="Acre">Acre</option>
                                <option value="Alagoas">Alagoas</option>
                                <option value="Amapá">Amapá</option>
                                <option value="Amazonas">Amazonas</option>
                                <option value="Bahia">Bahia</option>
                                <option value="Ceará">Ceará</option>
                                <option value="Distrito Federal">Distrito Federal</option>
                                <option value="Espírito Santo">Espírito Santo</option>
                                <option value="Goiás">Goiás</option>
                                <option value="Maranhão">Maranhão</option>
                                <option value="Mato Grosso">Mato Grosso</option>
                                <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                                <option value="Minas Gerais">Minas Gerais</option>
                                <option value="Pará">Pará</option>
                                <option value="Paraíba">Paraíba</option>
                                <option value="Paraná">Paraná</option>
                                <option value="Pernambuco">Pernambuco</option>
                                <option value="Piauí">Piauí</option>
                                <option value="Rio de Janeiro">Rio de Janeiro</option>
                                <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                                <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                                <option value="Rondônia">Rondônia</option>
                                <option value="Roraima">Roraima</option>
                                <option value="Santa Catarina">Santa Catarina</option>
                                <option value="São Paulo">São Paulo</option>
                                <option value="Sergipe">Sergipe</option>
                                <option value="Tocantins">Tocantins</option>
                                <option value="Estrangeiro">Estrangeiro</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Número:</label>
                            <input type="text" class="form-control" name="txtNumero"
                                value="{{ $user->addresses[0]->number }}">
                        </div>
                        <div class="form-group">
                            <label>Referência:</label>
                            <input type="text" class="form-control" name="txtReferencia"
                                value="{{ $user->addresses[0]->reference }}">
                        </div>
                        <div class="form-group">
                            <label>CEP:</label>
                            <input type="text" class="form-control" name="txtCep"
                                value="{{ $user->addresses[0]->zipcode }}">
                        </div>
                        <div class="form-group">
                            <label>País:</label>
                            <input type="text" class="form-control" name="txtPais" required
                                value="{{ $user->addresses[0]->country }}">
                        </div>
                    </div>
                </div>
            </div>
            <br><br>

            <div class="row">
                <div class="col-md-6">
                    <div class="sessoes">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Senha:</label>
                                    <input type="password" class="form-control" id="txtSenha" name="txtSenha" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Confirmação de senha:</label>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <input type="password" class="form-control" id="txtConfirmSenha" name="txtConfirmSenha" onkeyup="verificaSenha()" disabled>
                                        </div>
                                        <div class="col-md-2">
                                            <i class="fas fa-check-circle" id="checkKey"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-primary" id="btnTrocaSenha1">
                                    Habilitar
                                </button>
                                <button type="button" class="btn btn-primary" id="btnTrocaSenha2">
                                    Desabilitar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-foto">
                    <div class="sessoes">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group select_foto">
                                    <label for="exampleFormControlFile1">Carregue sua foto</label>
                                    <input type="file" class="form-control-file" name="image" id="image" value="{{ old('txtFoto') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>

            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6 btnConfirm">
                    <button type="submit" class="btn btn-success">Registrar</button>
                </div>
            </div>

        </form>
    </div>


    <br><br><br><br><Br><br>
    <br><br><br><br><Br><br>
    <br><br><br><br><Br><br>

@endsection
