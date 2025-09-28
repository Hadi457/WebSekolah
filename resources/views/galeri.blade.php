@extends('template')
@section('content')
    <div class="container mt-5">
        <h1 class="fw-bold">Galeri</h1>
        <hr>
        <div class="row mt-5">
            @foreach ($galeri as $item)
                <div class="col-lg-4 col-md-6 mb-4 d-flex flex-column justify-content-center">
                    @if ($item->kategeori == 'Foto')
                        {{-- Jika kategori Foto --}}
                        <div style="height: 350px; border-radius:10px; overflow:hidden; position:relative;">
                            <img src="{{ asset('storage/gallery/'.$item->file) }}" height="100%" width="100%" class="img-fluid" style="object-fit: contain" alt="">
                        </div>
                    @else
                        {{-- Jika kategori Video --}}
                        <div style="height: 350px; border-radius:10px; overflow:hidden; position:relative;">
                            <video width="100%" height="100%" controls style="object-fit: cover;">
                                <source src="{{ asset('storage/gallery/'.$item->file) }}" type="video/mp4">
                                Browser kamu tidak mendukung video.
                            </video>
                        </div>
                    @endif
                    <h3 style="margin-top: 20px;">{{ $item->judul }}</h3>
                    <p>{{ $item->keterangan }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
