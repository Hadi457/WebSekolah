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
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="10">{{$profile->deskripsi}}</textarea>
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
            @if(Auth::check() && Auth::user()->role == 'Admin')
                <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#editProfileModal" class="btn btn-primary d-flex align-items-center py-3 px-4" style="background-color: #6D326D; height: 25px; border: none; border-radius: 25px; font-size: 15px;">Edit Profile</a>
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
                        <p class="text-justify" style="white-space: pre-line;">{{ $profile->visi_misi }}</p>
                    </div>

                    <div>
                        <h6 class="text-primary">Sambutan Kepala Sekolah</h6>
                        <p class="text-justify" style="white-space: pre-line;">{{ $profile->deskripsi }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
