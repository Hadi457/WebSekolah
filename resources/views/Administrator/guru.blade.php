@extends('Administrator.template')
@section('content')
    <!-- Modal Creatae Guru-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

    <!-- Modal Edit Guru-->
    @foreach ($guru as $item)
        <div class="modal fade" id="editModal{{$item->id}}" tabindex="-1" aria-labelledby="editModalLabel{{$item->id}}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Guru</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{route('guru-update', Crypt::encrypt($item->id))}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="nip" class="form-label fw-semibold">Nip<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="nip" name="nip" placeholder="Masukan NIP" required value="{{$item->nip}}">
                            </div>
                            <div class="mb-4">
                                <label for="nama_guru" class="form-label fw-semibold">Nama Guru<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="nama_guru" name="nama_guru" placeholder="Masukan Nama Guru" required value="{{$item->nama_guru}}">
                            </div>
                            <div class="mb-4">
                                <label for="foto" class="form-label fw-semibold">Foto<span class="text-danger">*</span></label>
                                <input type="file" class="form-control" id="foto" name="foto" placeholder="Masukan foto">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Foto Saat Ini<span class="text-danger">*</span></label>
                                <div class="mt-2">
                                    <img src="{{ asset('storage/foto-teacher/' . $item->foto) }}"
                                        alt="{{ $item->nama_guru }}"
                                        style="max-width: 100%; height: 100px; object-fit: cover; border-radius: 5px;">
                                    <p class="small text-muted mt-1">{{ $item->foto }}</p>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="mapel" class="form-label fw-semibold">mapel<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="mapel" name="mapel" placeholder="Masukan Mata Pelajaran" required value="{{$item->mapel}}">
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
        <div class="d-flex justify-content-between align-items-center px-3" style="border-top-left-radius: 10px; border-top-right-radius: 10px; background-color: #003F91;">
            <h3 class="fw-bold py-3 text-white">Guru</h3>
            @if(Auth::check() && Auth::user()->role == 'Admin')
                <!-- Button trigger modal -->
                <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary d-flex align-items-center py-3 px-4" style="background-color: #6D326D; height: 25px; border: none; border-radius: 25px; font-size: 15px;">Tambah Guru</a>
            @endif
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
            <div class="table-responsive min-vh100">
                <table id="example" class="table w-100 table-striped">
                    <thead>
                        <tr>
                            <th scope="col">NIP</th>
                            <th scope="col">Nama Guru</th>
                            <th scope="col">Mapel</th>
                            <th scope="col">Foto</th>
                            @if(Auth::check() && Auth::user()->role == 'Admin')
                                <th scope="col">Aksi</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($guru as $item)
                            <tr>
                                <td scope="row">{{$item->nip}}</td>
                                <td>{{$item->nama_guru}}</td>
                                <td>{{$item->mapel}}</td>
                                <td>
                                    <img src="{{asset('storage/foto-teacher/'.$item->foto)}}" width="100" height="100" style="object-fit: cover;" alt="">
                                </td>
                                @if(Auth::check() && Auth::user()->role == 'Admin')
                                    <td>
                                        <a class="btn bg-warning bg-opacity-25 text-warning" href="#" data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id }}">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a class="btn bg-danger bg-opacity-25 text-danger" href="{{route('guru-delete',Crypt::encrypt($item->id))}}" onclick="return confirm('Hapus data ini?')">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </td>
                                @endif
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
