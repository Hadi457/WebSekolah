{{-- @extends('Administrator.template')
@section('content')
    <style>
        @media (max-width: 768px) {
            .btn {
                font-size: 14px;
                padding: 8px 16px;
            }
            
            h3 {
                font-size: 1.5rem;
            }
        }
    </style>
    <!-- Modal Edit -->
    <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editProfileModalLabel">Edit Profile Sekolah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('profile-sekolah-update', Crypt::encrypt($profile->id)) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nama_sekolah" class="form-label">Nama Sekolah</label>
                                <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" value="{{$profile->nama_sekolah}}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="kepala_sekolah" class="form-label">Kepala Sekolah</label>
                                <input type="text" class="form-control" id="kepala_sekolah" name="kepala_sekolah" value="{{$profile->kepala_sekolah}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="foto" class="form-label">Foto Kepala Sekolah</label>
                                <div class="mb-2">
                                    <img src="{{asset('storage/school-profile/'.$profile->foto)}}" width="100" height="100" alt="Foto Kepala Sekolah" class="img-thumbnail">
                                </div>
                                <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="logo" class="form-label">Logo Sekolah</label>
                                <div class="mb-2">
                                    <img src="{{asset('storage/school-profile/'.$profile->logo)}}" width="100" height="100" alt="Logo Sekolah" class="img-thumbnail">
                                </div>
                                <input type="file" class="form-control" id="logo" name="logo" accept="image/*">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="2">{{$profile->alamat}}</textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="kontak" class="form-label">Kontak</label>
                                <input type="text" class="form-control" id="kontak" name="kontak" value="{{$profile->kontak}}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="tahun_berdiri" class="form-label">Tahun Berdiri</label>
                                <input type="text" class="form-control" id="tahun_berdiri" name="tahun_berdiri" value="{{$profile->tahun_berdiri}}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="visi_misi" class="form-label">Visi Misi</label>
                            <textarea class="form-control" id="visi_misi" name="visi_misi" rows="3">{{$profile->visi_misi}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4">{{$profile->deskripsi}}</textarea>
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

    <div class="h-100">
        <div class="d-flex justify-content-between align-items-center px-3 py-3 rounded-top" style="background-color: #003F91;">
            <h3 class="fw-bold text-white mb-0">Profile Sekolah</h3>
            <button type="button" data-bs-toggle="modal" data-bs-target="#editProfileModal" class="btn d-flex align-items-center py-2 px-4" style="background-color: #6D326D; border: none; border-radius: 25px; font-size: 15px; color: white;">
                <i class="bi bi-pencil-square me-2"></i> Edit Profile
            </button>
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
        <div class="bg-light p-4 rounded-bottom" style="min-height: 600px;">
            <div class="card bg-light mt-5" style="border: none;">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-4 text-center mb-3 mb-md-0">
                            <div class="mb-3">
                                <img src="{{ asset('storage/school-profile/' . $profile->logo) }}" alt="Logo Sekolah" class="img-fluid rounded" style="max-height: 150px;">
                                <p class="mt-2 fw-semibold">Logo Sekolah</p>
                            </div>
                            <div>
                                <img src="{{ asset('storage/school-profile/' . $profile->foto) }}" alt="Foto Kepala Sekolah" class="img-fluid rounded" style="max-height: 200px;">
                                <p class="mt-2 fw-semibold">Kepala Sekolah</p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h4 class="text-primary">{{ $profile->nama_sekolah }}</h4>
                                <p class="text-muted mb-1"><i class="bi bi-geo-alt-fill me-2"></i>{{ $profile->alamat }}</p>
                                <p class="text-muted"><i class="bi bi-telephone-fill me-2"></i>{{ $profile->kontak }}</p>
                            </div>
                            <div class="mb-1">
                                <h5 class="border-bottom pb-2">Informasi Umum</h5>
                                <div class="row">
                                    <div class="col-sm-6 mb-2 d-flex">
                                        <p class="fw-semibold me-1">Kepala Sekolah :</p>{{ $profile->kepala_sekolah }}
                                    </div>
                                    <div class="col-sm-6 mb-2 d-flex">
                                        <p class="fw-semibold me-1">Tahun Berdiri :</p> {{ $profile->tahun_berdiri }}
                                    </div>
                                </div>
                            </div>
                            <div class="ro d-flex">
                                <div class="col-6 mb-4">
                                    <h5 class="pb-2">Visi Misi</h5>
                                    <p class="text-justify">{{ $profile->visi_misi }}</p>
                                </div>
                                <div class="col-6 mb-4">
                                    <h5 class="pb-2">Sambutan Kepala Sekolah</h5>
                                    <p class="text-justify">{{ $profile->deskripsi }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}

@extends('Administrator.template')
@section('content')
<!-- Modal Edit -->
    <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editProfileModalLabel">Edit Profile Sekolah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('profile-sekolah-update', Crypt::encrypt($profile->id)) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nama_sekolah" class="form-label">Nama Sekolah</label>
                                <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" value="{{$profile->nama_sekolah}}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="kepala_sekolah" class="form-label">Kepala Sekolah</label>
                                <input type="text" class="form-control" id="kepala_sekolah" name="kepala_sekolah" value="{{$profile->kepala_sekolah}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="foto" class="form-label">Foto Kepala Sekolah</label>
                                <div class="mb-2">
                                    <img src="{{asset('storage/school-profile/'.$profile->foto)}}" width="100" height="100" alt="Foto Kepala Sekolah" class="img-thumbnail">
                                </div>
                                <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="logo" class="form-label">Logo Sekolah</label>
                                <div class="mb-2">
                                    <img src="{{asset('storage/school-profile/'.$profile->logo)}}" width="100" height="100" alt="Logo Sekolah" class="img-thumbnail">
                                </div>
                                <input type="file" class="form-control" id="logo" name="logo" accept="image/*">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="2">{{$profile->alamat}}</textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="kontak" class="form-label">Kontak</label>
                                <input type="text" class="form-control" id="kontak" name="kontak" value="{{$profile->kontak}}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="tahun_berdiri" class="form-label">Tahun Berdiri</label>
                                <input type="text" class="form-control" id="tahun_berdiri" name="tahun_berdiri" value="{{$profile->tahun_berdiri}}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="visi_misi" class="form-label">Visi Misi</label>
                            <textarea class="form-control" id="visi_misi" name="visi_misi" rows="3">{{$profile->visi_misi}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4">{{$profile->deskripsi}}</textarea>
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
<div class="h-100">
        <div class="d-flex justify-content-between align-items-center px-3" style="border-top-left-radius: 10px; border-top-right-radius: 10px; background-color: #003F91;">
            <h3 class="fw-bold py-3 text-white">Profile Sekolah</h3>
            <!-- Button trigger modal -->
            <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#editProfileModal" class="btn btn-primary d-flex align-items-center py-3 px-4" style="background-color: #6D326D; height: 25px; border: none; border-radius: 25px; font-size: 15px;">Edit Profile</a>
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
        <div class="bg-light p-4 rounded-bottom border">
            <div class="row">
                <!-- Sidebar Info -->
                <div class="col-md-3">
                    <div class="text-center mb-4">
                        <img src="{{ asset('storage/school-profile/' . $profile->logo) }}" alt="Logo" class="img-fluid mb-3" style="max-height: 120px;">
                    </div>
                    <div class="list-group">
                        <div class="list-group-item">
                            <strong>Kepala Sekolah</strong>
                            <p class="mb-1">{{ $profile->kepala_sekolah }}</p>
                        </div>
                        <div class="list-group-item">
                            <strong>Kontak</strong>
                            <p class="mb-1">{{ $profile->kontak }}</p>
                        </div>
                        <div class="list-group-item">
                            <strong>Tahun Berdiri</strong>
                            <p class="mb-1">{{ $profile->tahun_berdiri }}</p>
                        </div>
                        <div class="list-group-item text-center">
                            <img src="{{ asset('storage/school-profile/' . $profile->foto) }}" alt="Kepala Sekolah" class="img-fluid rounded" style="max-height: 150px;">
                            <p class="mt-2 small">Kepala Sekolah</p>
                        </div>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="col-md-9">
                    <h4 class="text-primary mb-3">{{ $profile->nama_sekolah }}</h4>
                    <p class="text-muted mb-4">
                        {{ $profile->alamat }}
                    </p>

                    <div class="mb-4">
                        <h6 class="text-primary">Visi Misi Sekolah</h6>
                        <p class="text-justify">{{ $profile->visi_misi }}</p>
                    </div>

                    <div>
                        <h6 class="text-primary">Sambutan Kepala Sekolah</h6>
                        <p class="text-justify">{{ $profile->deskripsi }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection