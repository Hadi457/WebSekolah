@extends('template')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 col-md-6 d-flex justify-content-center align-items-center">
                <img src="{{asset('asset/image/coach-82.svg')}}" height="100%" class="img-fluid w-75" alt="">
            </div>
            <div class="col-lg-6 col-md-6 d-flex flex-column justify-content-center">
                <h3 class="mb-3">SMA Negri 6 Jakarta</h3>
                <p>
                    SMA Negri 6 Jakarta menawarkan berbagai kegiatan ekstrakurikuler yang dirancang untuk mengembangkan bakat, minat, dan keterampilan siswa di luar lingkungan akademik. 
                    Kegiatan ini tidak hanya memberikan kesempatan bagi siswa untuk mengeksplorasi minat mereka, tetapi juga membantu membangun karakter, kerja sama tim, dan kepemimpinan.
                </p>
                <p>
                    Ekstrakulikuler di SMA Negri 6 Jakarta mencakup berbagai bidang, mulai dari seni, olahraga, hingga teknologi.
                </p>
                <p>
                    Bergabunglah dengan salah satu ekstrakurikuler kami dan temukan potensi terbaik dalam diri Anda!
                </p>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h1 class="fw-bold">Ekstrakurikuler</h1>
        <hr>
        <div class="row mt-5">
            @foreach ($eskul as $item)    
                <div class="col-lg-4 col-md-6 mb-1">
                    <div class="card p-3 shadow" style="height: 100%; border: none;">
                        <img src="{{ asset('storage/extracurricular-image/'.$item->gambar)}}" class="img-fluid"  alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->nama_ekskul}}</h5>
                            <p class="card-text" style="display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
                                {{$item->deskripsi}}
                            </p>
                            <a href="#" class="btn btn-primary p-2" style="background-color: #6D326D; border: none; border-radius: 25px; width: 250px;">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection