@extends('Administrator.template')
@section('content')
<style>
    td:nth-child(4) {
        max-width: 150px;
        white-space: nowrap; /* tetap satu baris */
        overflow: hidden;
        text-overflow: ellipsis; /* tampil ... di akhir */
    }
</style>
    <!-- Modal Create Eskul -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <i class="fas fa-times me-1"></i>Batal
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-1"></i>Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @foreach ($eskul as $item)
        <!-- Modal Create Eskul -->
        <div class="modal fade" id="editModal{{$item->id}}" tabindex="-1" aria-labelledby="editModalLabel{{$item->id}}" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title fw-bold">
                            <i class="fas fa-plus-circle me-2"></i>Tambah Eskul
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{route('eskul-update', Crypt::encrypt($item->id))}}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="mb-3">
                                    <label for="nama_eskul" class="form-label fw-semibold">Nama Eskul <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="nama_eskul" name="nama_eskul" placeholder="Masukkan nama eskul" required value="{{$item->nama_eskul}}">
                                </div>
                                <div class="mb-3">
                                    <label for="pembina" class="form-label fw-semibold">Pembina <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="pembina" name="pembina" placeholder="Nama pembina eskul" required value="{{$item->pembina}}">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="jadwal_latihan" class="form-label fw-semibold">Jadwal Latihan <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="jadwal_latihan" name="jadwal_latihan" placeholder="Contoh: Senin & Kamis, 15:00-17:00" required value="{{$item->jadwal_latihan}}">
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label fw-semibold">Deskripsi <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Deskripsi kegiatan eskul">{{$item->deskripsi}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="gambar" class="form-label fw-semibold">Gambar <span class="text-danger">*</span></label>
                                <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
                                <div class="form-text">Format: JPG, PNG, JPEG. Maksimal 2MB</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Gambar Saat Ini</label>
                                <div class="mt-2">
                                    <img src="{{ asset('storage/extracurricular-image/'.$item->gambar) }}" 
                                        alt="{{ $item->nama_eskul }}" 
                                        style="max-width: 100%; height: 100px; object-fit: cover; border-radius: 5px;">
                                    <p class="small text-muted mt-1">{{ $item->nama_eskul }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                <i class="fas fa-times me-1"></i>Batal
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-1"></i>Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    <div class="h-100">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center px-3 mb-3" style="border-top-left-radius: 10px; border-top-right-radius: 10px; background-color: #003F91;">
            <h3 class="fw-bold py-3 text-white">Ekstrakurikuler</h3>
            <!-- Button trigger modal -->
            <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary d-flex align-items-center py-3 px-4" style="background-color: #6D326D; height: 25px; border: none; border-radius: 25px; font-size: 15px;">Tambah Eskul</a>
        </div>

        <!-- Alert Messages -->
        @if (Session::get('sukses'))
            <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                <i class="fas fa-check-circle me-2"></i>
                {{ Session::get('sukses') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>  
        @endif
        
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
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
            
        <div class="bg-light p-3 rounded">
            <div class="table-responsive min-vh-100">
                <table id="example" class="table w-100 table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Nama Eskul</th>
                            <th scope="col">Pembina</th>
                            <th scope="col">Jadwal Latihan</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($eskul as $item)   
                            <tr>
                                <td scope="row">{{$item->nama_eskul}}</td>
                                <td>{{$item->pembina}}</td>
                                <td>{{$item->jadwal_latihan}}</td>
                                <td>{{$item->deskripsi}}</td>
                                <td>
                                    <img src="{{ asset('storage/extracurricular-image/'.$item->gambar) }}" width="100" height="100" style="object-fit: cover;" alt="">
                                </td>
                                <td>
                                    <button data-bs-toggle="modal" data-bs-target="#editModal{{$item->id}}" class="btn btn-sm btn-outline-warning" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <a class="btn btn-sm btn-outline-danger" 
                                        href="{{ route('eskul-delete', Crypt::encrypt($item->id)) }}" 
                                        onclick="return confirm('Hapus eskul {{ $item->nama_eskul }}?')"
                                        title="Hapus">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<script>
    new DataTable('#example');
</script>
@endsection