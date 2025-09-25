@extends('Administrator.template')
@section('content')
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Profile</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="" method="post">
            <div class="mb-3">
                <label for="nama_sekolah" class="form-label">Nama Sekolah</label>
                <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" required>
            </div>
            <div class="mb-4">
                <label for="kepala_sekolah" class="form-label">Kepala Sekolah</label>
                <input type="text" class="form-control" id="kepala_sekolah" name="kepala_sekolah" required>
            </div>
            <div class="mb-4">
                <label for="foto" class="form-label">Foto</label>
                <input type="text" class="form-control" id="foto" name="foto" required>
            </div>
            <div class="mb-4">
                <label for="logo" class="form-label">Logo</label>
                <input type="text" class="form-control" id="logo" name="logo" required>
            </div>
            <div class="mb-4">
                <label for="alamat" class="form-label">alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>
            <div class="mb-4">
                <label for="kontak" class="form-label">Kontak</label>
                <input type="number" class="form-control" id="kontak" name="kontak" required>
            </div>
            <div class="mb-4">
                <label for="visi_misi" class="form-label">Visi Misi</label>
                <input type="text" class="form-control" id="visi_misi" name="visi_misi" required>
            </div>
            <div class="mb-4">
                <label for="tahun_berdiri" class="form-label">Tahun Berdiri</label>
                <input type="text" class="form-control" id="tahun_berdiri" name="tahun_berdiri" required>
            </div>
            <div class="mb-4">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
            </div>
        </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
    </div>
    </div>
</div>
</div>
<div class="h-100">
    <div class="d-flex justify-content-between align-items-center px-3" style="border-top-left-radius: 10px; border-top-right-radius: 10px; background-color: #003F91;">
        <h3 class="fw-bold py-3 text-white">Profile Sekolah</h3>
        <!-- Button trigger modal -->
        <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary d-flex align-items-center py-3 px-4" style="background-color: #6D326D; height: 25px; border: none; border-radius: 25px; font-size: 15px;">Tambah Profile</a>
    </div>
    <div class="bg-light p-3 rounded" style="height: 600px;">
        <table id="example" class="table table-responsive table-striped">
            <thead>
                <tr>
                    <th scope="col">Nama Sekolah</th>
                    <th scope="col">Kepala Sekolah</th>
                    <th scope="col">Foto
                    <th scope="col">logo</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Kontak</th>
                    <th scope="col">Visi Misi</th>
                    <th scope="col">Tahun Berdiro</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nama Sekolah</td>
                    <td>Kepala Sekolah</td>
                    <td>Foto
                    <td>logo</td>
                    <td>Alamat</td>
                    <td>Kontak</td>
                    <td>Visi Misi</td>
                    <td>Tahun Berdiro</td>
                    <td>Deskripsi</td>
                    <td>Aksi</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<script>
    new DataTable('#example');
</script>
@endsection