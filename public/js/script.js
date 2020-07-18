$(window).on("mousemove", function () {
    let lebar = $(window.innerWidth);
    lebar = lebar[0];
    if (lebar < 980 && lebar > 750) {
        $(".product").removeClass("col || col-6").addClass("col-4");
        $(".btn-cat").removeClass("col || col-6").addClass("col-4");
    } else if (lebar < 750) {
        $(".product").removeClass("col-4 || col").addClass("col-6");
    } else {
        $(".product").removeClass("col-6 || col-4").addClass("col");
    }
});

(function () {
    document.querySelector(".daftar").addEventListener("submit", function (e) {
        e.preventDefault();
        axios
            .post(this.action, {
                name: document.querySelector(".reg-nama").value,
                username: document.querySelector(".reg-uname").value,
                password: document.querySelector(".reg-pass").value,
                password_confirmation: document.querySelector(".reg-passcom")
                    .value,
            })
            .then((e) => {
                $(".first-page").css("display", "none");
                $(".second-page").css("display", "inline");
            })
            .catch((e) => {
                const error = e.response.data.errors;
                console.log(error);
                if (error.name != undefined) {
                    $(".reg-nama").addClass("is-invalid");
                    $(".error-name").html(error.name);
                } else {
                    $(".reg-nama").removeClass("is-invalid");
                    $(".error-name").html("");
                }
                if (error.username != undefined) {
                    $(".reg-uname").addClass("is-invalid");
                    $(".error-uname").html(error.username);
                } else {
                    $(".reg-uname").removeClass("is-invalid");
                    $(".error-uname").html("");
                }
                if (error.password != undefined) {
                    $(".reg-pass").addClass("is-invalid");
                    $(".error-pass").html(error.password);
                } else {
                    $(".reg-pass").removeClass("is-invalid");
                    $(".error-pass").html("");
                }
            });
    });
})();
