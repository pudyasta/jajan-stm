@extends('layout.second')

@section('title' , 'Jajan | Daftar')

@section('container')

<div class="container">

    <div class="row justify-content-center">
        <div class="col-sm-6 d-flex">

            <img src="/img/banner/gambar_lain/undraw_dreamer_gxxi.svg" alt="">

        </div>

        <div class="col-sm-6 form-daft mt-4">
            <div class="first-page" id="msform">
                <div class="form-card">
                    <div class=" text-center">
                        <h1 class="judul-daftar">Selamat Datang!</h1>
                        <h6 class="judul-item">Wah agar kamu bisa menikmati semua layanan Jajan kamu harus masuk dulu ya!</h6>
                    </div>

                    <div class="info-proses justify-content-center">
                        <ul id="progressbar">
                            <li id="daftar" class="active"></li>
                            <li id="konfirmasi"></li>
                            <li id="selesai"></li>
                        </ul>
                    </div>
                    <form class="daftar justify-content-center" action="/user/create" method="post" id="1form" name="form1">
                        @csrf
                        <input type="text" class="form-control reg-nama" name="name" placeholder="Nama lengkap" autocomplete="off" />
                        <div class="error-name invalid-feedback"></div>
                        <input type="text" class="form-control reg-uname" name="username" placeholder="Username" id="username" autocomplete="off" />
                        <div class="error-uname invalid-feedback"></div>
                        <input type="email" class="form-control reg-email" name="email" placeholder="Email" />
                        <div class="error-email invalid-feedback"></div>
                        <input type="password" class="form-control reg-pass" name="password" placeholder="Kata sandi" />
                        <div class="error-pass invalid-feedback"></div>
                        <input type="password" class="form-control reg-passcom" name="password_confirmation" placeholder="Konfirmasi kata sandi" />
                        <div class="error-passcom invalid-feedback"></div>
                        <button type="submit" class="next action-button submit-1 shadow mb-5">Selanjutnya <img src="/img/ikon/spin.gif" class="spin" alt=""></button>


                    </form>
                </div>

            </div>





        </div>
        <script src="/js/axios.min.js"></script>
        @endsection()