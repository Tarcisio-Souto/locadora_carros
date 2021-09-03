<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Usuários</title>
</head>
<body>

    <h1>Cadastro de Usuários</h1><br><br>

    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <label>Nome: <input type="text" name="txtNome"> </label><br><br>
        <label>E-mail: <input type="email" name="txtEmail"> </label><br><br>
        <label>Senha: <input type="password" name ="txtSenha"> </label><br><br>
        <input type="submit" value="Cadastrar">
    </form>

</body>
</html>
