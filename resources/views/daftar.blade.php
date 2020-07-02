@extends('layout.second')

@section('title' , 'Jajan | Daftar')

@section('container')

<div class="container">
    <div class="back-button text-left">
        <a class="btn btn-back display-5 px-3" href="/"><span class="iconify" data-icon="ic:round-arrow-back-ios" data-inline="false"></span> Kembali</a>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-6 border-right">
            <div class="img-dftr justify-content-center">
                <img src="/img/banner/gambar_lain/undraw_dreamer_gxxi.svg" alt="">
            </div>
        </div>
        <div class="col-sm-6  border-left">

            <form id="msform" class="justify-content-center">

                <fieldset>
                    <div class="form-card">
                        <div class="judul-daftar text-center">
                            <h1>Selamat Datang!</h1>
                        </div>
                        <div class="judul-item text-center">
                            <h6>Wah agar kamu bisa menikmati semua layanan Jajan kamu harus masuk dulu ya!</h6>
                        </div>
                        <div class="info-proses justify-content-center">
                            <ul id="progressbar">
                                <li id="daftar" class="active"></li>
                                <li id="konfirmasi"></li>
                                <li id="selesai"></li>
                            </ul>
                        </div>
                        <div class="daftar justify-content-center">
                            <input type="text" name="nama" placeholder="Nama lengkap" />
                            <input type="text" name="uname" placeholder="Username" />
                            <input type="password" name="pwd" placeholder="Kata sandi" />
                            <input type="password" name="cpwd" placeholder="Konfirmasi kata sandi" />
                        </div>
                    </div>
                    <input type="button" name="next" class="next action-button shadow p-3 mb-5" value="Selanjutnya" />
                </fieldset>
                <fieldset>
                    <div class="form-card">
                        <div class="judul-daftar text-center">
                            <h1>Sedikit lagi..</h1>
                        </div>
                        <div class="judul-item ">
                            <p style="margin-bottom:0;">Masukan nomor telepon kamu, ini nantinya akan digunakan untuk menghubungi seller dan banyak fungsi pintar</p>
                        </div>
                        <div class="info-proses justify-content-center">
                            <ul id="progressbar">
                                <li id="daftar" class="active"></li>
                                <li id="konfirmasi" class="active"></li>
                                <li id="selesai"></li>
                            </ul>
                        </div>
                        <div class="daftar">
                            <input type="text" name="email" placeholder="Nomor Telepon" />
                            <a href=""><small id="emailHelp" class="form-text kirim-kode">Kirim kode verifikasi</small></a>

                            <small id="emailHelp" class="form-text text-lainnya">Masukan kode verifikasi yang dikirim ke nomor kamu</small>
                            <input type="text" name="uname" placeholder="0-0-0-0" />

                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline1">
                                    <small id="emailHelp" class="form-text radio-input" for="radios">Saya menyetujui segala <a href="">ketentuan dan kebijakan jajan</a></small>
                                </label>
                            </div>
                        </div>
                    </div>
                    <input type="button" name="next" class="next action-button shadow p-3 mb-5" value="Selanjutnya" />
                </fieldset>

                <fieldset>
                    <div class="form-card">
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
                    </div>
                    <a href=""><input type="button" name="next" class="next action-button shadow p-3 mb-5" value="Buka Halaman Beranda" /></a>
                </fieldset>

            </form>


        </div>

        @endsection()