@extends('template')
@section('content')
    <!-- Hero Section -->
    <div style="height: 450px; background: linear-gradient(to top, rgba(0,0,0,0.6), rgba(0,0,0,0)),
    url('{{ asset('asset/image/1.jpg')}}'); background-size: cover; background-position: center;"
    class="d-flex justify-content-center align-items-center flex-column text-center p-3">
        <h1 class="text-white fw-bold display-5 display-md-4 display-lg-3">Profil Sekolah</h1>
        <h5 class="text-white fw-semibold mt-2 mt-md-3 fs-6 fs-md-5">
            Berikut adalah halaman profil sekolah dari SMA Negri 6 Jakarta.
        </h5>
    </div>

    <!-- Information Section -->
    <div class="container mt-4 mt-md-5">
        <div class="row">
            <div class="col-12">
                <div class="row g-3 g-md-4">
                    <!-- School Information Card -->
                    <div class="col-12">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-3 p-md-4">
                                <div class="text-center text-md-start mb-4 mb-md-5">
                                    <h5 class="card-title fw-bold mb-0">Informasi Sekolah</h5>
                                </div>
                                <div class="row g-3 g-md-4 align-items-start">
                                    <div class="col-12 col-md-4">
                                        <div class="mb-4 mb-md-5">
                                            <div class="border-start border-3 border-primary ps-3">
                                                <small class="text-muted d-block">Nama Sekolah</small>
                                                <span class="fw-semibold">{{$profile->nama_sekolah}}</span>
                                            </div>
                                        </div>
                                        <div class="mb-4 mb-md-0">
                                            <div class="border-start border-3 border-success ps-3">
                                                <small class="text-muted d-block">Tahun Berdiri</small>
                                                <span class="fw-semibold">{{$profile->tahun_berdiri}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="mb-4 mb-md-5">
                                            <div class="border-start border-3 border-warning ps-3">
                                                <small class="text-muted d-block">Alamat</small>
                                                <span class="fw-semibold">{{$profile->alamat}}</span>
                                            </div>
                                        </div>
                                        <div class="mb-4 mb-md-0">
                                            <div class="border-start border-3 border-info ps-3">
                                                <small class="text-muted d-block">Kontak</small>
                                                <span class="fw-semibold">{{$profile->kontak}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="card border-0 bg-light h-100">
                                            <div class="card-body text-center p-3 p-md-4">
                                                <div class="rounded-circle overflow-hidden mx-auto mb-3"
                                                    style="width: 100px; height: 100px;">
                                                    <img src="{{asset('storage/school-profile/'.$profile->foto)}}"
                                                        class="w-100 h-100 object-fit-cover"
                                                        alt="Kepala Sekolah">
                                                </div>
                                                <h5 class="fw-bold fs-6 fs-md-5">{{$profile->kepala_sekolah}}</h5>
                                                <p class="text-muted small">Kepala Sekolah</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Deskkripsi -->
                    <div class="col-12">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-3 p-md-4">
                                <h5 class="card-title fw-bold mb-3">Sambutan Kepala Sekolah</h5>
                                <p class="mb-0" style="white-space: pre-line;">
                                    {{$profile->deskripsi}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Location Section -->
    <div class="container mt-4 mt-md-5">
        <div class="row align-items-center g-4 g-md-5">
            <div class="col-12 col-lg-6 text-center">
                <img src="{{asset('asset/image/best-place.svg')}}" class="img-fluid w-75 w-md-50 w-lg-75" alt="">
            </div>
            <div class="col-12 col-lg-6">
                <h3 class="fw-bold fs-4 fs-md-3 ps-3" style="border-left: 5px solid #6D326D;">Lokasi</h3>
                <p class="mt-3 mb-3">
                    {{ $profile->nama_sekolah}} berlokasi strategis di pusat kota, sehingga mudah diakses dari berbagai arah.
                    Letaknya yang berada di kawasan perkotaan menjadikan sekolah ini dekat dengan fasilitas umum,
                    seperti transportasi publik, pusat perbelanjaan, serta sarana pendidikan lainnya.
                </p>
                <p class="mb-0">
                    Dengan lokasi yang sangat mendukung, siswa-siswi dapat lebih mudah menjangkau sekolah dan
                    tetap merasa aman serta nyaman selama menempuh pendidikan.
                </p>
            </div>
        </div>
    </div>

    <!-- Vision Mission Section -->
    <div class="container mt-4 mt-md-5">
        <div class="row align-items-center g-4 g-md-5">
            <div class="col-12 col-lg-6 order-2 order-lg-1">
                <h3 class="fw-bold fs-4 fs-md-3 ps-3" style="border-left: 5px solid #6D326D;">Visi Misi</h3>
                <p class="mt-3 mb-0" style="white-space: pre-line;">
                    {{$profile->visi_misi}}
                </p>
            </div>
            <div class="col-12 col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{asset('asset/image/sman6logo.png')}}" class="img-fluid w-50 w-md-50 w-lg-75" alt="">
            </div>
        </div>
    </div>


@endsection
