@extends('template')
@section('content')
    <div class="container mt-4 mt-md-5">
        <h1 class="fw-bold mb-3">Galeri</h1>
        <hr class="mb-4">
        <div class="row">
            @foreach ($galeri as $item)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="h-100">
                        @if ($item->kategeori == 'Foto')
                            <div class="shadow rounded overflow-hidden" style="height: 280px;">
                                <img src="{{ asset('storage/gallery/'.$item->file) }}" 
                                     class="img-fluid w-100 h-100" 
                                     style="object-fit: cover;" 
                                     alt="{{ $item->judul }}">
                            </div>
                        @else
                            <div class="shadow rounded overflow-hidden" style="height: 280px;">
                                <video width="100%" height="100%" controls style="object-fit: cover;">
                                    <source src="{{ asset('storage/gallery/'.$item->file) }}" type="video/mp4">
                                    Browser kamu tidak mendukung video.
                                </video>
                            </div>
                        @endif
                        
                        <div class="mt-3">
                            <h3 class="h5 fw-bold mb-2">{{ $item->judul }}</h3>
                            <p class="text-muted small">{{ $item->keterangan }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection