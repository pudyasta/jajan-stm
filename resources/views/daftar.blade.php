@extends('layout.second')

@section('title' , 'Jajan | Daftar')

@section('container')

<div class="container">
    <div class="back-button text-left">
        <a class="btn btn-back display-5 px-3" href="#"><span class="iconify" data-icon="ic:round-arrow-back-ios" data-inline="false"></span> Kembali</a>
    </div>
    <div class="row justify-content-center ">
        <div class="col-sm-6 ">
            <div class="img-dftr">
                <img src="/img/banner/gambar_lain/undraw_dreamer_gxxi.svg" alt="">
            </div>
        </div>
        <div class="col-sm-6">

            <form id="msform">
                <ul id="progressbar">
                    <li class="active" id="account"></li>
                    <li id="personal"></li>
                    <li id="confirm"></li>
                </ul>
                <fieldset>
                    <div class="form-card">
                        <div class="judul-daftar text-center">
                            <h1>Selamat Datang!</h1>
                        </div>
                        <div class="judul-item text-center">
                            <p class="isi-daftar">Wah agar kamu bisa menikmati semua layanan Jajan kamu harus masuk dulu ya!</p>
                        </div>
                        <input type="text" name="nama" placeholder="Nama lengkap" />
                        <input type="text" name="uname" placeholder="Username" />
                        <input type="password" name="pwd" placeholder="Kata sandi" />
                        <input type="password" name="cpwd" placeholder="Konfirmasi kata sandi" />
                    </div>
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <div class="form-card">
                        <div class="judul-daftar text-center">
                            <h1>Sedikit lagi..</h1>
                        </div>
                        <div class="judul-item text-center">
                            <p class="isi-daftar">Masukan nomor telepon kamu, ini nsntinys akan digunakan untuk menghubungi seller dan banyak fungsi puntar</p>
                        </div>
                        <input type="text" name="email" placeholder="Nomor Telepon" />
                        <a href=""><small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small></a>

                        <small id="emailHelp" class="form-text text-muted">Masukan kode verifikasi yang dikirim ke nomor kamu</small>
                        <input type="text" name="uname" placeholder="0-0-0-0" />

                        <div class="form-check">
                            <input class="form-check-input text-left" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                                Saya menyetujui segala <a href="">ketentuan dan kebijakan jajan</a>
                            </label>
                        </div>
                    </div>
                    <input type="button" name="next" class="next action-button" value="selanjutnya" />
                </fieldset>

                <fieldset>
                    <div class="form-card">
                        <div class="judul-daftar text-center">
                            <h1>Selesai!</h1>
                        </div>
                        <div class="judul-item text-center">
                            <p class="isi-daftar">Selamat @lastgen! <br> Akun kamu berhasil dibuat, yeayy. <br> Selamat menggunakan Jajan!</p>
                        </div>
                    </div>
                    <button type="summit" class="back-button"> Buka Halaman Beranda</button>
                </fieldset>

            </form>

            <!-- <div class="form-daftar">
                <div class="judul-daftar text-center">
                    <h1>Selamat Datang!</h1>
                </div>
                <div class="judul-item text-center">
                    <p class="isi-daftar">Wah agar kamu bisa menikmati semua layanan Jajan kamu harus masuk dulu ya!</p>
                </div>
                <div class="daftar item-center">
                    <form action="" class="form-daftar">
                        <div class="form-group col-md">
                            <input type="text" class="form-control" id="inputAddress" placeholder="Nama lengkap">
                        </div>
                        <div class="form-group col-md">
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Username">
                        </div>
                        <div class="form-group col-md">
                            <input type="password" class="form-control" id="inputAddress2" placeholder="Kata sandi">
                        </div>
                        <div class="form-group col-md">
                            <input type="password" class="form-control" id="inputAddress2" placeholder="Konfirmasi kata sandi">
                        </div>
                        <div class="form-group lanjut">
                            <button type="submit" name="submit" class="">Selanjutnya</button>
                        </div>
                    </form>
                </div>
            </div> -->
        </div>
    </div>
    >>>>>>> refs/remotes/origin/master
</div>

@endsection()