@extends('template')
@section('content')
    <div class="container mt-5">
        <h1 class="fw-bold">Berita</h1>
        <hr>
        <div class="row mt-5">
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
    </div>
@endsection