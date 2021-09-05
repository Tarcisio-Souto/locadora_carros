<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Locação - Pesquisar Usuário</title>
</head>
<body>

    <h1>Pesquisar Usuário</h1><br><br>

    <form action="{{ route('rent.searchUser') }}" method="POST">
        @csrf
        <label>Usuário: <input type="text" name="txtIdUsuario"></label><br><br>
        <input type="submit" value="Pesquisar">
    </form>


</body>
</html>
