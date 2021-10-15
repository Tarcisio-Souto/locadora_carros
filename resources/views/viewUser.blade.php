<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visualizando Cadastro</title>
</head>
<body>

    <h1>Visualizando Cadastro</h1><br><br>

    <form action="{{ route('user.edit', ['user' => $user->id])}}" method="GET">
        <label>Nome: <input type="text" value="{{ $user->name }}" disabled> </label><br><br>
        <label>E-mail: <input type="email" value="{{ $user->email }}" disabled> </label><br><br>
        <img src="{{ url("storage/{$user->path_photo}") }}" width="200px" />
        <input type="submit" value="Editar">
    </form>

</body>
</html>
