@extends('Administrator.template')
@section('content')
    <div class="h-100">
        <div class="d-flex justify-content-between align-items-center px-3" style="border-top-left-radius: 10px; border-top-right-radius: 10px; background-color: #003F91;">
            <h3 class="fw-bold py-3 text-white">Dashbord</h3>
        </div>
        <div class="container py-4">
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card border-0 rounded-4 shadow h-100 overflow-hidden">
                        <div class="card-body text-center p-4 position-relative">
                            <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                                <i class="fas fa-chalkboard-teacher fa-2x text-primary"></i>
                            </div>
                            <h5 class="fw-bold mb-2 text-dark">Guru</h5>
                            <h2 class="text-primary fw-bold display-6">{{ $guruCount ?? 12 }}</h2>
                            <p class="text-muted small mt-2">Tenaga Pengajar</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 rounded-4 shadow h-100 overflow-hidden">
                        <div class="card-body text-center p-4 position-relative">
                            <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                                <i class="fas fa-user-graduate fa-2x text-success"></i>
                            </div>
                            <h5 class="fw-bold mb-2 text-dark">Siswa</h5>
                            <h2 class="text-success fw-bold display-6">{{ $siswaCount ?? 320 }}</h2>
                            <p class="text-muted small mt-2">Total Siswa</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 rounded-4 shadow h-100 overflow-hidden">
                        <div class="card-body text-center p-4 position-relative">
                            <div class="bg-warning bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                                <i class="fas fa-newspaper fa-2x text-warning"></i>
                            </div>
                            <h5 class="fw-bold mb-2 text-dark">Berita</h5>
                            <h2 class="text-warning fw-bold display-6">{{ $beritaCount ?? 8 }}</h2>
                            <p class="text-muted small mt-2">Artikel Terbit</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 rounded-4 shadow h-100 overflow-hidden">
                        <div class="card-body text-center p-4 position-relative">
                            <div class="bg-danger bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                                <i class="fas fa-futbol fa-2x text-danger"></i>
                            </div>
                            <h5 class="fw-bold mb-2 text-dark">Ekskul</h5>
                            <h2 class="text-danger fw-bold display-6">{{ $eskulCount ?? 6 }}</h2>
                            <p class="text-muted small mt-2">Kegiatan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h5 class="fw-bold mb-3">Quick Actions</h5>
                    <div class="row g-3">
                        <div class="col-md-3 col-6">
                            <a href="#" class="btn btn-outline-primary w-100 d-flex flex-column align-items-center py-3">
                                <i class="fas fa-plus-circle fa-2x mb-2"></i>
                                <span>Tambah User</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-6">
                            <a href="#" class="btn btn-outline-success w-100 d-flex flex-column align-items-center py-3">
                                <i class="fas fa-newspaper fa-2x mb-2"></i>
                                <span>Buat Berita</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-6">
                            <a href="#" class="btn btn-outline-warning w-100 d-flex flex-column align-items-center py-3">
                                <i class="fas fa-camera fa-2x mb-2"></i>
                                <span>Upload Galeri</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-6">
                            <a href="#" class="btn btn-outline-info w-100 d-flex flex-column align-items-center py-3">
                                <i class="fas fa-futbol fa-2x mb-2"></i>
                                <span>Tambah Ekskul</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection