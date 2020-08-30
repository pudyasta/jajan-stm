<div class="" style="text-align: center; width: 360px;margin: auto;">
    <div class="" style="margin: 5px ;">
        <img src="{{ $message->embed(public_path('/img/email/head.png')) }}" alt="">

        <div class="" style="background-color: #fff;">
            <img src="{{ $message->embed(public_path('/img/email/logo.png')) }}" style="margin-top: 40px;" alt="asd">
            <h4 style="font-family: Arial, Helvetica, sans-serif; color: #C4007C;">Dear {{$user['name']}},</h4>
            <p style="font-family: Arial, Helvetica, sans-serif; color: #434343; margin-bottom: 40px; font-size: 14px;">
                Tinggal satu langkah
                lagi nih, klik tombol
                dibawah ini untuk memverifikasi akun kamu!</p>
            <a href="{{route('confirmDone', ['email' => $user->email, 'token'=>$user->remember_token])}}" style="background-color: #C4007C; padding: 12px 33px; border-radius: 5px; color: #fff; text-decoration: none; font-family: Arial, Helvetica; font-size: 14px; font-weight: 600;">Verifikasi
                Akun</a>
            <h5 style="font-family: Arial, Helvetica, sans-serif; color: #C4007C;text-align: left; margin-top: 50px;">*Link
                valid untuk 24 jam
            </h5>
            <h5 style="font-family: Arial, Helvetica, sans-serif; color: #434343bb;text-align: left; margin-top: -15px;">
                *Jika
                merasa tidak mendaftarkan akun, abaikan email ini</h5>

        </div>


        <div class="">
            <h5 style="font-family: Arial, Helvetica, sans-serif; color: #434343bb;text-align: left; padding-top: 15px;text-align: center;">
                Terima kasih telah menggunakan layanan kami,</h5>
            <h5 style="font-family: Arial, Helvetica, sans-serif; color: #C4007C; margin-top: -10px;">
                selamat berbelanja!
            </h5>
            <hr style="color:#4343434f">
            <h5 style="font-family: Arial, Helvetica, sans-serif; color: #434343bb;">

                Untuk layanan pelanggan hubungi jajandeveloperteam@gmail.com</h5>
        </div>
        <img src="{{ $message->embed(public_path('/img/email/footer.png')) }}" alt="">
    </div>
</div>