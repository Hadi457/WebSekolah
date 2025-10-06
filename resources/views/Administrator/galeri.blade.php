@extends('Administrator.template')
@section('content')
    <!-- Modal Create Galeri -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Galeri</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('galeri-store')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="judul" class="form-label fw-semibold">Judul<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="judul" name="judul" required placeholder="Masukan Judul">
                        </div>
                        <div class="mb-4">
                            <label for="keterangan" class="form-label fw-semibold">Keterangan<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="keterangan" name="keterangan" required placeholder="Masukan Keterangan">
                        </div>
                        <div class="mb-4">
                            <label for="file" class="form-label fw-semibold">File<span class="text-danger">*</span></label>
                            <input type="file" class="form-control" id="file" name="file" required>
                        </div>
                        <div class="mb-4">
                            <label for="kategori" class="form-label fw-semibold">Kategori<span class="text-danger">*</span></label>
                            <select name="kategori" id="kategori" class="form-select mt-2" aria-label="Default select example">
                                <option value="Foto">Foto</option>
                                <option value="Video">Video</option>
                            </select>
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

    @foreach ($galeri as $item)
        <!-- Modal Edit Galeri -->
        <div class="modal fade" id="editModal{{$item->id}}" tabindex="-1" aria-labelledby="editModalLabel{{$item->id}}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Galeri</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{route('galeri-update', Crypt::encrypt($item->id))}}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="judul" class="form-label fw-semibold">Judul<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="judul" name="judul" required value="{{$item->judul}}" placeholder="Masukan Judul">
                            </div>
                            <div class="mb-4">
                                <label for="keterangan" class="form-label fw-semibold">Keterangan<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="keterangan" name="keterangan" required value="{{$item->keterangan}}" placeholder="Masukan Keterangan">
                            </div>
                            <div class="mb-4">
                                <label for="file" class="form-label fw-semibold">File<span class="text-danger">*</span></label>
                                <input type="file" class="form-control" id="file" name="file" required value="{{$item->file}}">
                            </div>
                            @if ($item->kategori == 'Foto')
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Gambar Saat Ini<span class="text-danger">*</span></label>
                                    <div class="mt-2">
                                        <img src="{{ asset('storage/gallery/' . $item->file) }}"
                                            alt="{{ $item->judul }}"
                                            style="max-width: 100%; height: 100px; object-fit: cover; border-radius: 5px;">
                                        <p class="small text-muted mt-1">{{ $item->judul }}</p>
                                    </div>
                                </div>
                            @else
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Video Saat Ini<span class="text-danger">*</span></label>
                                    <div class="mt-2">
                                        <video class="me-3" style="max-width: 100%; height: 100px; object-fit: cover; border-radius: 5px;" muted>
                                            <source src="{{ asset('storage/gallery/' . $item->file) }}" type="video/mp4">
                                        </video>
                                        <p class="small text-muted mt-1">{{ $item->judul }}</p>
                                    </div>
                                </div>
                            @endif
                            <div class="mb-4">
                                <label for="kategori" class="form-label fw-semibold">Kategori<span class="text-danger">*</span></label>
                                <select name="kategori" id="kategori" class="form-select mt-2" aria-label="Default select example">
                                    <option value="Foto"{{ $item->kategori == "Foto" ? 'selected' : '' }}>Foto</option>
                                    <option value="Video"{{ $item->kategori == "Video" ? 'selected' : '' }}>Video</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
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
            <h3 class="fw-bold py-3 text-white">Galeri</h3>
            <!-- Button trigger modal -->
            <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary d-flex align-items-center py-3 px-4" style="background-color: #6D326D; height: 25px; border: none; border-radius: 25px; font-size: 15px;">Tambah Galeri</a>
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
            <div class="alert alert-danger alert-dismissible fade show mb-1 mt-2" role="alert">
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
                            <th scope="col">Keterangan</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Tanggal Upload</th>
                            <th scope="col">File</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($galeri as $item)
                            <tr>
                                <td scope="row">{{$item->judul}}</td>
                                <td>{{$item->keterangan}}</td>
                                <td>{{$item->kategori}}</td>
                                <td>{{$item->tanggal}}</td>
                                <td>
                                    @if ($item->kategori == "Foto")
                                        <img src="{{ asset('storage/gallery/'.$item->file) }}" width="100" height="100" style="object-fit: cover;" alt="">
                                    @else
                                        <div class="mb-3 shadow-sm" style="height: 128px; width: 128px; border-radius: 10px; overflow: hidden;">
                                            <video width="100%" height="100%" controls style="object-fit: cover;">
                                                <source src="{{ asset('storage/gallery/'.$item->file) }}" type="video/mp4">
                                            </video>
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    <a data-bs-toggle="modal" data-bs-target="#editModal{{$item->id}}" class="btn bg-warning bg-opacity-25 text-warning" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a class="btn bg-danger bg-opacity-25 text-danger"
                                        href="{{ route('galeri-delete',Crypt::encrypt($item->id)) }}"
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
    new DataTable('#example',{
        responsive: true
    });
</script>
@endsection
