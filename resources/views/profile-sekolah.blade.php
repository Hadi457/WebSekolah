@extends('template')
@section('content')
    <div style="height: 450px; background: linear-gradient(to top, rgba(0,0,0,0.6), rgba(0,0,0,0)), 
    url('{{ asset('asset/image/1.jpg')}}'); background-size: cover; background-position: center;" class="d-flex justify-content-center align-items-center flex-column text-center">
        <h1 class="text-white fw-bold" style="font-size: 50px;">Profil Sekolah</h1>
        <p class="text-white fw-semibold" style="font-size: 20px;">
            Berikut adalah halaman profil sekolah dari SMAN 2 Singaparna.
        </p>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col d-flex justify-content-center align-items-center">
                <img src="{{asset('asset/image/undraw_educator_6dgp.svg')}}" width="500" height="500" style="object-fit: contain" alt="">
            </div>
            <div class="col d-flex flex-column justify-content-center">
                <h3 style="border-left: 5px solid #6D326D; padding-left: 10px; font-size: 35px;" class="fw-bold">Akreditasi</h3>
                <p class="mt-3">
                    SMAN 2 Singaparna terakreditasi pertama kali pada tanggal 19 Oktober 2016. 
                    SMAN 2 Singaparna terakreditasi A (Amat Baik) berdasarkan SK Penetapan Hasil Akreditasi BAP-S/M Nomor: 02.00/274/BAP-SM/SK/X/2016. 
                    Akreditasi ini berlaku s.d. 19 Oktober 2021.
                </p>
                <p>
                    Akreditasi kedua (ke-2) dengan nomor SK: 1179/BAN-SM/SK/2021 berpredikat A (Unggul) dengan nilai 92. 
                    Akreditasi berlaku dari tanggal 16 November 2021 s.d. 16 November 2026
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-column justify-content-center">
                <h3 style="border-left: 5px solid #6D326D; padding-left: 10px; font-size: 35px;" class="fw-bold">Visi Misi</h3>
                <p class="mt-3">
                    SMA Negeri 2 Singaparna memiliki visi “Teguh dalam Keimanan dan Ketakwaan, Unggul dalam Prestasi dan Kreasi, dan Berbudaya”. Misinya meliputi pembinaan iman dan takwa, pembelajaran yang aktif dan menyenangkan, pengembangan potensi akademik maupun nonakademik, serta penciptaan lingkungan belajar yang kondusif dan ramah lingkungan. Tujuannya adalah mencetak peserta didik yang beriman, berprestasi, mampu melanjutkan ke perguruan tinggi, 
                    serta menjalin kemitraan yang baik dengan warga sekolah, masyarakat, dan berbagai institusi pendukung.
                </p>

            </div>
            <div class="col d-flex justify-content-center align-items-center">
                <img src="{{asset('asset/image/images.png')}}" width="310" height="310" style="object-fit: contain" alt="">
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-5">
                <div class="card" style="width: auto;">
                    <img src="{{asset('asset/image/hdede.jpg')}}" class="card-img-top" style="width: auto; height: 800px; object-fit:" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Dede</h5>
                        <p class="card-text text-center">Kepala Sekolah</p>
                    </div>
                </div>
            </div>
            <div class="col-7 bg-light">
                <div class="container p-5">
                    <h3 style="font-size: 35px;" class="fw-bold">Profile Sekolah</h3>
                </div>
                <div class="container mt-1">
                    <div class="d-flex py-3 align-items-center">
                        <h5 class="fw-semibold pe-2">Nama Sekolah</h5>
                        <h5>:</h5>
                        <h5 class="ps-2">SMA Negri 2 Singaparna</h5>
                    </div>
                    <div class="d-flex py-3 align-items-center">
                        <h5 class="fw-semibold pe-2">Kepala Sekolah</h5>
                        <h5>:</h5>
                        <h5 class="ps-2">H. Dede Iryanto, S.Pd., M.Pd.</h5>
                    </div>
                    <div class="d-flex py-3 align-items-center">
                        <h5 class="fw-semibold pe-2">Alamat</h5>
                        <h5>:</h5>
                        <h5 class="ps-2">Jl. Kp. Pameungpeuk RT/RW 03/06</h5>
                    </div>
                    <div class="d-flex py-3 align-items-center">
                        <h5 class="fw-semibold pe-2">Kontak</h5>
                        <h5>:</h5>
                        <h5 class="ps-2">082213331933</h5>
                    </div>
                    <div class="d-flex py-3 align-items-center">
                        <h5 class="fw-semibold pe-2">Tahun Berdiri</h5>
                        <h5>:</h5>
                        <h5 class="ps-2">8 Juni 2013</h5>
                    </div>
                    <div class="d-flex py-3">
                        <h5 class="fw-semibold pe-2">Deskripsi</h5>
                        <h5>:</h5>
                        <h5 class="ps-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem ad neque praesentium nihil eveniet saepe rerum natus officia, doloribus repellat veritatis at expedita veniam quas laudantium quidem impedit alias fuga facilis inventore earum eos atque. Quas ipsa eos non quae iste incidunt voluptates velit nulla inventore enim, ipsam corrupti modi ratione exercitationem corporis perspiciatis a reprehenderit ipsum animi quasi eaque. Illo ex commodi non labore quidem laborum asperiores possimus autem nesciunt? Excepturi perspiciatis porro unde aspernatur a id quasi amet sunt ullam totam nobis qui voluptates eius mollitia culpa magnam, dolorem possimus, repellendus assumenda. Provident quisquam corrupti, sapiente necessitatibus quia voluptatum. Minus vel quas sint, eos voluptates dolor ea repudiandae!
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection