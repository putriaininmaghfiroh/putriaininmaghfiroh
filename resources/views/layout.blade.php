<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container-fluid">
            <img src="/image/logo.png" width="50px" height="60px" alt="">
            <a class="navbar-brand" href="/">SMAN 1 PURI MOJOKERTO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">Kegiatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pegawai">Kesiswaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/hubungi">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


</body>

</html>