@extends('template')
@section('content')
<div class="container py-4">
    <!-- Header Section -->
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Beranda</a></li>
            <li class="breadcrumb-item"><a href="/eskul" class="text-decoration-none">Ekstrakurikuler</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $eskul->nama_eskul }}</li>
        </ol>
    </nav>

    <div class="row">
        <!-- Gambar dan Informasi Utama -->
        <div class="col-lg-8">
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body p-0">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <img src="{{ asset('storage/extracurricular-image/' . $eskul->gambar) }}" alt="{{ $eskul->nama_eskul }}" 
                                 class="img-fluid rounded-start" style="height: 300px; width: 100%; object-fit: cover;">
                        </div>
                        <div class="col-md-6">
                            <div class="p-4">
                                <h1 class="h3 fw-bold mb-3">{{ $eskul->nama_eskul }}</h1>
                                
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fa-solid fa-chalkboard-user me-3"></i>
                                    <div>
                                        <h6 class="mb-0 text-muted">Pembina</h6>
                                        <p class="mb-0 fw-semibold">{{ $eskul->pembina }}</p>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <i class="far fa-calendar me-3"></i>
                                    <div>
                                        <h6 class="mb-0 text-muted">Jadwal Latihan</h6>
                                        <p class="mb-0 fw-semibold">{{ $eskul->jadwal_latihan }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Deskripsi -->
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-header bg-light">
                    <h5 class="card-title mb-0">
                        <i class="bi bi-info-circle text-primary me-2"></i>
                        Tentang Ekstrakurikuler
                    </h5>
                </div>
                <div class="card-body">
                    <p class="card-text">{{ $eskul->deskripsi }}</p>
                </div>
            </div>
        </div>

        <!-- Sidebar Informasi -->
        <div class="col-lg-4">
            <!-- Info Card -->
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-header text-white py-3" style="background-color: #003F91;">
                    <h6 class="card-title mb-0">
                        <i class="bi bi-clock-history me-2"></i>
                        Informasi Singkat
                    </h6>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <small class="text-muted">Nama Eskul</small>
                        <p class="fw-semibold mb-0">{{ $eskul->nama_eskul }}</p>
                    </div>
                    <div class="mb-3">
                        <small class="text-muted">Pembina</small>
                        <p class="fw-semibold mb-0">{{ $eskul->pembina }}</p>
                    </div>
                    <div class="mb-3">
                        <small class="text-muted">Jadwal</small>
                        <p class="fw-semibold mb-0">{{ $eskul->jadwal_latihan }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection