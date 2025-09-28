@extends('template')
@section('content')
    <div class="container mt-5">
        <div class="row d-flex justify-content-between">
            <div class="col-lg-6 col-md-6 d-flex flex-column justify-content-center">
                <h3 class="fw-semibold mb-4">Kontak</h3>
                <ul class="list-unstyled">
                    <li>Email : info@sman6jkt.sch.id</li>
                    <li>Telpon : 021-7208762</li>
                    <li>Alamat : Jl. Mahakam 1 Blok C No. 2</li>
                    <li class="mt-2">Ikuti Sosial Media Kami</li>
                </ul>
                <div class="d-flex gap-3 justify-content-start">
                    <a href="#" class="text-black"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="#" class="text-black"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="#" class="text-black"><i class="fab fa-instagram fa-2x"></i></a>
                    <a href="#" class="text-black"><i class="fab fa-youtube fa-2x"></i></a>
                </div>
                <img src="{{asset('asset/image/undraw_contact-us_kcoa.svg')}}" width="280" height="280" style="object-fit: contain" alt="">
            </div>
            <div class="col-lg-6 col-md-6 d-flex flex-column justify-content-center">
                <h3 class="mb-4 fw-semibold">Hubungi Kami</h3>
                <p>Jika Anda memiliki pertanyaan, saran, atau ingin menghubungi kami, silakan isi formulir di bawah ini. Kami akan dengan senang hati membantu Anda.</p>
                <form action="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" placeholder="Masukkan nama Anda">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea class="form-control" id="message" rows="4" placeholder="Tulis pesan Anda di sini"></textarea>
                    </div>
                    <a href="/galeri" class="btn btn-primary px-5" style="background-color: #6D326D; border: none; border-radius: 15px;">Kirim</a>
                </form>
            </div>
        </div>
    </div>
@endsection