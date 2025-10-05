@extends('Administrator.template')
@section('content')
    <!-- Modal Create Siswa -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

    <!-- Modal Edit Siswa -->
    @foreach ($siswa as $item)
        <div class="modal fade" id="editModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel{{$item->id}}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{route('siswa-update', Crypt::encrypt($item->id))}}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="nisn" class="form-label fw-semibold">Nisn<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="nisn" name="nisn" required value="{{$item->nisn}}" placeholder="Masukan NISN">
                            </div>
                            <div class="mb-4">
                                <label for="nama_siswa" class="form-label fw-semibold">Nama Siswa<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" required value="{{$item->nama_siswa}}" placeholder="Masukan Nama Siswa">
                            </div>
                            <div class="mb-4">
                                <label for="jenis_kelamin">Jenis Kelamin<span class="text-danger">*</span></label>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-select mt-2" aria-label="Default select example">
                                    <option value="Laki-laki"{{ $item->jenis_kelamin == "Laki-laki" ? 'selected' : '' }}>Laki-laki</option>
                                    <option value="Perempuan" {{ $item->jenis_kelamin == "Perempuan" ? 'selected' : '' }}>Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="tahun_masuk" class="form-label fw-semibold">Tahun Masuk<span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="tahun_masuk" name="tahun_masuk" min="2000" max="{{ date('Y') }}" required value="{{$item->tahun_masuk}}" placeholder="Masukan Tahun">
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
            <h3 class="fw-bold py-3 text-white">Siswa</h3>
            <!-- Button trigger modal -->
            <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary d-flex align-items-center py-3 px-4" style="background-color: #6D326D; height: 25px; border: none; border-radius: 25px; font-size: 15px;">Tambah Siswa</a>
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
                            <th scope="col">NISN</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Tahun Masuk</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswa as $item)    
                            <tr>
                                <td scope="row">{{$item->nisn}}</td>
                                <td>{{$item->nama_siswa}}</td>
                                <td>{{$item->jenis_kelamin}}</td>
                                <td>{{$item->tahun_masuk}}</td>
                                <td>
                                    <a class="btn bg-warning bg-opacity-25 text-warning" href="#" data-bs-toggle="modal" data-bs-target="#editModal{{$item->id}}">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <a class="btn bg-danger bg-opacity-25 text-danger" href="{{route('siswa-delete',Crypt::encrypt($item->id))}}" onclick="return confirm('Hapus data ini?')">
                                        <i class="fa-solid fa-trash"></i>
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