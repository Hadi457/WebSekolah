@extends('template')
@section('content')
    <style>
        .card-guru{
            transition: all 0.3s ease;
        }
        .card-guru:hover {
            transform: translateY(-10px);
        }
        .card-body-guru {
            transition: all 0.3s ease;
        }
    </style>

    <!-- Hero Section -->
    <div style="background: url('{{ asset('asset/image/Curve Line.svg')}}'); background-size: cover; background-position: center;">
        <div class="container text-white p-3 p-md-4 p-lg-5">
            <div class="row align-items-center g-4 g-lg-5">
                <div class="col-12 col-lg-5">
                    <h5 class="mb-2 mb-md-3">Selamat Datang</h5>
                    <h1 class="mb-2 mb-md-3 fw-bold display-6 display-md-5 display-lg-4">Masa Depan Gemilang<br>Dimulai dari Sini</h1>
                    <p class="mb-3 mb-md-4 fs-6 fs-md-5">
                        {{ $profile->nama_sekolah }} hadir sebagai tempat tumbuhnya generasi berprestasi.
                        Kami tidak hanya mengedepankan akademik, tetapi juga karakter, kreativitas,
                        dan kepedulian sosial untuk menyiapkan siswa menghadapi masa depan.
                    </p>
                    <a href="#news" class="btn btn-primary w-100 w-md-auto d-block d-md-inline-block text-center"
                        style="background-color: #6D326D; border: none; border-radius: 20px; padding: 10px 20px;">
                        Jelajahi Sekolah
                    </a>
                </div>
                <div class="col-12 col-lg-6 offset-lg-1 text-center text-lg-start">
                    <img src="{{asset('asset/image/team-presentation-7-74.svg')}}" class="img-fluid w-75 w-md-50 w-lg-75" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- Berita Section -->
    <div id="news" class="container">
        <div class="text-center my-4 my-md-5">
            <h3 class="mb-2">Berita Terbaru</h3>
            <div class="mx-auto" style="background-color: #003F91; width: 200px; height: 3px; border-radius: 20px;"></div>
        </div>
        <div class="row justify-content-center g-3 g-md-4">
            @foreach ($berita as $item)
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-3 mb-md-4">
                    <div class="card shadow h-100 border-0">
                        <div class="p-3">
                            <img src="{{ asset('storage/news-image/'.$item->gambar)}}"
                                alt="{{ $item->judul }}"
                                class="card-img-top w-100"
                                style="height: 180px; object-fit: cover; border-radius: 8px;">
                        </div>

                        <div class="card-body d-flex flex-column pt-0">
                            <h5 class="card-title fw-semibold mb-2 text-truncate"
                                style="font-size: 1.1rem;">
                                {{ $item->judul }}
                            </h5>

                            <p class="card-text flex-grow-1 mb-2 text-muted small"
                                style="display: -webkit-box;
                                        -webkit-line-clamp: 3;
                                        -webkit-box-orient: vertical;
                                        overflow: hidden;">
                                {{ $item->isi }}
                            </p>

                            <small class="text-muted mb-3">
                                <i class="far fa-calendar me-1"></i>
                                {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}
                            </small>
                        </div>

                        <div class="card-footer bg-transparent border-0 pt-0 pb-3">
                            <a href="{{ route('berita-detail', $item->id) }}"
                                class="btn btn-primary w-100"
                                style="background-color: #6D326D; border: none; border-radius: 20px;">
                                Baca Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center my-4 my-md-5">
            <a href="/berita" class="btn btn-primary px-5 w-md-auto d-block d-md-inline-block"
                style="background-color: #6D326D; border: none; border-radius: 20px; padding: 10px 20px;">
                Lihat Berita
            </a>
        </div>
    </div>

    <!-- Guru Section -->
    <div class="container">
        <div class="text-center my-4 my-md-5">
            <h3 class="mb-2">Guru</h3>
            <div class="mx-auto" style="background-color: #003F91; width: 200px; height: 3px; border-radius: 20px;"></div>
        </div>
        <div class="row g-3 g-md-4 justify-content-center">
            @foreach ($guru as $item)
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-3 mb-md-4">
                    <div class="card-guru shadow-lg h-100"
                        style="border-radius:10px;
                                background: linear-gradient(to top, rgb(0, 0, 0), rgba(0,0,0,0)),
                                url('{{ asset('storage/foto-teacher/'.$item->foto)}}');
                                background-size: cover;
                                background-position: center;
                                min-height: 300px;">
                        <div class="card-body-guru d-flex flex-column justify-content-end align-items-start p-3" style="height: 100%">
                            <h3 class="text-white fw-semibold mb-1 fs-5 fs-md-4">{{$item->nama_guru}}</h3>
                            <p class="text-white mb-1 small">{{$item->nip}}</p>
                            <p class="text-white small">{{$item->mapel}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center my-4 my-md-5">
            <a href="/guru" class="btn btn-primary px-5 w-md-auto d-block d-md-inline-block"
                style="background-color: #6D326D; border: none; border-radius: 20px; padding: 10px 20px;">
                Lihat Guru
            </a>
        </div>
    </div>

    <!-- Stats Section -->
    <img src="{{asset('asset/image/wave-haikei (2).svg')}}" class="img-fluid w-100" alt="">
    <div class="p-3 p-md-4 p-lg-5" style="background-color: #003F91;">
        <div class="container">
            <div class="text-center mb-4 mb-md-5">
                <h3 class="text-white">Jumlah Siswa dan Guru</h3>
            </div>
            <div class="row justify-content-center g-3 g-md-4 g-lg-0">
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="text-center shadow p-4 p-md-5 mx-auto h-100"
                        style="border-radius: 20px; background-color: #5DA9E9; color: white; max-width: 300px;">
                        <h4 class="fs-5 fs-md-4">Jumlah Guru</h4>
                        <h1 class="fw-bold mt-2 display-6 display-md-5">{{$gurucount->count()}}</h1>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="text-center shadow p-4 p-md-5 mx-auto h-100"
                        style="border-radius: 20px; background-color: #5DA9E9; color: white; max-width: 300px;">
                        <h4 class="fs-5 fs-md-4">Jumlah Siswa</h4>
                        <h1 class="fw-bold mt-2 display-6 display-md-5">{{$siswacount->count()}}</h1>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="text-center shadow p-4 p-md-5 mx-auto h-100"
                        style="border-radius: 20px; background-color: #5DA9E9; color: white; max-width: 300px;">
                        <h4 class="fs-5 fs-md-4">Eskul</h4>
                        <h1 class="fw-bold mt-2 display-6 display-md-5">{{$eskulcount->count()}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="{{asset('asset/image/wave-haikei (3).svg')}}" class="img-fluid w-100" alt="">

    <!-- Galeri Section -->
    <div class="container">
        <div class="text-center my-4 my-md-5">
            <h3 class="mb-2">Galeri Sekolah</h3>
            <div class="mx-auto" style="background-color: #003F91; width: 200px; height: 3px; border-radius: 20px;"></div>
        </div>
        <div class="row justify-content-center g-3 g-md-4">
            @foreach ($galeri as $item)
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-3 mb-md-4">
                    <div class="text-center">
                        <div class="mb-3 shadow-sm overflow-hidden rounded" style="height: 200px;">
                            @if ($item->kategori == 'Foto')
                                <img src="{{ asset('storage/gallery/'.$item->file) }}"
                                    alt="{{ $item->judul }}"
                                    class="w-100 h-100"
                                    style="object-fit: cover;">
                            @else
                                <video class="w-100 h-100" controls style="object-fit: cover;">
                                    <source src="{{ asset('storage/gallery/'.$item->file) }}" type="video/mp4">
                                </video>
                            @endif
                        </div>
                        <h6 class="fw-semibold text-dark fs-6">
                            {{ $item->judul }}
                        </h6>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center my-4 my-md-5">
            <a href="/galeri" class="btn btn-primary px-5 w-md-auto d-block d-md-inline-block"
                style="background-color: #6D326D; border: none; border-radius: 20px; padding: 10px 20px;">
                Lihat Galeri
            </a>
        </div>
    </div>

    <!-- About Section -->
    <div class="container">
        <div class="text-center my-4 my-md-5">
            <h3 class="mb-2">Tentang Kami</h3>
            <div class="mx-auto" style="background-color: #003F91; width: 200px; height: 3px; border-radius: 20px;"></div>
        </div>
        <div class="row align-items-center g-4 g-md-5">
            <div class="col-12 col-lg-6 text-center">
                <img src="{{asset('asset/image/undraw_stars_5pgw.svg')}}" class="img-fluid w-75 w-md-50 w-lg-75" alt="">
            </div>
            <div class="col-12 col-lg-6">
                <h3 class="mb-3">{{ $profile->nama_sekolah }}</h3>
                <p class="mb-3">
                    {{ $profile->nama_sekolah }} adalah institusi pendidikan menengah atas yang berkomitmen untuk memberikan pendidikan berkualitas tinggi kepada siswa-siswinya.
                    Dengan fasilitas modern dan tenaga pengajar yang berpengalaman, kami berusaha menciptakan lingkungan belajar yang inspiratif dan mendukung perkembangan akademik serta karakter siswa.
                </p>
                <p class="mb-3">
                    Terletak di jantung kota Jakarta, {{ $profile->nama_sekolah }} menawarkan berbagai program akademik dan ekstrakurikuler yang dirancang untuk mengembangkan potensi siswa secara menyeluruh.
                    Kami percaya bahwa setiap siswa memiliki bakat unik yang perlu diasah dan dikembangkan untuk mencapai kesuksesan di masa depan.
                </p>
                <p class="mb-4">
                    Bergabunglah dengan kami di {{ $profile->nama_sekolah }}, di mana masa depan gemilang dimulai dari sini.
                </p>
                <a href="/profile-sekolah" class="btn btn-primary px-5 w-md-auto d-block d-md-inline-block text-center"
                    style="background-color: #6D326D; border: none; border-radius: 20px; padding: 10px 20px;">
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </div>
    </div>
@endsection
