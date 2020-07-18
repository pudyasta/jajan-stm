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
                    <form class="daftar justify-content-center" action="/register" method="post" id="1form" name="form1">
                        @csrf
                        <input type="text" class="form-control reg-nama" name="name" placeholder="Nama lengkap" autocomplete="off" />
                        <div class="error-name invalid-feedback"></div>
                        <input type="text" class="form-control reg-uname" name="username" placeholder="Username" id="username" autocomplete="off" />
                        <div class="error-uname invalid-feedback"></div>
                        <input type="password" class="form-control reg-pass" name="password" placeholder="Kata sandi" />
                        <div class="error-pass invalid-feedback"></div>
                        <input type="password" class="form-control reg-passcom" name="password_confirmation" placeholder="Konfirmasi kata sandi" />
                        <div class="error-passcom invalid-feedback"></div>
                        <button type="submit" class="next action-button submit-1 shadow mb-5">Selanjutnya</button>
                    </form>

                </div>

            </div>

            <div class="second-page">
                <div class="form-card" id="msform">
                    <div class=" text-center">
                        <h1 class="judul-daftar ">Sedikit lagi..</h1>
                        <p style="margin-bottom:0;" class="judul-item">Masukan nomor telepon kamu, ini nantinya akan digunakan untuk menghubungi seller dan banyak fungsi pintar</p>
                    </div>
                    <div class="info-proses justify-content-center">
                        <ul id="progressbar">
                            <li id="daftar" class="active"></li>
                            <li id="konfirmasi" class="active"></li>
                            <li id="selesai"></li>
                        </ul>
                    </div>
                    <form class="daftar justify-content-center">
                        <input type="text" class="form-control" name="email" placeholder="Nomor Telepon" />
                        <a href=""><small id="emailHelp" class="form-text kirim-kode">Kirim kode verifikasi</small></a>

                        <small id="emailHelp" class="form-text text-lainnya">Masukan kode verifikasi yang dikirim ke nomor kamu</small>
                        <input type="text" class="form-control" name="uname" placeholder="0-0-0-0" />

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline1">
                                <small id="emailHelp" class="form-text radio-input" for="radios">Saya menyetujui segala <a href="">ketentuan dan kebijakan jajan</a></small>
                            </label>
                        </div>
                        <button type="submit" name="submit" class="next action-button shadow mb-5">Selanjutnya</button>
                    </form>
                </div>
            </div>

            <div class="third-page">
                <div class="form-card" id="msform">
                    <div class="judul-daftar text-center">
                        <h1>Selesai!</h1>
                    </div>
                    <div class="judul-item text-center">
                        <p style="margin-bottom: 0;">Selamat @lastgen! Akun kamu berhasil dibuat, yeayy. Selamat menggunakan Jajan!</p>
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

        </div>
        <script src="/js/axios.min.js"></script>
        @endsection()