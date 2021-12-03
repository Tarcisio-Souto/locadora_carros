@extends('layouts.app')

@section('content')

    <div class="container conteudo">

        @foreach ($cars as $car)
            <form action="{{ route('car.edit', ['car' => $car->id]) }}" method="GET">
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
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>

                <div class="row box-info-car">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Marca:</label>
                                    <input type="text" class="form-control"
                                        value="{{ $car->brand }}" disabled >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Modelo:</label>
                                    <input type="text" class="form-control"
                                        value="{{ $car->model }}" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Placa:</label>
                                    <input type="text" class="form-control"
                                        value="{{ $car->board }}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Ano:</label>
                                    <input type="text" class="form-control"
                                        value="{{ $car->year }}" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row box-btn-view-car">
                    <div class="col-md-6"></div>
                    <div class="col-md-6 btnConfirm">
                        <button type="submit" class="btn btn-success">Editar</button>
                    </div>
                </div>

                
            </form>
        @endforeach


    </div>

    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>

@endsection
