@extends('template')
@section('content')
    <div style="height: 450px; background: linear-gradient(to top, rgba(0,0,0,0.6), rgba(0,0,0,0)), 
    url('{{ asset('asset/image/1.jpg')}}'); background-size: cover; background-position: center;" class="d-flex justify-content-center align-items-center flex-column text-center">
        <h1 class="text-white fw-bold" style="font-size: 50px;">Detail Ekstrakurikuler</h1>
        <p class="text-white fw-semibold" style="font-size: 20px;">
            Berikut adalah halaman detail ekstrakurikuler dari SMAN 2 Singaparna.
        </p>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col d-flex justify-content-center align-items-center">
                <img src="{{asset('asset/image/undraw_educator_6dgp.svg')}}" width="500" height="500" style="object-fit: contain" alt="">
            </div>
            <div class="col d-flex flex-column justify-content-center">
                <h3 style="border-left: 5px solid #6D326D; padding-left: 10px; font-size: 35px;" class="fw-bold">Ekstrakurikuler</h3>
                <p class="mt-3">
                    Ekstrakurikuler di SMAN 2 Singaparna dirancang untuk mengembangkan minat, bakat, dan keterampilan siswa di luar jam pelajaran formal. 
                    Kami menawarkan berbagai kegiatan yang mencakup bidang seni, olahraga, akademik, dan sosial. 
                    Setiap ekstrakurikuler dipandu oleh pembina yang berpengalaman dan berdedikasi untuk membantu siswa mencapai potensi terbaik mereka.
                </p>
                <p>
                    Melalui partisipasi dalam ekstrakurikuler, siswa dapat membangun karakter, meningkatkan kerja sama tim, dan mengembangkan kepemimpinan. 
                    Kami percaya bahwa kegiatan ini tidak hanya memperkaya pengalaman sekolah tetapi juga mempersiapkan siswa untuk tantangan di masa depan.
                </p>
            </div>
        </div>
    </div>
@endsection