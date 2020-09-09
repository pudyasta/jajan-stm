@extends('layout.second')

@section('title' , 'Jajan | Daftar')

@section('container')
<div class="container">

    <div class="row ">
        <div class="col-sm-6 d-flex">

            <img src="/img/banner/gambar_lain/undraw_dreamer_gxxi.svg" alt="">

        </div>

        <div class="col-sm-6 form-daft mt-4">

            <div class="form-card" id="msform">
                <div class="judul-daftar text-center">
                    <h1>Selesai!</h1>
                </div>
                <div class="judul-item text-center">
                    <p>Selamat @lastgen! Akun kamu berhasil dibuat, yeayy. Selamat menggunakan Jajan!</p>
                </div>
                <div class="info-proses justify-content-center">
                    <ul id="progressbar">
                        <li id="daftar" class="active"></li>
                        <li id="konfirmasi" class="active"></li>
                        <li id="selesai" class="active"></li>
                    </ul>
                </div>
                <a href=""><input type="button" name="next" class="next action-button shadow mb-5" value="Buka Halaman Beranda" /></a>
            </div>


        </div>
        <script src="/js/axios.min.js"></script>
        @endsection()