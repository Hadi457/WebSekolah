<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('asset/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('asset/fontawesome/css/all.min.css')}}">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
        <title>SMA 2 Singaparna</title>
        <style>
            body {
                font-family: 'Poppins', sans-serif;
            }
            .navbars {
                background-color: #003F91;
            }
            .nav-link {
                color: white;

            }
            .nav-link:hover {
                color: #5DA9E9;
            }
            
        </style>
    </head>
    <body>
        <div class="container-fluid navbars fixed-top p-2">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center p-3 navbar navbar-expand-lg">
                    <div class="d-flex align-items-center gap-3 justify-content-center">
                        <img src="{{ asset('asset/image/sman6logo.png')}}" class="img-fluid" width="50" height="50" alt="">
                        <h3 class="text-white mb-0">SMA Negri 6 Jakarta</h3>
                    </div>
                    <!-- tombol toggler -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span>
                            <i class="text-white fa-solid fa-bars"></i>
                        </span>
                    </button>
                    <!-- menu -->
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto text-white">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/berita">Berita</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/eskul">Ekstrakulikuler</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/galeri">Galeri</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/guru">Guru</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/profile-sekolah">Profil Sekolah</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/kontak">Kontak</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="margin-top: 97px; padding-top: 1px; padding-left: 0; padding-right: 0; overflow: hidden;">
            @yield('content')
        </div>
        <footer class="footer mt-5 text-white pt-5 pb-3" style="background-color: #003F91">
            <div class="container">
                <div class="row text-center text-md-start">
                    <div class="col-md-4 mb-4">
                        <h5 class="fw-bold">Tentang Kami</h5>
                        <p>
                        SMA N 6 Jakarta adalah institusi pendidikan yang berkomitmen untuk memberikan pendidikan berkualitas tinggi dan membentuk karakter siswa menjadi individu yang berprestasi dan bertanggung jawab.
                        </p>
                    </div>
                    <div class="col-md-4 mb-4">
                        <h5 class="fw-bold">Navigasi</h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white text-decoration-none">Beranda</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Profil Sekolah</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Ekstrakulikuler</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Galeri</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 mb-4">
                        <h5 class="fw-bold">Kontak</h5>
                        <ul class="list-unstyled">
                            <li>Email : info@sman6jkt.sch.id</li>
                            <li>Telpon : 021-7208762</li>
                            <li>Alamat : Jl. Mahakam 1 Blok C No. 2</li>
                            <li class="mt-3">Ikuti Sosial Media Kami</li>
                        </ul>
                        <div class="d-flex gap-3 justify-content-center justify-content-md-start">
                            <a href="#" class="text-white"><i class="fab fa-facebook fa-2x"></i></a>
                            <a href="#" class="text-white"><i class="fab fa-twitter fa-2x"></i></a>
                            <a href="#" class="text-white"><i class="fab fa-instagram fa-2x"></i></a>
                            <a href="#" class="text-white"><i class="fab fa-youtube fa-2x"></i></a>
                        </div>
                    </div>
                </div>
                <hr class="border-white">
                <p class="text-center m-0">&copy; 2025 SMA Negri 6 Jakarta. All rights reserved.</p>
            </div>
        </footer>
    </body>
</html>
<script src="{{asset('asset/bootstrap/js/bootstrap.bundle.min.js')}}"></script>