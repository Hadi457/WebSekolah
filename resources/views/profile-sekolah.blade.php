@extends('template')
@section('content')
    <div style="height: 450px; background: linear-gradient(to top, rgba(0,0,0,0.6), rgba(0,0,0,0)), 
    url('{{ asset('asset/image/1.jpg')}}'); background-size: cover; background-position: center;" class="d-flex justify-content-center align-items-center flex-column text-center">
        <h1 class="text-white fw-bold fs-1">Profil Sekolah</h1>
        <h5 class="text-white fw-semibold fs-5">
            Berikut adalah halaman profil sekolah dari SMA Negri 6 Jakarta.
        </h5>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 col-md-6 d-flex justify-content-center align-items-center">
                <img src="{{asset('asset/image/best-place.svg')}}" class="img-fluid w-75" alt="">
            </div>
            <div class="col-lg-6 col-md-6 mt-5 d-flex flex-column justify-content-center">
                <h3 style="border-left: 5px solid #6D326D; padding-left: 10px;" class="fw-bold fs-3">Lokasi</h3>
                <p class="mt-3">
                    SMA Negeri 6 Jakarta berlokasi strategis di pusat kota, sehingga mudah diakses dari berbagai arah. 
                    Letaknya yang berada di kawasan perkotaan menjadikan sekolah ini dekat dengan fasilitas umum, 
                    seperti transportasi publik, pusat perbelanjaan, serta sarana pendidikan lainnya.
                </p>
                <p>
                    Dengan lokasi yang sangat mendukung, siswa-siswi dapat lebih mudah menjangkau sekolah dan 
                    tetap merasa aman serta nyaman selama menempuh pendidikan.
                </p>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 col-md-6 d-flex flex-column justify-content-center">
                <h3 style="border-left: 5px solid #6D326D; padding-left: 10px;" class="fw-bold fs-3">Visi Misi</h3>
                <p class="mt-3">
                    SMA Negri 6 Jakarta memiliki visi “Teguh dalam Keimanan dan Ketakwaan, Unggul dalam Prestasi dan Kreasi, dan Berbudaya”. Misinya meliputi pembinaan iman dan takwa, pembelajaran yang aktif dan menyenangkan, pengembangan potensi akademik maupun nonakademik, serta penciptaan lingkungan belajar yang kondusif dan ramah lingkungan. Tujuannya adalah mencetak peserta didik yang beriman, berprestasi, mampu melanjutkan ke perguruan tinggi, 
                    serta menjalin kemitraan yang baik dengan warga sekolah, masyarakat, dan berbagai institusi pendukung.
                </p>
            </div>
            <div class="col-lg-6 col-md-6 mt-5 d-flex justify-content-center align-items-center">
                <img src="{{asset('asset/image/sman6logo.png')}}" class="img-fluid" class="img-fluid w-75" alt="">
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <!-- Information Cards -->
            <div class="col-lg-12 col-md-6">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-8 d-flex justify-content-center">
                                        <h5 class="card-title fw-bold mb-5">Informasi Sekolah</h5>
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center">
                                    <div class="col-lg-4 gap-3">
                                        <div class="mb-5">
                                            <div class="border-start border-3 border-primary ps-3">
                                                <small class="text-muted d-block">Nama Sekolah</small>
                                                <span class="fw-semibold">SMA Negeri 6 Jakarta</span>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="border-start border-3 border-success ps-3">
                                                <small class="text-muted d-block">Tahun Berdiri</small>
                                                <span class="fw-semibold">8 Juni 2013</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 gap-3">
                                        <div class="mb-5 mt-4">
                                            <div class="border-start border-3 border-warning ps-3">
                                                <small class="text-muted d-block">Alamat</small>
                                                <span class="fw-semibold">Jl. Kp. Pameungpeuk RT/RW 03/06</span>
                                            </div>
                                        </div>
                                        <div class="mb-5">
                                            <div class="border-start border-3 border-info ps-3">
                                                <small class="text-muted d-block">Kontak</small>
                                                <span class="fw-semibold">082213331933</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card border-0">
                                            <div class="card-body text-center p-4">
                                                <div class="rounded-circle overflow-hidden mx-auto mb-3" style="width: 120px; height: 120px;">
                                                    <img src="{{asset('storage/school-profile/'.$profile->foto)}}" class="w-100 h-100 object-fit-cover" alt="Kepala Sekolah">
                                                </div>
                                                <h5 class="fw-bold">H. Dede Iryanto, S.Pd., M.Pd.</h5>
                                                <p class="text-muted">Kepala Sekolah</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card border-0 shadow-sm mb-5">
                            <div class="card-body">
                                <h5 class="card-title fw-bold mb-3">Sambutan Kepala Sekolah</h5>
                                <p>
                                    Assalamu'alaikum Warahmatullahi Wabarakatuh.<br><br>
                                    Puji syukur kehadirat Allah SWT atas segala rahmat dan karunia-Nya... Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa molestias harum magnam dolore voluptate impedit reprehenderit iure. Cumque quae hic delectus. Rem minus molestiae optio autem voluptatum ex dicta tempore quidem enim quae natus animi repudiandae sunt ipsa cum quo possimus, sapiente blanditiis doloremque est ullam voluptates esse amet? Excepturi iure cum dolorem amet ipsum ex iusto dignissimos accusamus ducimus voluptas quo asperiores ut deleniti accusantium tempora, atque at unde ipsa facere necessitatibus ad sapiente quis. Laudantium esse ipsum quisquam eius veniam ea, modi aliquid, adipisci amet illo eos maxime culpa repudiandae nihil eligendi sapiente error doloribus impedit. Veritatis, ab.
                                </p>
                                <p>lorem100</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection