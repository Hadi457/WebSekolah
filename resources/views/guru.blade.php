@extends('template')
@section('content')
    <style>
        .card{
            transition: all 0.3s ease;
        }
        .card:hover {
            transform: translateY(-10px);
        }
        .card-body {
            transition: all 0.3s ease;
        }
    </style>
    
    <div class="container mt-4 mt-md-5 mb-4 mb-md-5">
        <div class="text-center mb-4 mb-md-5">
            <h1 class="fw-bold mb-3">Tenaga Pengajar Kami</h1>
            <p class="text-muted mx-auto" style="max-width: 600px;">
                Bertemu dengan guru-guru berkualitas yang siap membimbing Anda menuju kesuksesan
            </p>
        </div>
        
        <div class="row g-3 g-md-4">
            @foreach ($guru as $item)
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-3 mb-md-4">
                    <div class="card shadow-lg h-100 border-0" 
                        style="border-radius: 10px; 
                                background: linear-gradient(to top, rgb(0, 0, 0), rgba(0,0,0,0)), 
                                url('{{ asset('storage/foto-teacher/'.$item->foto)}}'); 
                                background-size: cover; 
                                background-position: center;
                                min-height: 350px;">
                        <div class="card-body d-flex flex-column justify-content-end p-3">
                            <h3 class="text-white fw-semibold mb-1 fs-5 fs-md-4">{{$item->nama_guru}}</h3>
                            <p class="text-white mb-1 small">{{$item->nip}}</p>
                            <p class="text-white small">{{$item->mapel}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection