@extends('template')
@section('content')
    <div class="container mt-4 mt-md-5">
        <div class="row align-items-center g-4 g-md-5">
            <!-- Contact Information -->
            <div class="col-12 col-lg-6">
                <div class="d-flex flex-column justify-content-center h-100">
                    <h3 class="fw-semibold mb-3 mb-md-4">Kontak</h3>
                    <ul class="list-unstyled mb-1 mb-md-2">
                        <li class="mb-2 mb-md-3">
                            <i class="fas fa-envelope me-2 text-dark"></i>
                            Email : info@sman6jkt.sch.id
                        </li>
                        <li class="mb-2 mb-md-3">
                            <i class="fas fa-phone me-2 text-dark"></i>
                            Telpon : 021-7208762
                        </li>
                        <li class="mb-2 mb-md-3">
                            <i class="fas fa-map-marker-alt me-2 text-dark"></i>
                            Alamat : Jl. Mahakam 1 Blok C No. 2
                        </li>
                        <li class="mt-3 mt-md-4 mb-2">
                            Ikuti Sosial Media Kami
                        </li>
                    </ul>
                    <div class="d-flex gap-3 justify-content-start mb-4 mb-md-5">
                        <a href="#" class="text-dark text-decoration-none">
                            <i class="fab fa-facebook fa-lg fa-fw"></i>
                        </a>
                        <a href="#" class="text-dark text-decoration-none">
                            <i class="fab fa-twitter fa-lg fa-fw"></i>
                        </a>
                        <a href="#" class="text-dark text-decoration-none">
                            <i class="fab fa-instagram fa-lg fa-fw"></i>
                        </a>
                        <a href="#" class="text-dark text-decoration-none">
                            <i class="fab fa-youtube fa-lg fa-fw"></i>
                        </a>
                    </div>
                    <div class="text-center text-lg-start">
                        <img src="{{asset('asset/image/undraw_contact-us_kcoa.svg')}}" 
                             class="img-fluid w-75 w-md-50 w-lg-75" 
                             alt="Contact Illustration">
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-12 col-lg-6">
                <div class="d-flex flex-column justify-content-center h-100">
                    <h3 class="fw-semibold mb-3 mb-md-4">Hubungi Kami</h3>
                    <p class="mb-3 mb-md-4">
                        Jika Anda memiliki pertanyaan, saran, atau ingin menghubungi kami, silakan isi formulir di bawah ini. 
                        Kami akan dengan senang hati membantu Anda.
                    </p>
                    <form action="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label fw-medium">Nama</label>
                            <input type="text" class="form-control" id="name" placeholder="Masukkan nama Anda">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label fw-medium">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda">
                        </div>
                        <div class="mb-4">
                            <label for="message" class="form-label fw-medium">Pesan</label>
                            <textarea class="form-control" id="message" rows="4" placeholder="Tulis pesan Anda di sini"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary px-4 px-md-5 py-2" 
                                style="background-color: #6D326D; border: none; border-radius: 15px;">
                            Kirim
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection