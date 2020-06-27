<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
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
                        <a class="nav-link btn-cart px-3" href="#"><span class="iconify" data-icon="clarity:shopping-cart-line" data-inline="false"></span> Keranjang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fav-mess" href="#"><span class="iconify ic" data-icon="bi:heart" data-inline="false"></span> Favorit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fav-mess" href="#"><span class="iconify ic" data-icon="bi:chat-square-dots" data-inline="false"> </span> Pesan</a>
                    </li>


                    <li class="nav-item btn-group" style="display: block;">

                        @if(!isset($_SESSION))
                        <button class="btn-login px-4" data-toggle="dropdown">Masuk</button>

                        <div class="dropdown-menu login-drop mt-3">
                            <div class="container" style="display: block;">
                                <div class="login-header pr-1">
                                    <h3 class="display-5">Masuk</h3>
                                </div>
                                <form action="/login" method="post" class="mt-4">
                                    @csrf
                                    <input type="text" class="form-control mt-2" name="  username" id="exampleDropdownFormEmail1" placeholder="Username">
                                    <input type="password" class="form-control mt-2" id="exampleDropdownFormPassword1" placeholder="Password" name="password">
                                    <button type="submit" class="btn-sub-login mt-3">Masuk</button>
                                </form>
                                <p class="text-center mt-4" style="color: #000;">Belum punya akun?</p>
                                <a class="nav-link btn-cart px-3" href="/daftar" style="border: none; border-radius:4px;">Daftar</a>
                            </div>
                        </div>
                        @else
                        <a href="" data-toggle="dropdown">
                            <img src="/img/user/ice.jpg" alt="" class=" rounded-circle shadow-sm ml-3" width="50px">
                        </a>
                        <div class="dropdown-menu login-drop user mt-3">
                            <div class="container text-center" style="display: block;">
                                <img src="/img/user/ice.jpg" alt="" class=" rounded-circle shadow" width="150px">
                                <h4 class="mt-3">Ice Bear</h4>
                            </div>
                            <div class="mt-3">
                                <a class="dropdown-item" href="#">Profil</a>
                                <a class="dropdown-item" href="#">Keranjang Belanja</a>
                                <a class="dropdown-item" href="#">Barang Jualan</a>
                                <div class="container">
                                    <a class=" btn btn-sub-logout mt-4 py-2" href="#">Logout</a>
                                </div>
                            </div>
                        </div>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('container')

    <script src="/js/jquery-3.5.1.slim.min.js"></script>
    <script src="/js/jquery-3.5.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/script.js"></script>
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
</body>

</html>