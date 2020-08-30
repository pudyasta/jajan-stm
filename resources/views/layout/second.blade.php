<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/daftar.css">
    <link rel="stylesheet" href="/css/font.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light py-3">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="/img/ikon/logo/png/1.png" alt=""></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">




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