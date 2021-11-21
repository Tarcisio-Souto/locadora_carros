@extends('layouts.app')

@section('content')

    <h1>Cadastro de Carros</h1><br><br>

    <div class="container-fluid conteudo">
        <div class="row head_form">
            <div class="col-md-12">
                <p>Cadastro de Carros</p>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <span class="titulo_form">
            <p>Dados do Carro</p>
        </span>

        <form action="{{ route('car.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="sessoes">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Modelo:</label>
                            <select name="txtModelo" class="form-control" required>
                                <option value="todos">Selecione o modelo</option>
                                @foreach ($models as $model)
                                    <option value="{{ $model['id'] }}">{{ $model['model'] }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="form-group">
                            <label>Placa:</label>
                            <input type="text" class="form-control" name="txtPlaca" required
                                value="{{ old('txtPlaca') }}">
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="form-group">
                            <label>Ano:</label>
                            <!--<input type="text" class="form-control" name="txtAno" value="{{ old('txtAno') }}">-->

                            <select name="txtAno" class="form-control" required>
                                <option>Selecione o ano</option>
                                @for ($i = 1900; $i <= 2021; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>


                        </div>
                    </div>
                </div>
            </div>
            <br>

            <span class="titulo_form">
                <p>Definir imagem</p>
            </span>

            <div class="row">
                <div class="col-md-12">
                    <div class="sessoes">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group select_foto">
                                    <label for="image">Selecione a primeira imagem</label>
                                    <input type="file" class="form-control-file" name="image1" id="image1" value="{{ old('image1') }}">
                                    <hr>
                                    <label for="image">Selecione a segunda imagem</label>
                                    <input type="file" class="form-control-file" name="image2" id="image2" value="{{ old('image2') }}">
                                    <hr>
                                    <label for="image">Selecione a terceira imagem</label>
                                    <input type="file" class="form-control-file" name="image3" id="image3" value="{{ old('image3') }}">
                                    <hr>
                                    <label for="image">Selecione a quarta imagem</label>
                                    <input type="file" class="form-control-file" name="image4" id="image4" value="{{ old('image4') }}">
                                    <hr>
                                    <label for="image">Selecione a quinta imagem</label>
                                    <input type="file" class="form-control-file" name="image5" id="image5" value="{{ old('image5') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6 btnConfirmCars">
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>
            </div>

        </form>

    </div>

    <br><br><br><br><Br><br>
    <br><br><br><br><Br><br>
    <br><br><br><br><Br><br>

@endsection
