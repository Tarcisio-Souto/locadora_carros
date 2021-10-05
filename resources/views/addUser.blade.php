@extends('layouts.app')

@section('content')

    <div class="container-fluid conteudo">
        <div class="row head_form">
            <div class="col-md-12">
                <p>Cadastro de Usuário</p>
            </div>
        </div>
        <span class="titulo_form">
            <p>Dados Pessoais</p>
        </span>
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="sessoes">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nome:</label>
                            <input type="text" class="form-control" name="txtNome">
                        </div>
                        <div class="form-group">
                            <label>E-mail:</label>
                            <input type="email" class="form-control" name="txtEmail">
                        </div>
                        <div class="form-group">
                            <label>Senha:</label>
                            <input type="password" class="form-control" name="txtSenha">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nome:</label>
                            <input type="text" class="form-control" name="txtNome">
                        </div>
                        <div class="form-group">
                            <label>E-mail:</label>
                            <input type="email" class="form-control" name="txtEmail">
                        </div>
                        <div class="form-group">
                            <label>Senha:</label>
                            <input type="password" class="form-control" name="txtSenha">
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
                            <input type="text" class="form-control" name="txtNome">
                        </div>
                        <div class="form-group">
                            <label>Número:</label>
                            <input type="text" class="form-control" name="txtEmail">
                        </div>
                        <div class="form-group">
                            <label>Bairro:</label>
                            <input type="text" class="form-control" name="txtSenha">
                        </div>
                        <div class="form-group">
                            <label>Referência:</label>
                            <input type="text" class="form-control" name="txtSenha">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Estado:</label>
                            <input type="text" class="form-control" name="txtNome">
                        </div>
                        <div class="form-group">
                            <label>CEP:</label>
                            <input type="text" class="form-control" name="txtEmail">
                        </div>
                        <div class="form-group">
                            <label>País:</label>
                            <input type="text" class="form-control" name="txtSenha">
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
                                    <input type="password" class="form-control" name="txtSenha">
                                </div>
                                <div class="form-group">
                                    <label>Confirmação de senha:</label>
                                    <input type="password" class="form-control" name="txtConfirmSenha">
                                </div>
                            </div>                    
                        </div>                
                    </div>
                </div>
                <div class="col-md-6 col-foto">
                    <div class="sessoes">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group select_foto">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Carregue sua foto</label>
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
