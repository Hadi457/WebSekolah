@extends('template')
@section('content')
    <div class="container mt-4 mt-md-5">
        <h1 class="fw-bold mb-3">Galeri</h1>
        <hr class="mb-4">
        <div class="row">
            @foreach ($galeri as $item)
                <div class="col-lg-4 col-md-6 mb-5" data-category="{{ $item->kategori }}">
                    <div class="h-100">
                        @if ($item->kategori == 'Foto')
                            <div class="shadow rounded overflow-hidden position-relative" style="height: 250px;">
                                <img src="{{ asset('storage/gallery/'.$item->file) }}" 
                                        class="img-fluid w-100 h-100" 
                                        style="object-fit: cover; transition: transform 0.3s ease;" 
                                        alt="{{ $item->judul }}">
                            </div>
                        @else
                            <div class="shadow rounded overflow-hidden position-relative" style="height: 250px;">
                                <video width="100%" height="100%" controls style="object-fit: cover;">
                                    <source src="{{ asset('storage/gallery/'.$item->file) }}" type="video/mp4">
                                    Browser kamu tidak mendukung video.
                                </video>
                            </div>
                        @endif
                        
                        <div class="mt-3 px-2">
                            <h3 class="h5 fw-bold mb-2 text-dark">{{ $item->judul }}</h3>
                            @if($item->keterangan)
                                <p class="text-muted small mb-0" style="line-height: 1.4;">
                                    {{ Str::limit($item->keterangan, 100) }}
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