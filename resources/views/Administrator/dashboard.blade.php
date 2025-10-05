@extends('Administrator.template')
@section('content')
    <!-- Modal Create Berita -->
    <div class="modal fade" id="beritaModal" tabindex="-1" aria-labelledby="beritaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Berita</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('berita-store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="judul" class="form-label fw-semibold">Judul<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="judul" name="judul" required placeholder="Masukan Judul Berita">
                        </div>
                        <div class="mb-4">
                            <label for="isi" class="form-label fw-semibold">Isi<span class="text-danger">*</span></label>
                            <textarea class="form-control" id="edit_isi" name="isi" rows="5" placeholder="Masukan Isi Berita"></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="gambar" class="form-label fw-semibold">Gambar<span class="text-danger">*</span></label>
                            <input type="file" class="form-control" id="gambar" name="gambar" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Create Eskul -->
    <div class="modal fade" id="eskulModal" tabindex="-1" aria-labelledby="eskulModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Eskul</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('eskul-store')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama_eskul" class="form-label fw-semibold">Nama Eskul <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="nama_eskul" name="nama_eskul" placeholder="Masukkan nama eskul" required>
                        </div>
                        <div class="mb-3">
                            <label for="pembina" class="form-label fw-semibold">Pembina <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="pembina" name="pembina" placeholder="Nama pembina eskul" required>
                        </div>
                        <div class="mb-3">
                            <label for="jadwal_latihan" class="form-label fw-semibold">Jadwal Latihan <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="jadwal_latihan" name="jadwal_latihan" placeholder="Contoh: Senin & Kamis, 15:00-17:00" required>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label fw-semibold">Deskripsi <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Deskripsi kegiatan eskul" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label fw-semibold">Gambar <span class="text-danger">*</span></label>
                            <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*" required>
                            <div class="form-text">Format: JPG, PNG, JPEG. Maksimal 2MB</div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Create Siswa -->
    <div class="modal fade" id="siswaModal" tabindex="-1" aria-labelledby="siswaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('siswa-store')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nisn" class="form-label fw-semibold">Nisn<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="nisn" name="nisn" required placeholder="Masukan NISN">
                        </div>
                        <div class="mb-4">
                            <label for="nama_siswa" class="form-label fw-semibold">Nama Siswa<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" required placeholder="Masukan Nama Siswa">
                        </div>
                        <div class="mb-4">
                            <label for="jenis_kelamin">Jenis Kelamin<span class="text-danger">*</span></label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-select mt-2" aria-label="Default select example">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="tahun_masuk" class="form-label fw-semibold">Tahun Masuk<span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="tahun_masuk" name="tahun_masuk" min="2000" max="{{ date('Y') }}" required placeholder="Masukan Tahun">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Creatae Guru-->
    <div class="modal fade" id="guruModal" tabindex="-1" aria-labelledby="guruModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Guru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('guru-store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nip" class="form-label fw-semibold">Nip<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="nip" placeholder="Masukan NIP" name="nip" required>
                        </div>
                        <div class="mb-4">
                            <label for="nama_guru" class="form-label fw-semibold">Nama Guru<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="nama_guru" name="nama_guru" placeholder="Masukan Nama Guru" required>
                        </div>
                        <div class="mb-4">
                            <label for="foto" class="form-label fw-semibold">Foto<span class="text-danger">*</span></label>
                            <input type="file" class="form-control" id="foto" name="foto" placeholder="Masukan foto" required>
                        </div>
                        <div class="mb-4">
                            <label for="mapel" class="form-label fw-semibold">mapel<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="mapel" name="mapel" placeholder="Masukan Mata Pelajaran" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="h-100">
        <div class="d-flex justify-content-between align-items-center px-3" style="border-top-left-radius: 10px; border-top-right-radius: 10px; background-color: #003F91;">
            <h3 class="fw-bold py-3 text-white">Dashbord</h3>
        </div>
        <!-- Alert Messages -->
        @if (Session::get('sukses'))
            <div class="alert alert-success alert-dismissible fade show mb-1 mt-2" role="alert">
                <i class="fas fa-check-circle me-2"></i>
                {{ Session::get('sukses') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>  
        @endif
        
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show mb-1 mt-1" role="alert">
                <i class="fas fa-exclamation-triangle me-2"></i>
                <strong>Terjadi kesalahan:</strong>
                <ul class="mb-0 mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        <div class="container py-4">
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card border-0 rounded-4 shadow h-100 overflow-hidden">
                        <div class="card-body text-center p-4 position-relative">
                            <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                                <i class="fas fa-chalkboard-teacher fa-2x text-primary"></i>
                            </div>
                            <h5 class="fw-bold mb-2 text-dark">Guru</h5>
                            <h2 class="text-primary fw-bold display-6">{{ $guru->count() }}</h2>
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
                            <h2 class="text-success fw-bold display-6">{{ $siswa->count() }}</h2>
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
                            <h2 class="text-warning fw-bold display-6">{{ $berita->count() }}</h2>
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
                            <h2 class="text-danger fw-bold display-6">{{ $eskul->count() }}</h2>
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
                    <div class="row g-3" >
                        <div class="col-md-3 col-6">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#guruModal" class="btn btn-outline-primary w-100 d-flex flex-column align-items-center py-3">
                                <i class="fas fa-plus-circle fa-2x mb-2"></i>
                                <span>Tambah Guru</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-6">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#siswaModal" class="btn btn-outline-success w-100 d-flex flex-column align-items-center py-3">
                                <i class="fas fa-user-graduate fa-2x mb-2"></i>
                                <span>Tambah Siswa</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-6">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#beritaModal" class="btn btn-outline-warning w-100 d-flex flex-column align-items-center py-3">
                                <i class="fas fa-newspaper fa-2x mb-2"></i>
                                <span>Buat Berita</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-6">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#eskulModal" class="btn btn-outline-danger w-100 d-flex flex-column align-items-center py-3">
                                <i class="fas fa-futbol fa-2x mb-2"></i>
                                <span>Tambah Ekstrakurikuler</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection