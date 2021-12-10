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
                <form id="" action="{{ route('rent.searchUser') }}" method="POST">
                    @csrf
                    <label>Nova locação: </label>
                    <div class="input-group">
                        <input class="form-control inputSearch" id="txtIdUsuario" name="txtIdUsuario" type="text"
                            placeholder="Pesquise o usuário pelo ID" aria-label="Search" style="border-right: none;"
                            required>
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

        <br><br><br><br><br>

        <div class="row">
            <div class="col-md-12">
                <div class="main-box clearfix">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="table-secondary">
                                    <th scope="col">Nome</th>
                                    <th scope="col">Carro</th>
                                    <th scope="col">Imagem</th>
                                    <th scope="col">Data da Devolução</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            @for ($i = 0; $i < count($rents); $i++)
                                <tbody>
                                    <tr class="table-light">
                                        <td>{{ $rents[$i]->name }}</td>
                                        <td>{{ $rents[$i]->model }}</td>
                                        <td><img src="{{ url("storage/{$rents[$i]->path_photo1}") }}"
                                                style="width:100px" /></td>
                                        <td>{{ $rents[$i]->dt_devolution }}</td>
                                        <td style="width: 20%;">
                                            <a href="{{ route('rent.show', ['rent' => $rents[$i]->id ]) }}" class="table-link">
                                                <span class="fa-stack">
                                                    <i class="fa fa-square fa-stack-2x"></i>
                                                    <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                                                </span>
                                            </a>
                                            <a href="{{ route('rent.edit', ['rent' => $rents[$i]->id ]) }}" class="table-link">
                                                <span class="fa-stack">
                                                    <i class="fa fa-square fa-stack-2x"></i>
                                                    <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                </span>
                                            </a>
                                            <a href="{{ route('rent.destroy', ['rent' => $rents[$i]->id]) }}"
                                                class="table-link danger">
                                                <span class="fa-stack">
                                                    <i class="fa fa-square fa-stack-2x"></i>
                                                    <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            @endfor
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
