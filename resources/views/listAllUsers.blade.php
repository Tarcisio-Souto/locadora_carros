<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todos os Usuários</title>
</head>
<body>

    <h1>Lista de usuários</h1><br><br>

    <form action="{{ route('user.create') }}" method="GET">
        <input type="submit" value="Novo">
    </form>
    <br><br><br>

    @foreach ($users as $user)
        <form action="{{ route('user.show', ['user' => $user->id]) }}" method="GET">
            <label>Nome: <input type="text" value="{{ $user->name }}" disabled> </label><br><br>
            <label>E-mail: <input type="email" value="{{ $user->email }}" disabled> </label><br><br>
            <input type="submit" value="Visualizar"><br><br>
        </form>
        <form action="{{ route('user.destroy', ['user' => $user->id]) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Deletar">
        </form>
        <hr><br>
    @endforeach

</body>
</html>
