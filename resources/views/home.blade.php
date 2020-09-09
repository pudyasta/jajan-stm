<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jajan | Home</title>
    <link rel="icon" href="https://api.iconify.design/ri:shopping-bag-3-line.svg" ">
    <link rel=" stylesheet" href="/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/font.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light py-3">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="/img/ikon/logo/png/1.png" alt=""></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

                <div class="dropdown">
                    <a class="btn-cat" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown">
                        Kategori <span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1em" height="1em" class="iconify" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path d="M10.02 6L8.61 7.41L13.19 12l-4.58 4.59L10.02 18l6-6l-6-6z" fill="#c4007c" /></svg>
                        </span></a>

                    <div class="dropdown-menu" style="border-radius:10px">
                        <a class="dropdown-item" href="#">Gaya Pakaian</a>
                        <a class="dropdown-item" href="#">Makanan</a>
                        <a class="dropdown-item" href="#">Minuman</a>
                        <a class="dropdown-item" href="#">Aksesoris</a>
                        <a class="dropdown-item" href="#">Kosmetik</a>
                        <a class="dropdown-item" href="#">Lihat Semua</a>
                    </div>
                </div>
                <form>
                    <div class="input-group cari">
                        <input type="text" class="form-control" placeholder="Lagi cari apa kak?" required>
                        <div class="input-group-prepend" style="border-radius: 10px;">
                            <button type="submit" class="btn btn-sub form-control" style="border-radius: 10px;"><span class="iconify" data-icon="bx:bx-search" data-inline="false"></span></button>
                        </div>
                    </div>
                </form>

                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item ">
                        <button class="nav-link btn-cart px-3" data-toggle="modal" data-target="#cart-modal"><span class="iconify" data-icon="clarity:shopping-cart-line" data-inline="false"></span> Keranjang</button>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fav-mess" href="#"><span class="iconify ic" data-icon="bi:heart" data-inline="false"></span> Favorit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fav-mess" href="#"><span class="iconify ic" data-icon="bi:chat-square-dots" data-inline="false"> </span> Pesan</a>
                    </li>


                    <li class="nav-item btn-group @if (session('status'))
                                    show
                                    @endif" style="display: block;">


                        <a href="" data-toggle="dropdown">
                            <img src="https://cdn.iconscout.com/icon/free/png-512/avatar-375-456327.png" alt="" class=" rounded-circle shadow-sm ml-3" width="50px">
                        </a>
                        <div class="dropdown-menu login-drop @if (Auth::user()->role=='admin') admin @elseif (Auth::user()->role=='guest') guest @else user @endif mt-3">
                            <div class="container text-center" style="display: block;">
                                <img src="https://cdn.iconscout.com/icon/free/png-512/avatar-375-456327.png" alt="" class=" rounded-circle shadow" width="120px">
                                <h4 class="mt-3 name">{{Auth::user()->name}}</h4>
                                <p class="username-text ">{{Auth::user()->username}}</p>
                                @if(Auth::user()->role =="admin")
                                <a class=" btn btn-sub-start" href="/dhasboard">Lihat Dhasboard</a>
                                @elseif(Auth::user()->role =="seller")
                                <a class=" btn btn-sub-daftar mt-0" href="/dhasboard"><span class="iconify" data-icon="entypo:shop" data-inline="false" style="margin: -1px 4px 0 0;"></span>Penjualan Saya</a>
                                @elseif(Auth::user()->role =="buyer")
                                <a class=" btn btn-sub-start" href="/dhasboard">Mulai jualan yuk</a>
                                @else
                                <a href="" class="warning">
                                    <div class="alert alert-danger" role="alert">
                                        <span class="iconify justify-content-center" data-icon="jam:triangle-danger" data-inline="false"></span><br>
                                        Alamat kamu belum di tetapkan nih, klik disini untuk menambahkan alamat kamu!
                                    </div>
                                </a>
                                @endif
                            </div>
                            <hr class="mt-3" style="margin: 0px 10px; border-top:2px solid #dedede">
                            <div class="mt-3">
                                @if(Auth::user()->role =="admin")
                                <div class="mt-3">
                                    <a class="dropdown-item" href="#">Laporan Pengunjung</a>
                                    <a class="dropdown-item" href="#">Saran dan Masukan</a>
                                    @else
                                    <a class="dropdown-item" href="#">Pengaturan Akun</a>
                                    <a class="dropdown-item" href="#">Status Pesanan</a>
                                    <a class="dropdown-item" href="#">Review Produk</a>
                                    <a class="dropdown-item" href="#">Bantuan</a>
                                    @endif
                                    <div class="container">
                                        <a class=" btn btn-sub-logout mt-2" href="/logout">Keluar</a>
                                    </div>
                                </div>

                            </div>

                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Corousel Jumbotron -->
    <div class="container mt-4">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                @if (!session()->has('key'))
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                @endif
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    @if (!session()->has('key'))
                    <img src="/img/banner/carousel/1.png" class="d-block w-100" alt="1">

                </div>
                <div class="carousel-item">
                    @endif
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
    <!-- End of Corousel Jumbotron -->

    <!-- Kategori -->
    <div class="container mt-4 py-4">
        <h4 class="sub-heading-section my-3">Kategori</h4>
        <div class="row mt-3">
            <div class="col-lg ">
                <a href="" class="btn btn-cat-section  py-2 ">
                    Fashion<span class="iconify float-right" data-icon="ic:round-navigate-next" data-inline="false" style="font-size: 25px;"></span>
                </a>
                <a href="" class="btn btn-cat-section py-2  mt-2">
                    Makanan<span class="iconify float-right" data-icon="ic:round-navigate-next" data-inline="false" style="font-size: 25px;"></span>
                </a>
                <a href="" class="btn btn-cat-section py-2  mt-2">
                    Minuman<span class="iconify float-right" data-icon="ic:round-navigate-next" data-inline="false" style="font-size: 25px;"></span>
                </a>
                <a href="" class="btn btn-cat-section  py-2 mt-2">
                    Kosmetik<span class="iconify float-right" data-icon="ic:round-navigate-next" data-inline="false" style="font-size: 25px;"></span>
                </a>
                <a href="" class="btn btn-cat-section  py-2 mt-2">
                    Aksesoris<span class="iconify float-right" data-icon="ic:round-navigate-next" data-inline="false" style="font-size: 25px;"></span>
                </a>
            </div>
            <div class="col product">
                <div class="card image-cat d-flex">
                    <img src="/img/kategori/pakaian/kaos.png" alt="lanyard">
                    <div class="card-img-overlay d-flex">
                        <h4 class="card-title ">Kaos</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg product">
                <div class="card image-cat d-flex">
                    <img src="/img/kategori/pakaian/korsa.png" alt="lanyard">
                    <div class="card-img-overlay d-flex">
                        <h4 class="card-title">Korsa</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg product">
                <div class="card image-cat d-flex">
                    <img src="/img/kategori/pakaian/gelang.png" alt="lanyard">
                    <div class="card-img-overlay d-flex">
                        <h4 class="card-title">Gelang</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg product">
                <div class="card image-cat d-flex">
                    <img src="/img/kategori/pakaian/hoddie.png" alt="lanyard">
                    <div class="card-img-overlay d-flex">
                        <h4 class="card-title">Hoddie</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg product">
                <div class="card image-cat d-flex">
                    <img src="/img/kategori/pakaian/jaket.png" alt="lanyard">
                    <div class="card-img-overlay d-flex">
                        <h4 class="card-title">Jaket</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="ngelink py-4 mt-1">
            <a href="">
                Lihat Semua Kategori<span class=" iconify" data-icon="ic:round-navigate-next" data-inline="false"></span>
            </a>
        </div>

    </div>
    <!-- End of Kategori -->


    <!-- Promo -->
    <div class="container mt-5">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="card" style="width: 12rem; border-radius: 5px; border: none;">

                    <div class="card d-flex" style="height: 330px;">
                        <div class="card-body" id="grad1">
                            <div class="card-title1 polkadot">
                                <div id="polkadot"></div>
                            </div>
                            <h4 class="card-title1 mt-4 pt-5">Hanya Untukmu</h4>
                            <a href="#" class="btn btn-grad mt-2">Lihat Semua</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php for ($i = 0; $i < 4; $i++) : ?>
                <div class="col d-flex justify-content-center product">
                    <div class="card" style="width: 12rem; border-radius: 5px; border: none;">
                        <a href="#" style="text-decoration:none">
                            <img src="/img/etalase/4.jpg" class="card-img-top produk-img" alt="...">
                            <div class="card-body py-3" style="padding: 0;">
                                <h6 class="card-title">Kaos Oblong Dengan Bahan Terbaik</h6>
                                <h5>Rp 60.000</h5>
                                <p class="card-text"><span class="iconify" data-icon="entypo:shop" data-inline="true" data-flip="horizontal" style="width: 15px; height: 15px; margin-right: 5px;"></span>Stuizer <span class="iconify" data-icon="bx:bxs-star" data-inline="true" data-flip="horizontal" style="width: 15px; height: 15px; margin-right: 5px;color: #FFCC00;"></span>4/5</p>
                                <p class="card-text"><span class="iconify" data-icon="bx:bxs-time-five" data-inline="true" data-flip="horizontal" style="width: 15px; height: 15px; margin-right: 5px;"></span>Close PO pada 12 juni 2020</p>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endfor ?>
        </div>

        <div class="row">
            <div class="col d-flex justify-content-center ">
                <div class="card" style="width: 12rem; border-radius: 5px; border: none;">

                    <div class="card  d-flex" style="height: 330px;">
                        <div class="card-body" id="grad2">
                            <div class="card-title1 polkadot">
                                <div id="polkadot"></div>
                            </div>
                            <h4 class="card-title1 mt-3 pt-4">Kasual keren buat kamu</h4>
                            <a href="#" class="btn btn-grad mt-2">Lihat Semua</a>
                        </div>
                    </div>


                </div>
            </div>
            <?php for ($i = 0; $i < 4; $i++) : ?>
                <div class="col d-flex justify-content-center product">
                    <div class="card" style="width: 12rem; border-radius: 5px; border: none;">
                        <a href="#" style="text-decoration:none">
                            <img src="/img/etalase/4.jpg" class="card-img-top produk-img" alt="...">
                            <div class="card-body py-3" style="padding: 0;">
                                <h6 class="card-title">Kaos Oblong Dengan Bahan Terbaik</h6>
                                <h5>Rp 60.000</h5>
                                <p class="card-text"><span class="iconify" data-icon="entypo:shop" data-inline="true" data-flip="horizontal" style="width: 15px; height: 15px; margin-right: 5px;"></span>Stuizer <span class="iconify" data-icon="bx:bxs-star" data-inline="true" data-flip="horizontal" style="width: 15px; height: 15px; margin-right: 5px;color: #FFCC00;"></span>4/5</p>
                                <p class="card-text"><span class="iconify" data-icon="bx:bxs-time-five" data-inline="true" data-flip="horizontal" style="width: 15px; height: 15px; margin-right: 5px;"></span>Close PO pada 12 juni 2020</p>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endfor ?>
        </div>
    </div>
    <!-- End of Promo -->

    <!-- Trending -->
    <div class="produk pb-4 mt-5">
        <div class="container">
            <div class="header-etalse mb-4">
                <div class="row mt-3">
                    <div class="col mt-1">
                        <h4 class="sub-heading-section">Yang Lagi rame dan banyak diminati</h4>
                    </div>
                    <div class="col text-right">
                        <a href="" class="btn sortbtn mr-1 py-2"><span class="iconify mr-1" data-icon="bx:bx-sort-up" data-inline="false"></span>Urutkan</a>
                        <a href="" class="btn sortbtn px-3 py-2"><span class="iconify" data-icon="fa-solid:filter" style="font-size: 15px;"></span> Filter
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Lagi rame dan banyak yang menikmati -->
        <div class="container">
            <div class="row ">
                <?php for ($i = 0; $i < 5; $i++) : ?>
                    <div class="col d-flex justify-content-center product">
                        <div class="card" style="width: 12rem; border-radius: 5px; border: none;">
                            <a href="">
                                <img src="/img/etalase/4.jpg" class="card-img-top produk-img" alt="...">
                                <div class="card-body py-3" style="padding: 0;">
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
    <!-- End of Trending -->



    <!-- Makanan Enak yang wajib dicobain -->
    <div class="produk mt-3">
        <div class="container">
            <div class="header-etalse mt-4">
                <h3 class="my-3 sub-heading-section">Makanan enak yang wajib dicobain</h3>
            </div>
            <div class="row">
                <?php for ($i = 0; $i < 5; $i++) : ?>
                    <div class="col d-flex justify-content-center product">
                        <div class="card" style="width: 12rem; border-radius: 5px; border: none;">
                            <a href="">
                                <img src="/img/etalase/4.jpg" class="card-img-top produk-img" alt="...">
                                <div class="card-body py-3" style="padding: 0;">
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
    <!-- End of Makanan Enak yang wajib dicobain -->


    <!-- Skincare-->
    <div class="produk mt-3">
        <div class="container">
            <div class="header-etalse">
                <h3 class="my-3 sub-heading-section">Biar muka tambah glowing</h3>
            </div>
            <div class="row">
                <?php for ($i = 0; $i < 5; $i++) : ?>
                    <div class="col d-flex justify-content-center product">
                        <div class="card" style="width: 12rem; border-radius: 5px; border: none;">
                            <a href="">
                                <img src="/img/etalase/75e3633758052fde98e90a9f0b6613d9.jpg" class="card-img-top produk-img" alt="...">
                                <div class="card-body py-3" style="padding: 0;">
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

    </div>
    <!-- End of Skincare-->

    <!-- Reg banner -->
    <div class="container mt-5 pb-3">
        <a href="/reg">
            <img src="/img/banner/foot.png" alt="" class="img-fluid">
        </a>
    </div>
    <!-- End of Reg banner -->


    <!-- Footer -->
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
                            <span>
                                lastgendeveloperteam@ hotmail.com
                            </span>
                        </a>
                    </li>
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
    <!-- End of Footer -->

    <div class="modal fade" id="cart-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title title-cart" id="exampleModalLongTitle">
                        <span class="iconify" data-icon="clarity:shopping-cart-line" data-inline="false"></span>
                        Keranjang
                    </h6>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row header-cart">
                            <div class="col-md-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Pilih semua</label>
                                </div>
                            </div>
                            <div class="col-md-4 ml-auto">
                                <a href="" class="cart-delete">
                                    <p>Hapus barang</p>
                                </a>
                            </div>
                        </div>
                        <div class="produk-cart">
                            <div class="row cart-toko">
                                <div class="col-md">
                                    <div class="form-check title-cart">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            <span class="iconify" data-icon="entypo:shop" data-inline="false"></span>
                                            Troy.co Yogjakarta
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="deskripsi-produk">
                                    <div class="d-flex bd-highlight justify-content-around">
                                        <div class="p-2 flex-fill align-self-center">
                                            <div class="form-check select-product">
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="p-2 flex-fill align-self-center">
                                            <div class="cart-img">
                                                <img src="/img/etalase/75e3633758052fde98e90a9f0b6613d9.jpg">
                                            </div>
                                        </div>
                                        <div class="p-3 flex-fill align-self-center">
                                            <div class="cart-deskripsi">
                                                Ini deskripsi
                                            </div>
                                            <div class="keterangan-prdk">
                                                mahal ini
                                            </div>
                                        </div>
                                        <div class="p-2 flex-fill align-self-center">
                                            <div class="cart-jumlah">
                                                <div class="col col-qty layout-inline">
                                                    <a href="#" class="qty qty-minus"><span class="iconify" data-icon="ant-design:minus-circle-twotone" data-inline="false" style="color: #C4007C; width: 24px; height: 24px;"></span></a>
                                                    <input type="numeric" value="1" id="numeric-qty" />
                                                    <a href="#" class="qty qty-plus"><span class="iconify" data-icon="ant-design:plus-circle-twotone" data-inline="false" style="color: #C4007C; width: 24px; height: 24px;"></span></a>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-2 flex-fill align-self-center">
                                            <div class="cart-harga">
                                                Rp.20000
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="produk-cart">
                            <div class="row cart-toko">
                                <div class="col-md">
                                    <div class="form-check title-cart">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            <span class="iconify" data-icon="entypo:shop" data-inline="false"></span>
                                            Troy.co Yogjakarta
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="deskripsi-produk">
                                    <div class="d-flex bd-highlight justify-content-around">
                                        <div class="p-2 flex-fill align-self-center">
                                            <div class="form-check select-product">
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="p-2 flex-fill align-self-center">
                                            <div class="cart-img">
                                                <img src="/img/etalase/75e3633758052fde98e90a9f0b6613d9.jpg">
                                            </div>
                                        </div>
                                        <div class="p-3 flex-fill align-self-center">
                                            <div class="cart-deskripsi">
                                                Ini deskripsi
                                            </div>
                                            <div class="keterangan-prdk">
                                                mahal ini
                                            </div>
                                        </div>
                                        <div class="p-2 flex-fill align-self-center">
                                            <div class="cart-jumlah">
                                                <div class="col col-qty layout-inline">
                                                    <a href="#" class="qty qty-minus"><span class="iconify" data-icon="ant-design:minus-circle-twotone" data-inline="false" style="color: #C4007C; width: 24px; height: 24px;"></span></a>
                                                    <input type="numeric" value="1" />
                                                    <a href="#" class="qty qty-plus"><span class="iconify" data-icon="ant-design:plus-circle-twotone" data-inline="false" style="color: #C4007C; width: 24px; height: 24px;"></span></a>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-2 flex-fill align-self-center">
                                            <div class="cart-harga">
                                                Rp.20000
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="deskripsi-produk">
                                    <div class="d-flex bd-highlight justify-content-around">
                                        <div class="p-2 flex-fill align-self-center">
                                            <div class="form-check select-product">
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="p-2 flex-fill align-self-center">
                                            <div class="cart-img">
                                                <img src="/img/etalase/75e3633758052fde98e90a9f0b6613d9.jpg">
                                            </div>
                                        </div>
                                        <div class="p-3 flex-fill align-self-center">
                                            <div class="cart-deskripsi">
                                                Ini deskripsi
                                            </div>
                                            <div class="keterangan-prdk">
                                                mahal ini
                                            </div>
                                        </div>
                                        <div class="p-2 flex-fill align-self-center">
                                            <div class="cart-jumlah">
                                                <div class="col col-qty layout-inline">
                                                    <a href="#" class="qty qty-minus"><span class="iconify" data-icon="ant-design:minus-circle-twotone" data-inline="false" style="color: #C4007C; width: 24px; height: 24px;"></span></a>
                                                    <input type="numeric" value="1" />
                                                    <a href="#" class="qty qty-plus"><span class="iconify" data-icon="ant-design:plus-circle-twotone" data-inline="false" style="color: #C4007C; width: 24px; height: 24px;"></span></a>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-2 flex-fill align-self-center">
                                            <div class="cart-harga">
                                                Rp.20000
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </hr>
                    </div>
                </div>
                <div class="modal-footer d-flex">
                    <div class="mr-auto  total-keranjang">
                        <div class="judul-total">
                            <h6>Total pesanan</h6>
                        </div>
                        <div class="duit">
                            <h6>Rp.0</h6>
                        </div>
                    </div>
                    <button type="button" class="btn btn-batal" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-konfirmasi disabled">Konfirmasi</button>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/jquery-3.5.1.slim.min.js"></script>
    <script src="/js/jquery-3.5.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/script.js"></script>
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
</body>

</html>