@extends('layouts.app')

@section('content')

    <div class="container-fluid conteudo">
        <div class="row head_form">
            <div class="col-md-12">
                <p>Cadastro de Usuário</p>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <span class="titulo_form">
            <p>Dados Pessoais</p>
        </span>

        <form action="{{ route('user.store') }}" method="POST" enctype="multilpart/form-data">
            @csrf
            <div class="sessoes">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nome:</label>
                            <input type="text" class="form-control" name="txtNome" required value="{{ old('txtNome') }}">
                        </div>
                        <div class="form-group">
                            <label>E-mail:</label>
                            <input type="email" class="form-control" name="txtEmail" required
                                value="{{ old('txtEmail') }}">
                        </div>
                        <div class="form-group">
                            <label>Celular:</label>
                            <input type="text" class="form-control" name="txtCelular" required
                                value="{{ old('txtCelular') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Naturalidade:</label>
                            <input type="text" class="form-control" name="txtNaturalidade"
                                value="{{ old('txtNaturalidade') }}">
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
                            <input type="text" class="form-control" name="txtIdade" required
                                value="{{ old('txtIdade') }}">

                            @error('txtIdade')
                                <span>A idade deve ser maior ou igual a 18</span>
                            @enderror

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>CPF:</label>
                            <input type="text" class="form-control" name="txtCpf" required value="{{ old('txtCpf') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>RG:</label>
                            <input type="text" class="form-control" name="txtRg" required value="{{ old('txtRg') }}">
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
                            <input type="text" class="form-control" name="txtLogradouro" required
                                value="{{ old('txtLogradouro') }}">
                        </div>
                        <div class="form-group">
                            <label>Bairro:</label>
                            <input type="text" class="form-control" name="txtBairro" required
                                value="{{ old('txtBairro') }}">
                        </div>
                        <div class="form-group">
                            <label>Cidade</label>
                            <input type="text" class="form-control" name="txtBairro" required
                                value="{{ old('txtBairro') }}">
                        </div>

                        <div class="form-group">
                            <label>Estado</label>
                            <select name="txtEstado" class="form-control" required>
                                <option selected>Selecione o estado</option>
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
                            <input type="text" class="form-control" name="txtNumero" required
                                value="{{ old('txtNumero') }}">
                        </div>
                        <div class="form-group">
                            <label>Referência:</label>
                            <input type="text" class="form-control" name="txtReferencia"
                                value="{{ old('txtReferencia') }}">
                        </div>
                        <div class="form-group">
                            <label>CEP:</label>
                            <input type="text" class="form-control" name="txtCep" required value="{{ old('txtCep') }}">
                        </div>
                        <div class="form-group">
                            <label>País:</label>
                            <input type="text" class="form-control" name="txtPais" required value="{{ old('txtPais') }}">
                        </div>
                    </div>
                </div>
            </div>
            <br><br>

            <span class="titulo_form">
                <p>Definiçao de senha</p>
            </span>

            <div class="row">
                <div class="col-md-6">
                    <div class="sessoes">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Senha:</label>
                                    <input type="password" class="form-control" name="txtSenha" required>
                                </div>
                                <div class="form-group">
                                    <label>Confirmação de senha:</label>
                                    <input type="password" class="form-control" name="txtConfirmSenha" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-foto">
                    <div class="sessoes">
                        <div class="row">
                            <div class="col-md-12">
                                <!--<div class="form-group select_foto">
                                    <input type="file" class="custom-file-input" name="txtFoto" id="customFile" value="{{ old('txtFoto') }}">
                                    <label class="custom-file-label" for="customFile">Carregue sua foto</label>
                                </div>-->
                                <div class="form-group select_foto">
                                    <label for="exampleFormControlFile1">Carregue sua foto</label>
                                    <input type="file" class="form-control-file" name="txtFoto" value="{{ old('txtFoto') }}">
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
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>
            </div>

        </form>

    </div>

    <br><br><br><br><Br><br>
    <br><br><br><br><Br><br>
    <br><br><br><br><Br><br>
    <br><br><br><br><Br><br>
    <br><br><br><br><Br><br>
    <br><br><br><br><Br><br>

@endsection
