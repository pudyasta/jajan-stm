$(window).on("mousemove", function () {
    let lebar = $(window.innerWidth);
    lebar = lebar[0];
    if (lebar < 980 && lebar > 750) {
        $(".product")
            .removeClass("col || col-6")
            .addClass("col-4");
        $(".btn-cat")
            .removeClass("col || col-6")
            .addClass("col-4");
    } else if (lebar < 750) {
        $(".product")
            .removeClass("col-4 || col")
            .addClass("col-6");
    } else {
        $(".product")
            .removeClass("col-6 || col-4")
            .addClass("col");
    }
});

(function () {
    document.querySelector(".daftar").addEventListener("submit", function (e) {
        e.preventDefault();
        $('.spin').css('display', 'inline');
        axios
            .post(this.action, {
                name: document.querySelector(".reg-nama").value,
                username: document.querySelector(".reg-uname").value,
                email: document.querySelector(".reg-email").value,
                password: document.querySelector(".reg-pass").value,
                password_confirmation: document.querySelector(".reg-passcom")
                    .value
            })
            .then(e => {
                const email = JSON.parse(e.config.data);
                $('.first-page').html(`<div class="form-card" id="msform">
                <div class=" text-center">
                    <h1 class="judul-daftar ">Sedikit lagi..</h1>
                    <p style="margin-bottom:0;" class="judul-item">Konfirmasi email kamu untuk memulai berbelanja</p>
                </div>
                <div class="info-proses justify-content-center">
                    <ul id="progressbar">
                        <li id="daftar" class="active"></li>
                        <li id="konfirmasi" class="active"></li>
                        <li id="selesai"></li>
                    </ul>
                </div>
                <form class="daftar justify-content-center">
                    <h6 class="judul-item">Pastikan email yang kamu masukkan sudah benar ya</h6>
    
                    <input type="text" class="form-control" name="email" placeholder="Email" value="`+ email.email + `" />
                    <a href=""><small id="emailHelp" class="form-text kirim-kode">Kirim ulang link verifikasi</small></a>
    
                </form>
            </div>`)
                $('.spin').css('display', 'none');
            })
            .catch(e => {
                const error = e.response.data.errors;
                if (error.name != undefined) {
                    $(".reg-nama").addClass("is-invalid");
                    $(".error-name").html(error.name);
                    $('.spin').css('display', 'none');
                } else {
                    $(".reg-nama").removeClass("is-invalid");
                    $(".error-name").html("");
                }
                if (error.username != undefined) {
                    $(".reg-uname").addClass("is-invalid");
                    $(".error-uname").html(error.username);
                    $('.spin').css('display', 'none');

                } else {
                    $(".reg-uname").removeClass("is-invalid");
                    $(".error-uname").html("");
                }
                if (error.email != undefined) {
                    $(".reg-email").addClass("is-invalid");
                    $(".error-email").html(error.username);
                    $('.spin').css('display', 'none');

                } else {
                    $(".reg-email").removeClass("is-invalid");
                    $(".error-email").html("");
                }
                if (error.password != undefined) {
                    $(".reg-pass").addClass("is-invalid");
                    $(".error-pass").html(error.password);
                    $('.spin').css('display', 'none');

                } else {
                    $(".reg-pass").removeClass("is-invalid");
                    $(".error-pass").html("");
                }
            });
    });
})();

