@extends('layouts.app')

@section('content')

<div class="container conteudo">

    @foreach ($cars as $car)
    
        <div class="row box-view-car">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @if ($car->path_photo1 != '')
                        <div class="carousel-item active">
                            <img src="{{ url("storage/{$car->path_photo1}") }}" style="width:100%;" />
                        </div>
                        @endif
                        @if ($car->path_photo2 != '')
                        <div class="carousel-item">
                            <img src="{{ url("storage/{$car->path_photo2}") }}" style="width:100%;" />
                        </div>
                        @endif
                        @if ($car->path_photo3 != '')
                        <div class="carousel-item">
                            <img src="{{ url("storage/{$car->path_photo3}") }}" style="width:100%;" />
                        </div>
                        @endif
                        @if ($car->path_photo4 != '')
                        <div class="carousel-item">
                            <img src="{{ url("storage/{$car->path_photo4}") }}" style="width:100%;" />
                        </div>
                        @endif
                        @if ($car->path_photo5 != '')
                        <div class="carousel-item">
                            <img src="{{ url("storage/{$car->path_photo5}") }}" style="width:100%;" />
                        </div>
                        @endif
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>

        <form action="{{ route('car.update', ['car' => $car->id]) }}" enctype="multipart/form-data" method="POST">
            @method('PUT')
            @csrf
            <div class="row box-info-car">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Marca:</label>
                                <input type="text" class="form-control" value="{{ $car->brand }}" disabled >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Modelo:</label>
                                <select name="txtModelo" class="form-control" required>
                                    <option selected value="{{ $cars[0]->fk_model }}">{{ $cars[0]->model }}</option>
                                    @foreach ($models as $model)
                                    <option value="{{ $model['id'] }}">{{ $model['model'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Placa:</label>
                                <input type="text" name="txtPlaca" class="form-control" value="{{ $car->board }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Ano:</label>
                                <input type="text" name="txtAno" class="form-control" value="{{ $car->year }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="sessoes">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group select_foto">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <label for="image">Selecione a primeira imagem</label>
                                            <input type="file" class="form-control-file" name="image1" id="image1" value="{{ $cars[0]->path_photo1 }}">
                                        </div>
                                        @if ($car->path_photo1 != '')
                                            <div class="col-md-2">
                                                <img src="{{ url("storage/{$car->path_photo1}") }}" style="width:100%;" />
                                            </div>
                                        @endif
                                    </div>                                
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <label for="image">Selecione a segunda imagem</label>
                                            <input type="file" class="form-control-file" name="image2" id="image2" value="{{ $cars[0]->path_photo2 }}}">
                                        </div>
                                        @if ($car->path_photo2 != '')
                                            <div class="col-md-2">
                                                <img src="{{ url("storage/{$car->path_photo2}") }}" style="width:100%;" />
                                            </div>
                                        @endif
                                    </div>                                
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <label for="image">Selecione a terceira imagem</label>
                                            <input type="file" class="form-control-file" name="image3" id="image3" value="{{ $cars[0]->path_photo3 }}}">
                                        </div>
                                        @if ($car->path_photo3 != '')
                                            <div class="col-md-2">
                                                <img src="{{ url("storage/{$car->path_photo3}") }}" style="width:100%;" />
                                            </div>
                                        @endif
                                    </div> 
                                    <hr>                                
                                    <div class="row">
                                        <div class="col-md-10">
                                            <label for="image">Selecione a quarta imagem</label>
                                            <input type="file" class="form-control-file" name="image4" id="image4" value="{{ $cars[0]->path_photo4 }}}">
                                        </div>
                                        @if ($car->path_photo4 != '')
                                            <div class="col-md-2">
                                                <img src="{{ url("storage/{$car->path_photo4}") }}" style="width:100%;" />
                                            </div>
                                        @endif
                                    </div>
                                    <hr>                                
                                    <div class="row">
                                        <div class="col-md-10">
                                            <label for="image">Selecione a quinta imagem</label>
                                            <input type="file" class="form-control-file" name="image5" id="image5" value="{{ $cars[0]->path_photo5 }}}">
                                        </div>
                                        @if ($car->path_photo5 != '')
                                            <div class="col-md-2">
                                                <img src="{{ url("storage/{$car->path_photo5}") }}" style="width:100%;" />
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row box-btn-view-car">
                <div class="col-md-6"></div>
                <div class="col-md-6 btnConfirm">
                    <button type="submit" class="btn btn-success">Alterar</button>
                </div>
            </div>

        </form>
    @endforeach


</div>

<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>

@endsection