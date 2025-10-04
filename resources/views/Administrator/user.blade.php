@extends('Administrator.template')
@section('content')
    <!-- Modal Create User -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('user-store')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama" class="form-label fw-semibold">Nama<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label fw-semibold">Username<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Masukan username" required>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label fw-semibold">password<span class="text-danger">*</span></label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Masukan password" required>
                        </div>
                        <div class="mb-4">
                            <label for="role" class="form-label fw-semibold">Role<span class="text-danger">*</span></label>
                            <select name="role" id="role" class="form-select mt-2" aria-label="Default select example">
                                <option value="Admin">Admin</option>
                                <option value="Operator">Operator</option>
                            </select>
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

    <!-- Modal Edit User -->
    @foreach ($user as $item)
        <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{route('user-update', Crypt::encrypt($item->id))}}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="nama" class="form-label fw-semibold">Nama<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan nama" required value="{{$item->nama}}">
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label fw-semibold">Username<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Masukan username" required value="{{$item->username}}">
                            </div>
                            <div class="mb-4">
                                <label for="password" class="form-label fw-semibold">password<span class="text-danger">*</span></label>
                                <input type="password" class="form-control" id="password" placeholder="Masukan password" name="password">
                            </div>
                            <div class="mb-4">
                                <label for="role" class="form-label fw-semiold">Role</label>
                                <select name="role" id="role" class="form-select mt-2" aria-label="Default select example">
                                    <option value="Admin" {{ $item->role == "Admin" ? 'selected' : '' }}>Admin</option>
                                    <option value="Operator" {{ $item->role == "Operator" ? 'selected' : '' }}>Operator</option>
                                </select>
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
    @endforeach

    <div class="h-100">
        <div class="d-flex justify-content-between align-items-center px-3" style="border-top-left-radius: 10px; border-top-right-radius: 10px; background-color: #003F91;">
            <h3 class="fw-bold py-3 text-white">User</h3>
            <!-- Button trigger modal -->
            <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary d-flex align-items-center py-3 px-4" style="background-color: #6D326D; height: 25px; border: none; border-radius: 25px; font-size: 15px;">Tambah User</a>
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
            <div class="table-responsive min-vh-100">
                <table id="example" class="table table-striped w-100">
                    <thead>
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Username</th>
                            <th scope="col">Role</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $item)
                            <tr>
                                <td scope="row">{{$item->nama}}</td>
                                <td>{{$item->username}}</td>
                                <td>
                                    @if($item->role == 'Admin')
                                        <span class="badge px-3" style="background-color: #A7D2F4; color: #213b4d;">Admin</span>
                                    @elseif($item->role == 'Operator')
                                        <span class="badge px-3" style="background-color: #ffaeff; color: #421D42;">Operator</span>
                                    @endif
                                </td>
                                <td>
                                    <a class="btn text-white" style="background-color: #ff595e;" href="#" data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id }}">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                    <a class="btn text-white" style="background-color: #ff595e;" href="{{route('user-delete',Crypt::encrypt($item->id))}}" onclick="return confirm('Hapus data ini?')">
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