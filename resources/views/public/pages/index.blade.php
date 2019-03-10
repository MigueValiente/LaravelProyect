@extends('layouts.app')

@section('title', 'Working')

@section('content')
<h1 class="text-center">Bienvenido a Jobbing</h1>
<h2 class="text-center jumbotron jumbotron-fluid">Donde Encontrar Trabajo Es Sencillo</h2>

<div id="carousel" class="carousel slide w-100 mh-30 m-auto" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="img-fluid w-100" src="images/imagen1.jpg" alt="Imagen 1">
            <div class="carousel-caption d-none d-md-block">
                <h5>Bienvenidos a Jobbing</h5>
                <p>Aqui encontraras un trabajo</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="img-fluid w-100" src="images/imagen2.jpg" alt="Imagen 2">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="text-dark">Lee las ultimas noticias</h5>
                <p class="text-dark">La actualidad laboral a solo un click</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="img-fluid w-100" src="images/imagen3.jpg" alt="Imagen 3">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="text-dark">No te pierdas nuestros eventos</h5>
                <p class="text-dark">Se reuniran grandes empresas</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
@endsection
