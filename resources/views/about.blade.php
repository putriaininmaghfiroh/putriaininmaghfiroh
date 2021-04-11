@extends('layout')
@section('content')
<div class="tengah">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/image/1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h3><b>Penyerahan Piala Oleh Kabag Ops Polres Kab. Mojokerto</b></h3>
                                <p></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/image/2.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h3><b>Perlombaan Basket di DBL</b></h3>
                                <p></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/image/3.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h3><b>Peringatan Hari Guru</b></h3>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <h2>Kegiatan SMAN 1 Puri</h2>
            </div>
        </div>
    </div>
</div>

<div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
        <div class="card">
            <img src="/image/smanip1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h2 class="card-title"><em>study tour</em></h2>

            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="/image/smanip2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h2 class="card-title">Kegiatan lomba musikalisasi puisi antar kelas setelah ujian akhir semester</h2>

            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="/image/menyanyi.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h2 class="card-title">Kegiatan lomba drama musikalisasi antar kelas setelah ujian akhir semester</h2>

            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="/image/olahraga guru.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h2 class="card-title">Kegiatan lomba olahraga voli seluruh warga SMAN 1 Puri</h2>

            </div>
        </div>
    </div>
</div>
@endsection