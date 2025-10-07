@extends('template')
@section('content')
    {{-- <!-- About Section -->
    <div class="container mt-4 mt-md-5">
        <div class="row align-items-center g-4 g-md-5">
            <div class="col-12 col-lg-6 text-center">
                <img src="{{asset('asset/image/coach-82.svg')}}" class="img-fluid w-75 w-md-50 w-lg-75" alt="">
            </div>
            <div class="col-12 col-lg-6">
                <h1 class="fw-semibold mb-3">SMA Negri 6 Jakarta</h1>
                <p class="mb-3">
                    SMA Negri 6 Jakarta menawarkan berbagai kegiatan ekstrakurikuler yang dirancang untuk mengembangkan bakat, minat, dan keterampilan siswa di luar lingkungan akademik.
                    Kegiatan ini tidak hanya memberikan kesempatan bagi siswa untuk mengeksplorasi minat mereka, tetapi juga membantu membangun karakter, kerja sama tim, dan kepemimpinan.
                </p>
                <p class="mb-3">
                    Ekstrakulikuler di SMA Negri 6 Jakarta mencakup berbagai bidang, mulai dari seni, olahraga, hingga teknologi.
                </p>
                <p class="mb-0">
                    Bergabunglah dengan salah satu ekstrakurikuler kami dan temukan potensi terbaik dalam diri Anda!
                </p>
            </div>
        </div>
    </div> --}}

    <!-- Extracurricular Section -->
    <div class="container mt-4 mt-md-5">
        <div class="text-center mb-4 mb-md-5">
            <h1 class="fw-bold mb-3">Ekstrakurikuler {{ $profile->nama_sekolah }}</h1>
            <p class="text-muted mx-auto" style="max-width: 600px;">
                SMA 1 menyediakan berbagai kegiatan ekstrakurikuler untuk mengembangkan potensi,
                bakat, dan minat siswa. Melalui kegiatan ini, siswa belajar bekerja sama, berprestasi, dan berkarakter.
            </p>
        </div>

        <div class="row g-3 g-md-4">
            @foreach ($eskul as $item)
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-3 mb-md-4">
                    <div class="card shadow h-100 border-0">
                        <!-- Gambar -->
                        <div class="p-3 pb-0">
                            <img src="{{ asset('storage/extracurricular-image/'.$item->gambar)}}"
                                alt="{{ $item->judul }}"
                                class="card-img-top w-100"
                                style="height: 180px; object-fit: cover; border-radius: 8px;">
                        </div>

                        <div class="card-body d-flex flex-column pt-0 mt-3">
                            <!-- Judul -->
                            <h5 class="card-title fw-semibold mb-2 text-truncate">
                                {{ $item->nama_eskul }}
                            </h5>

                            <!-- Deskripsi Eskul -->
                            <p class="card-text flex-grow-1 mb-2 text-muted small"
                                style="display: -webkit-box;
                                        -webkit-line-clamp: 3;
                                        -webkit-box-orient: vertical;
                                        overflow: hidden;">
                                {{ $item->deskripsi }}
                            </p>

                            <!-- Jadwal Latihan -->
                            <small class="text-muted mb-1">
                                <i class="fa-solid fa-chalkboard-user me-1"></i>
                                {{ $item->pembina }}
                            </small>
                            <!-- Jadwal Latihan -->
                            <small class="text-muted mb-1">
                                <i class="far fa-calendar me-1"></i>
                                {{ $item->jadwal_latihan }}
                            </small>
                        </div>

                        <!-- Tombol -->
                        <div class="card-footer bg-transparent border-0 pt-0 pb-3">
                            <a href="{{ route('eskul-detail', $item->id) }}"
                                class="btn btn-primary w-100"
                                style="background-color: #6D326D; border: none; border-radius: 20px;">
                                Lihat Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
