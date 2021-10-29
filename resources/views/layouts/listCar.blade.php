@extends('layouts.app')

@section('content')

    <div class="container conteudo">

        <div class="row box-search-car">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                @if ($errors->any())
                    <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form id="" action="{{ route('car.viewCars') }}" method="GET">
                    <div class="input-group">
                        <input class="form-control inputSearch" id="txtMarca" name="txtMarca" type="text"
                            placeholder="Informe a marca do carro" aria-label="Search" style="border-right: none;" required>
                        <div class="input-group-append">
                            <div class="input-group-text" style="background-color: #FFF">
                                <input type="submit" class="btnPesquisar" value="Pesquisar">
                            </div>
                        </div>
                        <select name="txtStatus" class="form-control" required>
                            <option value="todos">Todos</option>
                            <option value="disponivel">Disponível</option>
                            <option value="indisponivel">Indisponível</option>
                        </select>
                    </div>
                </form>
            <div class="col-md-2"></div>
        </div>

    </div>

    <main>
        @yield('content3')
    </main>

    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>

@endsection
