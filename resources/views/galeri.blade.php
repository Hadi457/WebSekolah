@extends('template')
@section('content')
    <div class="container mt-4 mt-md-5">
        <div class="text-center mb-4 mb-md-5">
            <h1 class="fw-bold mb-3">Galeri SMA 6 Jakarta</h1>
            <p class="text-muted mx-auto" style="max-width: 600px;">
                Kumpulan dokumentasi kegiatan, prestasi, dan momen berharga di lingkungan SMA Negeri 6 Jakarta. 
                Setiap gambar adalah cerita tentang semangat, kebersamaan, dan dedikasi warga sekolah.
            </p>
        </div>
        
        <div class="row g-3 g-md-4">
            @foreach ($galeri as $item)
                <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-md-4" data-category="{{ $item->kategori }}">
                    <div class="h-100">
                        @if ($item->kategori == 'Foto')
                            <div class="shadow rounded overflow-hidden" style="height: 250px;">
                                <img src="{{ asset('storage/gallery/'.$item->file) }}" 
                                    class="img-fluid w-100 h-100" 
                                    style="object-fit: cover; transition: transform 0.3s ease;" 
                                    alt="{{ $item->judul }}">
                            </div>
                        @else
                            <div class="shadow rounded overflow-hidden" style="height: 250px;">
                                <video class="w-100 h-100" controls style="object-fit: cover;">
                                    <source src="{{ asset('storage/gallery/'.$item->file) }}" type="video/mp4">
                                    Browser kamu tidak mendukung video.
                                </video>
                            </div>
                        @endif
                        
                        <div class="mt-3 px-2">
                            <h3 class="h5 fw-bold mb-2 text-dark text-truncate">{{ $item->judul }}</h3>
                            @if($item->keterangan)
                                <p class="text-muted small mb-2" style="line-height: 1.4; 
                                                                    display: -webkit-box;
                                                                    -webkit-line-clamp: 2;
                                                                    -webkit-box-orient: vertical;
                                                                    overflow: hidden;">
                                    {{ $item->keterangan }}
                                </p>
                            @endif
                            <!-- Tanggal upload -->
                            <small class="text-muted">
                                <i class="far fa-calendar me-1"></i>
                                {{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }}
                            </small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection