@extends('layout/main')

@section('title' , 'Home | Laracode')


@section('container')
<div class="container mt-4">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/banner/carousel/1.png" class="d-block w-100" alt="1">
            </div>
            <div class="carousel-item">
                <img src="/img/banner/carousel/2.png" class="d-block w-100" alt="1">
            </div>
            <div class="carousel-item">
                <img src="/img/banner/carousel/3.png" class="d-block w-100" alt="1">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon btn-indicator" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon btn-indicator" aria-hidden="true"></span>
        </a>
    </div>
</div>
@endsection()