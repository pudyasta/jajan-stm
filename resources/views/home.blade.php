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






<div class="foter">
    <div class="container-fluid">
        <div class="footer-logo mt-3">
            <img src="/img/ikon/logo/png/3.png" class="mt-4" alt="">
        </div>
        <div class="row">
            <div class="col-sm-4">
                <ul>
                    <li>
                        <h5>Tentang jajan</h5>
                    </li>
                    <li><a href="">Syarat dan ketentuan jajan</a></li>
                    <li><a href="">Syarat dan ketentuan penjual</a></li>
                    <li><a href="">Syarat dan ketentuan pembeli</a></li>
                    <li><a href="">Permasalahan seputar layanan jajan</a></li>
                    <li><a href="">Aturan Penggunaan</a></li>
                    <li><a href="">Kebijakan privasi</a></li>
                    <li><a href="">Tanya jawab seputar jajan</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <ul class="tengah">
                    <li><a href="">Rekomendasi pembayaran</a></li>
                    <li><a href="">Ketentuan untuk penjual</a></li>
                    <li><a href="">Promo jajan</a></li>
                    <li>
                        <h5 class="b">Navigasi pintar</h5>
                    </li>
                    <li><a href="">Beranda</a></li>
                    <li><a href="">Kategori</a></li>
                    <li><a href="">Rekomendasi</a></li>
                </ul>
            </div>
            <div class="col-sm-5">
                <ul class="akhir">
                    <li>
                        <p class="a">Mempunyai masalah saat menggunakan layanan kami? Hubungi jajan care melalui email berikut ini :</p>
                    </li>
                    <li><a href="">
                            <p>lastgendeveloperteam@hotmail.com</p>
                        </a></li>
                    <li>
                        <h5 class="b">Temukan kami di media sosial kesayangan kamu</h5>
                    </li>
                    <li class="sosmed">
                        <a href=""><span class="iconify" data-icon="entypo-social:twitter-with-circle" data-inline="false"></span></a>
                        <a href=""><span class="iconify" data-icon="cib:facebook" data-inline="false"></span></a>
                        <a href=""><span class="iconify" data-icon="entypo-social:instagram-with-circle" data-inline="false"></span></a>
                        <a href=""><span class="iconify" data-icon="fa:snapchat" data-inline="false"></span></a>
                        <a href=""><span class="iconify" data-icon="entypo-social:youtube-with-circle" data-inline="false"></span></a>
                    </li>
                    <li>
                        <p class="akhir">Copyright Lastgen Developer Team Indonesia</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection()