@extends('template')
@section('content')
<style>
    .berita-content {
        line-height: 1.8;
        font-size: 1.1rem;
    }
    .berita-content p {
        margin-bottom: 1rem;
    }
    .berita-content img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        margin: 1rem 0;
    }
    .btn-berita{
        border: 1px solid  #6D326D;
        color: #6D326D;
        border-radius: 8px;
        padding: 10px 20px;
    }
    .btn-berita:hover{
        background-color: #6D326D;
        color: white;
    }
    .btn-beranda {
        border: 1px solid #003F91;
        color: #003F91;
        border-radius: 8px;
        padding: 10px 20px;
        display: inline-block;
        text-align: center;
    }

    .btn-beranda:hover {
        background-color: #003F91;
        color: white;
    }
</style>
<div class="container py-4">
    <!-- Header Section -->
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Beranda</a></li>
            <li class="breadcrumb-item"><a href="/berita" class="text-decoration-none">Berita</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $news->judul }}</li>
        </ol>
    </nav>

    <div class="row">
        <!-- Konten Utama -->
        <div class="col-lg-8">
            <!-- Header Berita -->
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body">
                    <h1 class="h2 fw-bold text-dark mb-3">{{ $news->judul }}</h1>

                    <div class="d-flex align-items-center text-muted mb-3">
                        <div class="d-flex align-items-center me-4">
                            <i class="far fa-calendar me-2"></i>
                            <small>{{ \Carbon\Carbon::parse($news->tanggal)->translatedFormat('d F Y') }}</small>
                        </div>
                    </div>

                    <!-- Gambar Utama -->
                    <div class="mb-4">
                        <img src="{{ asset('storage/news-image/' . $news->gambar) }}" alt="{{ $news->judul }}"
                            class="img-fluid rounded w-100" style="max-height: 400px; object-fit: cover;">
                    </div>

                    <!-- Isi Berita -->
                    <div class="berita-content">
                        {!! $news->isi !!}
                    </div>
                </div>
            </div>

            <!-- Info Penulis -->
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center"
                                style="width: 50px; height: 50px;">
                                <i class="fa-solid fa-user text-primary"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-1">Ditulis oleh : {{ $news->user->nama }}</h6>
                            <p class="text-muted mb-0 small">Pada {{ \Carbon\Carbon::parse($news->created_at)->translatedFormat('d F Y H:i') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <!-- Berita Terbaru -->
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-header text-white py-3" style="background-color: #003F91;">
                    <h6 class="card-title mb-0">
                        <i class="bi bi-clock me-2"></i>
                        Berita Terbaru
                    </h6>
                </div>
                <div class="card-body">
                    @foreach($terkini as $item)
                        <div class="mb-3 pb-3 border-bottom">
                            <h6 class="mb-1">
                                <a href="{{ route('berita-detail', $item->id) }}" class="text-decoration-none text-dark">
                                    {{ Str::limit($item->judul, 50) }}
                                </a>
                            </h6>
                            <small class="text-muted">
                                {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d M Y') }}
                            </small>
                        </div>
                    @endforeach
                </div>
                <!-- Tombol Aksi -->
                <div class="card border-0">
                    <div class="card-body text-center">
                        <a href="/berita" class="btn btn-berita w-100 w-md-auto d-block d-md-inline-block text-center mb-2">
                            Semua Berita
                        </a>
                        <a href="/" class="btn btn-beranda w-100 w-md-auto d-block d-md-inline-block text-center">
                            Beranda
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Berita Terkait -->
    <div class="row mt-5">
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-light">
                    <h5 class="card-title mb-0">
                        <i class="fa-solid fa-link fs-5 text-dark me-2"></i>
                        Berita Lainnya
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach($berita as $item)
                        <div class="col-md-3 mb-3">
                            <div class="card h-100 border-0 shadow-sm">
                                <img src="{{ asset('storage/news-image/' . $item->gambar) }}"
                                    class="card-img-top" alt="{{ $item->judul }}"
                                    style="height: 150px; object-fit: cover;">
                                <div class="card-body">
                                    <h6 class="card-title">
                                        <a href="{{ route('berita-detail', $item->id) }}" class="text-decoration-none text-dark">
                                            {{ Str::limit($item->judul, 60) }}
                                        </a>
                                    </h6>
                                    <small class="text-muted">
                                        {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d M Y') }}
                                    </small>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
