@extends('layouts.app')

@section('content')

    <div class="container-fluid conteudo">

        <div class="sessoes">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
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
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                    <div class="col-md-6">

                    </div>
                </div>

            </form>


        </div>

        <br><br><br><br>
        <br><br><br><br>
        <br><br><br><br>

        <fieldset class="teste">
            <legend>Teste</legend>
            <p>blablabla</p>
            <p>blablabla</p>
    
            <p>blablabla</p>
    
            <p>blablabla</p>
    
            <p>blablabla</p>
    
        </fieldset>
        

    </div>

    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>

    

    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>

@endsection
