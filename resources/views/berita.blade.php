@extends('template')
@section('content')
    <div class="container mt-5">
        <h1 class="fw-bold">Berita</h1>
        <hr>
        <div class="row mt-5">
            @foreach ($berita as $item)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card p-3 shadow" style="height: 100%; border: none;">
                        <img src="{{ asset('storage/news-image/'.$item->gambar)}}" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">{{$item->judul}}</h5>
                            <p class="card-text" style="display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
                                {{$item->isi}}
                            </p>
                        </div>
                        <div class="p-1">
                            <a href="#" class="btn btn-primary p-2" style="background-color: #6D326D; border: none; border-radius: 25px; width: 250px;">
                                Baca Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection