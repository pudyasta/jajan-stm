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




<div class="produk mt-3">
    <div class="container">
        <div class="header-etalse mb-4">
            <div class="row mt-3">
                <div class="col mt-1">
                    <h4>Yang Lagi rame dan banyak diminati</h4>
                </div>
                <div class="col text-right">
                    <a href="" class="btn sortbtn mr-1 py-2"><span class="iconify mr-1" data-icon="bx:bx-sort-up" data-inline="false"></span>Urutkan</a>
                    <a href="" class="btn filter px-3 py-2"><span class="iconify" data-icon="fa-solid:filter" style="font-size: 15px;"></span> Filter
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Lagi rame dan banyak yang menikmati -->
    <div class="container">
        <div class="row ">
            <?php for ($i = 0; $i < 5; $i++) : ?>
                <div class="col-sm d-flex justify-content-center">
                    <div class="card" style="width: 12rem; border-radius: 5px; border: none;">
                        <a href="">
                            <img src="/img/etalase/4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="card-title">Kaos Oblong Dengan Bahan Terbaik</h6>
                                <h5>Rp 60.000</h5>
                                <p class="card-text"><span class="iconify" data-icon="entypo:shop" data-inline="true" data-flip="horizontal" style="width: 15px; height: 15px; margin-right: 5px;"></span>Stuizer <span class="iconify" data-icon="bx:bxs-star" data-inline="true" data-flip="horizontal" style="width: 15px; height: 15px; margin-right: 5px;color: #FFCC00;"></span>4/5</p>
                                <p class="card-text"><span class="iconify" data-icon="bx:bxs-time-five" data-inline="true" data-flip="horizontal" style="width: 15px; height: 15px; margin-right: 5px;"></span>Close PO pada 12 juni 2020</p>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endfor ?>
            <div class="col-sm-12">
                <div class="ngelink">
                    <a href="">
                        Lihat Semua<span class="iconify" data-icon="ic:round-navigate-next" data-inline="false"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Makanan Enak yang wajib dicobain -->
<div class="produk mt-3">
    <div class="container">
        <div class="header-etalse mt-4">
            <h3 class="my-3">Makanan enak yang wajib dicobain</h3>
        </div>
        <div class="row">
            <?php for ($i = 0; $i < 5; $i++) : ?>
                <div class="col-sm d-flex justify-content-center">
                    <div class="card" style="width: 12rem; border-radius: 5px; border: none;">
                        <a href="">
                            <img src="/img/etalase/4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="card-title">Kaos Oblong Dengan Bahan Terbaik</h6>
                                <h5>Rp 60.000</h5>
                                <p class="card-text"><span class="iconify" data-icon="entypo:shop" data-inline="true" data-flip="horizontal" style="width: 15px; height: 15px; margin-right: 5px;"></span>Stuizer <span class="iconify" data-icon="bx:bxs-star" data-inline="true" data-flip="horizontal" style="width: 15px; height: 15px; margin-right: 5px;color: #FFCC00;"></span>4/5</p>
                                <p class="card-text"><span class="iconify" data-icon="bx:bxs-time-five" data-inline="true" data-flip="horizontal" style="width: 15px; height: 15px; margin-right: 5px;"></span>Close PO pada 12 juni 2020</p>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endfor ?>
            <div class="col-sm-12 text-right">
                <div class="ngelink">
                    <a href="">
                        Lihat Semua<span class="iconify" data-icon="ic:round-navigate-next" data-inline="false"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Biar muka tambah glowing -->

<div class="produk mt-3">
    <div class="container">
        <div class="header-etalse">
            <h3 class="my-3">Biar muka tambah glowing</h3>
        </div>
        <div class="row">
            <?php for ($i = 0; $i < 5; $i++) : ?>
                <div class="col-lg d-flex justify-content-center">
                    <div class="card" style="width: 12rem; border-radius: 5px; border: none;">
                        <a href="">
                            <img src="/img/etalase/75e3633758052fde98e90a9f0b6613d9.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="card-title">Perawat kulitmu</h6>
                                <h5>Rp 60.000</h5>
                                <p class="card-text"><span class="iconify" data-icon="entypo:shop" data-inline="true" data-flip="horizontal" style="width: 15px; height: 15px; margin-right: 5px;"></span>Stuizer <span class="iconify" data-icon="bx:bxs-star" data-inline="true" data-flip="horizontal" style="width: 15px; height: 15px; margin-right: 5px;color: #FFCC00;"></span>4/5</p>
                                <p class="card-text"><span class="iconify" data-icon="bx:bxs-time-five" data-inline="true" data-flip="horizontal" style="width: 15px; height: 15px; margin-right: 5px;"></span>Close PO pada 12 juni 2020</p>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endfor ?>
            <div class="col-sm-12 text-right">
                <div class="ngelink">
                    <a href="">
                        Lihat Semua<span class="iconify" data-icon="ic:round-navigate-next" data-inline="false"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>






<div class="foter pb-5 pt-2 mt-4">
    <div class="container">
        <div class="footer-logo mt-3">
            <img src="/img/ikon/logo/png/3.png" class="my-4" alt="">
        </div>
        <div class="row">
            <div class="col-sm">
                <li>
                    <h5 class="sub-title-foot">Tentang jajan</h5>
                </li>
                <li><a href="">Syarat dan ketentuan jajan</a></li>
                <li><a href="">Syarat dan ketentuan penjual</a></li>
                <li><a href="">Syarat dan ketentuan pembeli</a></li>
                <li><a href="">Permasalahan seputar layanan jajan</a></li>
                <li><a href="">Aturan Penggunaan</a></li>
                <li><a href="">Kebijakan privasi</a></li>
                <li><a href="">Tanya jawab seputar jajan</a></li>
            </div>
            <div class="col-sm">
                <li><a href="">Rekomendasi pembayaran</a></li>
                <li><a href="">Ketentuan untuk penjual</a></li>
                <li><a href="">Promo jajan</a></li>
                <li>
                    <h5 class="sub-title-foot mt-5">Navigasi pintar</h5>
                </li>
                <li><a href="">Beranda</a></li>
                <li><a href="">Kategori</a></li>
                <li><a href="">Rekomendasi</a></li>
            </div>
            <div class="col-sm">
                <li>
                    <p class="a">Mempunyai masalah saat menggunakan layanan kami? Hubungi jajan care melalui email berikut ini :</p>
                </li>
                <li><a href="">
                        <p>lastgendeveloperteam@hotmail.com</p>
                    </a></li>
                <li>
                    <h5 class="sub-title-foot b">Temukan kami di media sosial kesayangan kamu</h5>
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
            </div>
        </div>
    </div>
</div>
@endsection()