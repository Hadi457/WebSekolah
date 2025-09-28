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
    <div class="container mt-5 mb-5">
        <h1 class="fw-bold text-center mb-4">Tenaga Pengajar Kami</h1>
        <p class="text-center text-muted mb-5">Bertemu dengan guru-guru berkualitas yang siap membimbing Anda menuju kesuksesan</p>
        <div class="row mt-5">
            @foreach ($guru as $item)
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="card shadow-lg" style="border: none; height: 400px; border-radius: 10px; background: linear-gradient(to top, rgb(0, 0, 0), rgba(0,0,0,0)), 
                    url('{{ asset('storage/foto-teacher/'.$item->foto)}}'); background-size: cover; background-position: center;" class="shadow">
                        <div class="card-body d-flex flex-column justify-content-end align-items-start" style="height: 100%;">
                            <h3 style="font-size: 20px;" class="text-white px-3 fw-semibold mb-1">{{$item->nama_guru}}</h3>
                            <p class="text-white px-3 mb-1">{{$item->nip}}</p>
                            <p class="text-white px-3">{{$item->mapel}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection