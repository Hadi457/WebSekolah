<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('asset/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('asset/fontawesome/css/all.min.css')}}">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
        <title>{{ $profile->nama_sekolah}}</title>
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
        <div class="container-fluid navbars fixed-top py-2">
            <div class="container">
                <nav class="navbar navbar-expand-lg py-2">
                    <div class="d-flex align-items-center gap-3">
                        <img src="{{ asset('storage/school-profile/' . $profile->logo)}}" class="img-fluid" width="45" height="45" alt="">
                        <h3 class="text-white mb-0 d-none d-sm-block">{{ $profile->nama_sekolah }}</h3>
                        <h3 class="text-white mb-0 d-block d-sm-none">{{ $profile->nama_sekolah }}</h3>
                    </div>
                    <!-- tombol toggler -->
                    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span>
                            <i class="text-white fa-solid fa-bars"></i>
                        </span>
                    </button>
                    <!-- menu -->
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto text-center text-lg-start">
                            <li class="nav-item">
                                <a class="nav-link px-2 px-lg-3" href="/">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-2 px-lg-3" href="/berita">Berita</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-2 px-lg-3" href="/eskul">Ekstrakulikuler</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-2 px-lg-3" href="/galeri">Galeri</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-2 px-lg-3" href="/guru">Guru</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-2 px-lg-3" href="/profile-sekolah">Profil Sekolah</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-2 px-lg-3" href="/kontak">Kontak</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="container-fluid mt-4 pt-5 pe-0 ps-0 ">
            @yield('content')
        </div>

        <footer class="footer text-white pt-5 pb-3 mt-5" style="background-color: #003F91">
            <div class="container">
                <div class="row text-center text-md-start">
                    <div class="col-12 col-md-4 mb-4 mb-md-0">
                        <h5 class="fw-bold">Tentang Kami</h5>
                        <p class="small">
                        {{ $profile->nama_sekolah }} adalah institusi pendidikan yang berkomitmen untuk memberikan pendidikan berkualitas tinggi dan membentuk karakter siswa menjadi individu yang berprestasi dan bertanggung jawab.
                        </p>
                    </div>
                    <div class="col-12 col-md-4 mb-4 mb-md-0">
                        <h5 class="fw-bold">Navigasi</h5>
                        <ul class="list-unstyled small">
                            <li class="mb-1"><a href="#" class="text-white text-decoration-none">Beranda</a></li>
                            <li class="mb-1"><a href="#" class="text-white text-decoration-none">Profil Sekolah</a></li>
                            <li class="mb-1"><a href="#" class="text-white text-decoration-none">Ekstrakulikuler</a></li>
                            <li class="mb-1"><a href="#" class="text-white text-decoration-none">Galeri</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-4 mb-4 mb-md-0">
                        <h5 class="fw-bold">Kontak</h5>
                        <ul class="list-unstyled small">
                            <li class="mb-1">Email : info@sma{{ $profile->nama_sekolah }}.sch.id</li>
                            <li class="mb-1">Telpon : {{ $profile->kontak }}</li>
                            <li class="mb-1">Alamat : {{ $profile->alamat }}</li>
                            <li class="mt-3 mb-2">Ikuti Sosial Media Kami</li>
                        </ul>
                        <div class="d-flex gap-3 justify-content-center justify-content-md-start social-icons">
                            <a href="#" class="text-white text-decoration-none"><i class="fab fa-facebook fa-lg"></i></a>
                            <a href="#" class="text-white text-decoration-none"><i class="fab fa-twitter fa-lg"></i></a>
                            <a href="#" class="text-white text-decoration-none"><i class="fab fa-instagram fa-lg"></i></a>
                            <a href="#" class="text-white text-decoration-none"><i class="fab fa-youtube fa-lg"></i></a>
                        </div>
                    </div>
                </div>
                <hr class="border-white my-4">
                <p class="text-center m-0 small">&copy; 2025 {{ $profile->nama_sekolah }}. All rights reserved.</p>
            </div>
        </footer>
    </body>
</html>
<script src="{{asset('asset/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
