@extends('layout.second')

@section('title' , 'Jajan | Daftar')

@section('container')

<div class="container">

    <div class="row ">
        <div class="col-sm-6 d-flex">
            <img src="/img/banner/gambar_lain/undraw_dreamer_gxxi.svg" alt="">

        </div>


        <div class="form-card col-sm-6 confirm" id="msform">
            <h1 class="judul-daftar ">Sedikit lagi</h1>
            <p style="margin-bottom:0;" class="judul-item">Konfirmasi email kamu untuk memulai berbelanja</p>
            <div class="info-proses">
                <ul id="progressbar" class="d-flex">
                    <li id="daftar" class="active"></li>
                    <li id="konfirmasi" class="active"></li>
                    <li id="selesai"></li>
                </ul>
            </div>
            <form class="daftar justify-content-center">
                <h6 class="judul-item">Pastikan email yang kamu masukkan sudah benar ya</h6>

                <input type="text" class="form-control" name="email" placeholder="Email" />
                <a href=""><small id="emailHelp" class="form-text kirim-kode">Kirim ulang link verifikasi</small></a>

            </form>
        </div>

    </div>
    <script src="/js/axios.min.js"></script>
    @endsection()