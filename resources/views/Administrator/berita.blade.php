@extends('Administrator.template')
@section('content')
<style>
    td:nth-child(2) {
        max-width: 150px;
        white-space: nowrap; /* tetap satu baris */
        overflow: hidden;
        text-overflow: ellipsis; /* tampil ... di akhir */
    }
</style>
    <!-- Modal Create Berita -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit Berita -->
    @foreach ($berita as $item)
    <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel{{ $item->id }}">Edit Berita</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('berita-update', Crypt::encrypt($item->id)) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="edit_judul" class="form-label fw-semibold fw-semibold">Judul Berita<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="edit_judul" name="judul" value="{{ $item->judul }}" required placeholder="Masukan Judul Berita">
                        </div>
                        <div class="mb-3">
                            <label for="edit_isi" class="form-label fw-semibold fw-semibold">Isi Berita<span class="text-danger">*</span></label>
                            <textarea class="form-control" id="edit_isi" name="isi" rows="5" placeholder="Masukan Isi Berita">{{ $item->isi }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="edit_gambar" class="form-label fw-semibold fw-semibold">Gambar Baru<span class="text-danger">*</span></label>
                            <input type="file" class="form-control" id="edit_gambar" name="gambar" accept="image/*">
                            <div class="form-text text-muted">Kosongkan jika tidak ingin mengubah gambar. Format yang didukung: JPG, PNG, GIF. Maksimal ukuran: 2MB.</div>
                        </div>
                        <div class="mb-3">
                                <label class="form-label fw-semibold">Foto Saat Ini<span class="text-danger">*</span></label>
                                <div class="mt-2">
                                    <img src="{{ asset('storage/news-image/' . $item->gambar) }}" 
                                        alt="{{ $item->judul }}" 
                                        style="max-width: 100%; height: 100px; object-fit: cover; border-radius: 5px;">
                                    <p class="small text-muted mt-1">{{ $item->gambar }}</p>
                                </div>
                            </div>
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
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
                            <th scope="col">Judul</th>
                            <th scope="col">Isi</th>
                            <th scope="col">Tanggal Upload</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($berita as $item)   
                            <tr>
                                <td scope="row">{{$item->judul}}</td>
                                <td>{{$item->isi}}</td>
                                <td>{{$item->tanggal}}</td>
                                <td>
                                    <img src="{{ asset('storage/news-image/'.$item->gambar) }}" width="100" height="100" style="object-fit: cover;" alt="">
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