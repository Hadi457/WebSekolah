@extends('Administrator.template')
@section('content')
    <!-- Modal -->
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
                            <label for="nip" class="form-label">Nip</label>
                            <input type="text" class="form-control" id="nip" name="nip" required>
                        </div>
                        <div class="mb-4">
                            <label for="nama_guru" class="form-label">Nama Guru</label>
                            <input type="text" class="form-control" id="nama_guru" name="nama_guru" required>
                        </div>
                        <div class="mb-4">
                            <label for="foto" class="form-label">Foto</label>
                            <input type="file" class="form-control" id="foto" name="foto" required>
                        </div>
                        <div class="mb-4">
                            <label for="mapel" class="form-label">mapel</label>
                            <input type="text" class="form-control" id="mapel" name="mapel" required>
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
    <div class="h-100">
        <div class="d-flex justify-content-between align-items-center px-3" style="border-top-left-radius: 10px; border-top-right-radius: 10px; background-color: #003F91;">
            <h3 class="fw-bold py-3 text-white">Guru</h3>
            <!-- Button trigger modal -->
            <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary d-flex align-items-center py-3 px-4" style="background-color: #6D326D; height: 25px; border: none; border-radius: 25px; font-size: 15px;">Tambah Guru</a>
        </div>
        @if (Session::get('sukses') !==  null)
            <div class="alert mt-4 alert-success alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                {{ Session::get('sukses') }}
            </div>  
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="bg-light p-3 rounded">
            <div class="table-responsive">
                <table id="example" class="table w-100 table-striped">
                    <thead>
                        <tr>
                            <th scope="col">NIP</th>
                            <th scope="col">Nama Guru</th>
                            <th scope="col">Mapel</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Aksi</th>
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
                                <td>
                                    <a class="btn btn-danger" href="{{route('guru-delete',Crypt::encrypt($item->id))}}" onclick="return confirm('Hapus data ini?')">
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
    new DataTable('#example', {
        scrollY: '410px',
    });
</script>
@endsection