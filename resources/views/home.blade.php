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
    <div style="background: url('{{ asset('asset/image/Curve Line.svg')}}'); background-size: cover; background-position: center; ">
        <div class="container text-white p-5">
            <div class="row gap-5">
                <div class="col-lg-5 d-flex flex-column justify-content-center">
                    <h5 class="mb-3">Selamat Datang</h5>
                    <h1 class="mb-3 fw-bold">Masa Depan Gemilang<br>Dimulai dari Sini</h1>
                    <p class="mb-4">
                        SMA Negri 6 Jakarta hadir sebagai tempat tumbuhnya generasi berprestasi. 
                        Kami tidak hanya mengedepankan akademik, tetapi juga karakter, kreativitas, 
                        dan kepedulian sosial untuk menyiapkan siswa menghadapi masa depan.
                    </p>
                    <a href="#news" class="btn btn-primary w-100 w-md-auto" 
                        style="background-color: #6D326D; border: none; border-radius: 20px; padding: 10px 20px; max-width: 220px; min-width: 150px;">
                        Jelajahi Sekolah
                    </a>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center gap-3">
                    <img src="{{asset('asset/image/team-presentation-7-74.svg')}}" class="img-fluid w-80" height="100%" alt="">
                </div>
            </div>
        </div>
    </div>
    <div id="news" class="container">
        <div class="d-flex justify-content-center align-items-center m-5 flex-column">
            <h3 >Berita Umum</h3>
            <div class="m-2" style="background-color: #003F91; width: 200px; height: 3px; border-radius: 20px;"></div>
        </div>
        <div class="row justify-content-center">
            @foreach ($berita as $item)
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card p-3 shadow h-100" style="border: none;">
                        <!-- Gambar dengan fixed height -->
                        <img src="{{ asset('storage/news-image/'.$item->gambar)}}" 
                            alt="{{ $item->judul }}"
                            class="card-img-top"
                            style="height: 180px; object-fit: cover; border-radius: 8px;">
                        
                        <div class="card-body d-flex flex-column">
                            <!-- Judul dengan line clamp -->
                            <h5 class="card-title fw-semibold mb-3" 
                                style="font-size: 1.1rem;
                                    display: -webkit-box;
                                    -webkit-line-clamp: 2;
                                    -webkit-box-orient: vertical;
                                    overflow: hidden;
                                    text-overflow: ellipsis;
                                    line-height: 1.4;
                                    min-height: 2.8rem;">
                                {{ $item->judul }}
                            </h5>
                            
                            <!-- Isi berita dengan formatting yang lebih baik -->
                            <p class="card-text flex-grow-1 mb-3" 
                                style="font-size: 0.95rem;
                                        color: #666;
                                        line-height: 1.5;
                                        display: -webkit-box;
                                        -webkit-line-clamp: 3;
                                        -webkit-box-orient: vertical;
                                        overflow: hidden;
                                        text-overflow: ellipsis;">
                                    {{ $item->isi }}
                            </p>
                            
                            <!-- Tanggal publikasi -->
                            <small class="text-muted mb-2" style="font-size: 0.85rem;">
                                <i class="far fa-calendar me-1"></i>
                                {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}
                            </small>
                        </div>
                        
                        <!-- Tombol -->
                        <div class="card-footer bg-transparent border-0 pt-0">
                            <a href="{{ route('berita-detail', $item->id) }}" 
                                class="btn btn-primary w-100" 
                                style="background-color: #6D326D; 
                                        border: none; 
                                        border-radius: 20px; 
                                        padding: 10px 20px;
                                        font-size: 0.9rem;">
                                Baca Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center align-items-center m-5 flex-column">
            <a href="/berita" class="btn btn-primary w-100 w-md-auto" 
                style="background-color: #6D326D; border: none; border-radius: 20px; padding: 10px 20px; max-width: 220px; min-width: 150px;">
                Lihat Berita
            </a>
        </div>
    </div>
    <div class="container">
        <div class="d-flex justify-content-center align-items-center m-5 flex-column">
            <h3>Guru</h3>
            <div class="m-2" style="background-color: #003F91; width: 200px; height: 3px; border-radius: 20px;"></div>
        </div>
        <div class="row">
            @foreach ($guru as $item)
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="card-guru shadow-lg" style="height: 450px; border-radius:10px; background: linear-gradient(to top, rgb(0, 0, 0), rgba(0,0,0,0)), 
                                    url('{{ asset('storage/foto-teacher/'.$item->foto)}}'); background-size: cover; background-position: center;" class="shadow">
                        <div class="card-body-guru d-flex flex-column justify-content-end align-items-start" style="height: 100%;">
                            <h3 style="font-size: 20px;" class="text-white px-3 fw-semibold mb-1">{{$item->nama_guru}}</h3>
                            <p class="text-white px-3 mb-1">{{$item->nip}}</p>
                            <p class="text-white px-3">{{$item->mapel}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center m-5 align-items-center flex-column">
            <a href="/guru" class="btn btn-primary w-100 w-md-auto" 
                style="background-color: #6D326D; border: none; border-radius: 20px; padding: 10px 20px; max-width: 220px; min-width: 150px;">
                Lihat Guru
            </a>
        </div>
    </div>
    <img src="{{asset('asset/image/wave-haikei (2).svg')}}" class="img-fluid" alt="" style="width: 100%;">
    <div class="p-3 p-md-5" style="background-color: #003F91;">
        <div class="container">
            <div class="text-center mb-4 mb-md-5">
                <h3 class="text-white">Jumlah Siswa dan Guru</h3>
            </div>
            <div class="row justify-content-center g-3 g-lg-0">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="text-center shadow p-5 mx-auto" 
                        style="border-radius: 20px; background-color: #5DA9E9; color: white; max-width: 300px; min-height: 160px;">
                        <h4>Jumlah Guru</h4>
                        <h1 class="fw-bold mt-2">33</h1>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="text-center shadow p-5 mx-auto" 
                        style="border-radius: 20px; background-color: #5DA9E9; color: white; max-width: 300px; min-height: 160px;">
                        <h4>Jumlah Siswa</h4>
                        <h1 class="fw-bold mt-2">333</h1>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="text-center shadow p-5 mx-auto" 
                        style="border-radius: 20px; background-color: #5DA9E9; color: white; max-width: 300px; min-height: 160px;">
                        <h4>Eskul</h4>
                        <h1 class="fw-bold mt-2">33</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="{{asset('asset/image/wave-haikei (3).svg')}}" class="img-fluid" alt="" style="width: 100%;">
    <div class="container">
        <div class="d-flex justify-content-center align-items-center m-5 flex-column">
            <h3>Galeri Sekolah</h3>
            <div class="m-2" style="background-color: #003F91; width: 200px; height: 3px; border-radius: 20px;"></div>
        </div>
        <div class="row justify-content-center">
            @foreach ($galeri as $item)
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="text-center">
                        @if ($item->kategori == 'Foto')
                            <!-- Foto -->
                            <div class="mb-3 shadow-sm" style="height: 250px; border-radius: 10px; overflow: hidden;">
                                <img src="{{ asset('storage/gallery/'.$item->file) }}" 
                                    alt="{{ $item->judul }}"
                                    class="w-100 h-100"
                                    style="object-fit: cover;">
                            </div>
                        @else
                            <!-- Video -->
                            <div class="mb-3 shadow-sm" style="height: 250px; border-radius: 10px; overflow: hidden;">
                                <video width="100%" height="100%" controls style="object-fit: cover;">
                                    <source src="{{ asset('storage/gallery/'.$item->file) }}" type="video/mp4">
                                </video>
                            </div>
                        @endif
                        <!-- Judul di bawah media -->
                        <h6 class="fw-semibold text-dark" style="font-size: 1rem; line-height: 1.4;">
                            {{ $item->judul }}
                        </h6>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center align-items-center m-5 flex-column">
            <a href="/galeri" class="btn btn-primary w-100 w-md-auto" 
                style="background-color: #6D326D; border: none; border-radius: 20px; padding: 10px 20px; max-width: 220px; min-width: 150px;">
                Lihat Galeri
            </a>
        </div>
    </div>
    <div class="container">
        <div class="d-flex justify-content-center align-items-center mt-5 flex-column">
            <h3>Tentang Kami</h3>
            <div class="m-2" style="background-color: #003F91; width: 200px; height: 3px; border-radius: 20px;"></div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 d-flex justify-content-center align-items-center">
                <img src="{{asset('asset/image/undraw_stars_5pgw.svg')}}" class="img-fluid w-75" alt="">
            </div>
            <div class="col-lg-6 col-md-6 d-flex flex-column justify-content-center mt-5">
                <h3 class="mb-3">SMA Negri 6 Jakarta</h3>
                <p>
                    SMA Negri 6 Jakarta adalah institusi pendidikan menengah atas yang berkomitmen untuk memberikan pendidikan berkualitas tinggi kepada siswa-siswinya. 
                    Dengan fasilitas modern dan tenaga pengajar yang berpengalaman, kami berusaha menciptakan lingkungan belajar yang inspiratif dan mendukung perkembangan akademik serta karakter siswa.
                </p>
                <p>
                    Terletak di jantung kota Jakarta, SMA Negri 6 Jakarta menawarkan berbagai program akademik dan ekstrakurikuler yang dirancang untuk mengembangkan potensi siswa secara menyeluruh. 
                    Kami percaya bahwa setiap siswa memiliki bakat unik yang perlu diasah dan dikembangkan untuk mencapai kesuksesan di masa depan.
                <p>
                <p>
                    Bergabunglah dengan kami di SMA Negri 6 Jakarta, di mana masa depan gemilang dimulai dari sini.
                </p>
                <a href="/profile-sekolah" class="btn btn-primary w-100 w-md-auto" 
                    style="background-color: #6D326D; border: none; border-radius: 20px; padding: 10px 20px; max-width: 220px; min-width: 150px;">
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </div>
    </div>
@endsection