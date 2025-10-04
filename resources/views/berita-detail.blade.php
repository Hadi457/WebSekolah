@extends('template')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <article>
                <div class="d-flex">
                    <!-- Tombol Kembali -->
                    <a href="{{ route('berita') }}" class="mb-4 me-3 d-flex align-items-center justify-content-center" style="text-decoration: none;">
                        <i class="fa-solid fa-arrow-left text-black fs-3"></i>
                    </a>
                    <!-- Judul Berita -->
                    <h1 class="fw-bold mb-3">{{ $berita->judul }}</h1>
                </div>
                
                <!-- Meta Informasi -->
                <div class="d-flex align-items-center text-muted mb-4">
                    <span class="me-3">
                        <i class="far fa-calendar me-1"></i>
                        {{ \Carbon\Carbon::parse($berita->tanggal)->format('d F Y') }}
                    </span>
                    <span>
                        <i class="far fa-user me-1"></i>
                        {{ $berita->user->name ?? 'Admin' }}
                    </span>
                </div>

                <!-- Gambar Berita -->
                <div class="mb-4">
                    <img src="{{ asset('storage/news-image/'.$berita->gambar) }}" 
                        alt="{{ $berita->judul }}" 
                        class="img-fluid rounded w-100"
                        style="max-height: 400px; object-fit: cover;">
                </div>

                <!-- Isi Berita -->
                <div class="content">
                    {{ $berita->isi }}
                </div>
            </article>
        </div>
    </div>
</div>
@endsection