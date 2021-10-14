@extends('layouts.app')

@section('content')

    <div class="container conteudo">

        <div class="row box-search-user">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form id="" action="{{ route('user.viewUser') }}" method="GET">
                    <div class="input-group">
                        <input class="form-control inputSearch" id="txtId" type="text" placeholder="Insira o ID do usuário"
                            aria-label="Search" style="border-right: none;" required>
                        <div class="input-group-append">
                            <div class="input-group-text" style="background-color: #FFF">
                                <input type="submit" class="btnPesquisar" value="Pesquisar">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>

    </div>

    <main>
        @yield('content2')
    </main>

    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>

@endsection
