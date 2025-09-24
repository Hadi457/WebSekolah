@extends('template')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col d-flex justify-content-center align-items-center">
                <img src="{{asset('asset/image/coach-82.svg')}}" width="450" height="450" style="object-fit: contain" alt="">
            </div>
            <div class="col d-flex flex-column justify-content-center">
                <h3 class="mb-3">SMA Negri 2 Singaparna</h3>
                <p>
                    SMA Negri 2 Singaparna menawarkan berbagai kegiatan ekstrakurikuler yang dirancang untuk mengembangkan bakat, minat, dan keterampilan siswa di luar lingkungan akademik. 
                    Kegiatan ini tidak hanya memberikan kesempatan bagi siswa untuk mengeksplorasi minat mereka, tetapi juga membantu membangun karakter, kerja sama tim, dan kepemimpinan.
                </p>
                <p>
                    Ekstrakulikuler di SMA Negri 2 Singaparna mencakup berbagai bidang, mulai dari seni, olahraga, hingga teknologi.
                </p>
                <p>
                    Bergabunglah dengan salah satu ekstrakurikuler kami dan temukan potensi terbaik dalam diri Anda!
                </p>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h1 class="fw-bold">Ekstrakulikuler</h1>
        <hr>
        <div class="row g-4 d-flex justify-content-center">
            <div class="col mb-1">
                <div class="card p-3 shadow" style="width: 415px; height: 500px; border: none;">
                    <img src="{{ asset('asset/image/1.jpg')}}"  alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Pramuka</h5>
                    <p class="card-text" style="display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
                        Kegiatanaaaaaaaaaaaaaaaaaaaaaaa pramuka di SMA Negri 2 Singaparna mengajarkan siswa tentang kepemimpinan, kerja sama, dan keterampilan bertahan hidup di alam.</p>
                    <a href="#" class="btn btn-primary p-2" style="background-color: #6D326D; border: none; border-radius: 25px; width: 250px;">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col mb-1">
                <div class="card p-3 shadow" style="width: 415px; height: 500px; border: none;">
                    <img src="{{ asset('asset/image/2.jpg')}}"  alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Basket</h5>
                    <p class="card-text" style="display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
                        Tim basket kami berlatih secara rutin untuk mengembangkan keterampilan teknis, strategi permainan, dan semangat sportivitas.</p>
                    <a href="#" class="btn btn-primary p-2" style="background-color: #6D326D; border: none; border-radius: 25px; width: 250px;">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col mb-1">
                <div class="card p-3 shadow" style="width: 415px; height: 500px; border: none;">
                    <img src="{{ asset('asset/image/3.jpg')}}"  alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Paduan Suara</h5>
                    <p class="card-text" style="display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">Paduan suara kami menampilkan berbagai genre musik, dari klasik hingga kontemporer, dan sering tampil di acara sekolah dan komunitas.</p>
                    <a href="#" class="btn btn-primary p-2" style="background-color: #6D326D; border: none; border-radius: 25px; width: 250px;">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col mb-1">
                <div class="card p-3 shadow" style="width: 415px; height: 500px; border: none;">
                    <img src="{{ asset('asset/image/4.jpg')}}"  alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Teater</h5>
                    <p class="card-text" style="display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
                        Kelompok teater kami memberikan kesempatan bagi siswa untuk mengekspresikan diri melalui seni pertunjukan dan pengembangan karakter.</p>
                    <a href="#" class="btn btn-primary p-2" style="background-color: #6D326D; border: none; border-radius: 25px; width: 250px;">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
@endsection