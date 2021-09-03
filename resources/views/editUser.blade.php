<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Usuário</title>
</head>
<body>

    <h1>Editar Usuário</h1><br><br>

    <form action="{{ route('user.update', ['user' => $user->id]) }}" method="POST">
        @csrf
        @method('put')
        <label>Nome: <input type="text" name="txtNome" value="{{ $user->name }}"> </label><br><br>
        <label>E-mail: <input type="email" name="txtEmail" value="{{ $user->email }}"> </label><br><br>
        <label>Senha: <input type="password" name ="txtSenha"> </label><br><br>
        <input type="submit" value="Registrar">
    </form>

</body>
</html>
