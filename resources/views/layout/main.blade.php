<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" href="https://api.iconify.design/ri:shopping-bag-3-line.svg">
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
                        <button class="nav-link btn-cart px-3" type="button" data-toggle="modal" data-target="#cart-modal">
                            <span class="iconify" data-icon="clarity:shopping-cart-line" data-inline="false"></span> 
                            Keranjang
                        </button>
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

                        @if (!session()->has('key'))
                        <button class="btn-login px-4" data-toggle="dropdown" aria-expanded="@if (session('status'))true
                                    @endif" autofocus>Masuk</button>

                        <div class="dropdown-menu login-drop mt-3 @if (session('status'))
                                    show
                                    @endif">
                            <div class="container" style="display: block;">
                                <div class="login-header pr-1">
                                    <h3 class="display-5">Masuk</h3>
                                </div>
                                <form action="/login" method="post" class="mt-4 ">
                                    @csrf
                                    <input type="text" class="form-control mt-2  @if (session('status')) is-invalid  @endif" name="email" placeholder="Enter email" autocomplete="off">
                                    <input type="password" class="form-control mt-2 @if (session('status')) is-invalid  @endif" placeholder="Password" name="password" autocomplete="off">
                                    <button type="submit" class="btn-sub-login mt-3">Masuk</button>
                                </form>
                                <p class="text-center mt-4" style="color: #000;">Belum punya akun?</p>
                                <a class="nav-link btn-cart px-3" href="/user/create" style="border: none; border-radius:4px;">Daftar</a>
                            </div>
                        </div>
                        @else
                        <a href="" data-toggle="dropdown">
                            <img src="/img/user/ice.jpg" alt="" class=" rounded-circle shadow-sm ml-3" width="50px">
                        </a>
                        <div class="dropdown-menu login-drop user mt-3">
                            <div class="container text-center" style="display: block;">
                                <img src="/img/user/ice.jpg" alt="" class=" rounded-circle shadow" width="150px">
                                <h4 class="mt-3">{{Auth::user()->name}}</h4>
                            </div>
                            <div class="mt-3">
                                <a class="dropdown-item" href="#">Profil</a>
                                <a class="dropdown-item" href="#">Keranjang Belanja</a>
                                <a class="dropdown-item" href="#">Barang Jualan</a>
                                <div class="container">
                                    <a class=" btn btn-sub-logout mt-4 py-2" href="/logout">Logout</a>
                                </div>
                            </div>
                        </div>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</div>

<!-- Modal cart -->
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
                                                    <input type="numeric" value="1" id="numeric-qty"/>
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
<!-- end of modal cart -->



    @yield('container')

    <script src="/js/jquery-3.5.1.slim.min.js"></script>
    <script src="/js/jquery-3.5.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/script.js"></script>
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
</body>

</html>