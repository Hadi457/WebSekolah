@extends('template')
@section('content')
<style>
    .photo img {
        width: 2500px;
        height: 150px;
        object-fit: cover;
        border-radius: 10%;
    }
</style>
    <div style="background: url('{{ asset('asset/image/Curve Line.svg')}}'); background-size: cover; background-position: center; ">
        <div class="container text-white p-5">
            <div class="row gap-5">
                <div class="col d-flex flex-column justify-content-center">
                    <h5 class="mb-3">Selamat Datang</h5>
                    <h1 class="mb-3 fw-bold">Masa Depan Gemilang<br>Dimulai dari Sini</h1>
                    <p class="mb-4">
                        SMA Negeri 6 Jakarta hadir sebagai tempat tumbuhnya generasi berprestasi. 
                        Kami tidak hanya mengedepankan akademik, tetapi juga karakter, kreativitas, 
                        dan kepedulian sosial untuk menyiapkan siswa menghadapi masa depan.
                    </p>
                    <a href="#news" class="btn btn-primary p-3" style="background-color: #6D326D; border: none; border-radius: 25px; width: 250px;">Jelajahi Sekolah</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center gap-3">
                    <img src="{{asset('asset/image/Education.svg')}}" width="500" height="500" alt="">
                </div>
            </div>
        </div>
    </div>
    <div id="news" class="container">
        <div class="d-flex justify-content-center align-items-center m-5 flex-column">
            <h3 >Berita Umum</h3>
            <div class="m-2" style="background-color: #003F91; width: 200px; height: 3px; border-radius: 20px;"></div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card p-3 shadow" style="width: 410px; border: none;">
                    <img src="{{ asset('asset/image/1.jpg')}}" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Judul Berita 1</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#" class="btn btn-primary p-2" style="background-color: #6D326D; border: none; border-radius: 25px; width: 250px;">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card p-3 shadow" style="width: 410px; border: none;">
                    <img src="{{ asset('asset/image/1.jpg')}}" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Judul Berita 1</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#" class="btn btn-primary p-2" style="background-color: #6D326D; border: none; border-radius: 25px; width: 250px;">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card p-3 shadow" style="width: 410px; border: none;">
                    <img src="{{ asset('asset/image/1.jpg')}}" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Judul Berita 1</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#" class="btn btn-primary p-2" style="background-color: #6D326D; border: none; border-radius: 25px; width: 250px;">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="{{asset('asset/image/wave-haikei (1).svg')}}" alt="" style="margin-top: -250px; width: 100%; height: auto; display: block;">
    <div class="p-5" style="background-color: #003F91;">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center">
                <h3 class="text-white">Jumlah Siswa dan Guru</h3>
            </div>
            <div class="row d-flex justify-content-center align-items-center m-5 gap-5">
                <div class="col d-flex justify-content-center align-items-center flex-column shadow" style="width: 300px; height: 180px; border-radius: 20px; background-color: #5DA9E9; color: white;">
                    <h3>Jumlah Guru</h3>
                    <h1 class="fw-bold">33</h1>
                </div>
                <div class="col d-flex justify-content-center align-items-center flex-column shadow" style="width: 300px; height: 180px; border-radius: 20px; background-color: #5DA9E9; color: white;">
                    <h3>Jumlah Siswa</h3>
                    <h1 class="fw-bold">333</h1>
                </div>
                <div class="col d-flex justify-content-center align-items-center flex-column shadow" style="width: 300px; height: 180px; border-radius: 20px; background-color: #5DA9E9; color: white;">
                    <h3>Rombel</h3>
                    <h1 class="fw-bold">33</h1>
                </div>
            </div>
        </div>
    </div>
    <img src="{{asset('asset/image/wave-haikei.svg')}}" alt="" style="margin-bottom: -250px; width: 100%; height: auto; display: block;">
    <div class="container">
        <div class="d-flex justify-content-center align-items-center m-5 flex-column">
            <h3>Galeri Sekolah</h3>
            <div class="m-2" style="background-color: #003F91; width: 200px; height: 3px; border-radius: 20px;"></div>
        </div>
        <div class="row">
            <div class="col">
                <div style=" width: 410px; height: 300px; border-radius:10px; background: linear-gradient(to top, rgba(0,0,0,0.6), rgba(0,0,0,0)), 
                                url('{{ asset('asset/image/1.jpg')}}'); background-size: cover; background-position: center;" class="shadow">
                    <div class="col d-flex flex-column justify-content-end" style="height: 100%;">
                        <h3 class="text-white px-3">Upacara Hari Senin</h3>
                        <p class="text-white px-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, dolor.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div style=" width: 410px; height: 300px; border-radius:10px; background: linear-gradient(to top, rgba(0,0,0,0.6), rgba(0,0,0,0)), 
                                url('{{ asset('asset/image/1.jpg')}}'); background-size: cover; background-position: center;" class="shadow">
                    <div class="col d-flex flex-column justify-content-end" style="height: 100%;">
                        <h3 class="text-white px-3">Upacara Hari Senin</h3>
                        <p class="text-white px-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, dolor.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div style=" width: 410px; height: 300px; border-radius:10px; background: linear-gradient(to top, rgba(0,0,0,0.6), rgba(0,0,0,0)), 
                                url('{{ asset('asset/image/1.jpg')}}'); background-size: cover; background-position: center;" class="shadow">
                    <div class="col d-flex flex-column justify-content-end" style="height: 100%;">
                        <h3 class="text-white px-3">Upacara Hari Senin</h3>
                        <p class="text-white px-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, dolor.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center m-5 flex-column">
            <a href="/galeri" class="btn btn-primary p-3 m-1" style="background-color: #6D326D; border: none; border-radius: 25px; width: 250px;">Lihat Galeri</a>
        </div>
    </div>
    <div class="container">
        <div class="d-flex justify-content-center align-items-center m-5 flex-column">
            <h3>Tentang Kami</h3>
            <div class="m-2" style="background-color: #003F91; width: 200px; height: 3px; border-radius: 20px;"></div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center align-items-center">
                <img src="{{asset('asset/image/undraw_stars_5pgw.svg')}}" width="500" height="500" style="object-fit: contain" alt="">
            </div>
            <div class="col d-flex flex-column justify-content-center">
                <h3 class="mb-3">SMA Negeri 6 Jakarta</h3>
                <p>
                    SMA Negeri 6 Jakarta adalah institusi pendidikan menengah atas yang berkomitmen untuk memberikan pendidikan berkualitas tinggi kepada siswa-siswinya. 
                    Dengan fasilitas modern dan tenaga pengajar yang berpengalaman, kami berusaha menciptakan lingkungan belajar yang inspiratif dan mendukung perkembangan akademik serta karakter siswa.
                </p>
                <p>
                    Terletak di jantung kota Jakarta, SMA Negeri 6 Jakarta menawarkan berbagai program akademik dan ekstrakurikuler yang dirancang untuk mengembangkan potensi siswa secara menyeluruh. 
                    Kami percaya bahwa setiap siswa memiliki bakat unik yang perlu diasah dan dikembangkan untuk mencapai kesuksesan di masa depan.
                <p>
                <p>
                    Bergabunglah dengan kami di SMA Negeri 6 Jakarta, di mana masa depan gemilang dimulai dari sini.
                </p>
                <a href="/profile-sekolah" class="btn btn-primary p-3 mt-3" style="background-color: #6D326D; border: none; border-radius: 25px; width: 250px;">Pelajari Lebih Lanjut</a>
            </div>
        </div>
    </div>
@endsection