<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Carros</title>
</head>
<body>

    <h1>Cadastro de Carros</h1><br><br>

    <form action="{{ route('car.store') }}" method="POST">
        @csrf
        <label>Marca: <input type="text" name="txtMarca"> </label><br><br>
            <label>Modelo: <input type="text" name="txtModelo"> </label><br><br>
            <label>Placa: <input type="text" name="txtPlaca"> </label><br><br>
            <label>Ano: <input type="text" name="txtAno"> </label><br><br>
        <input type="submit" value="Cadastrar">
    </form>

</body>
</html>
