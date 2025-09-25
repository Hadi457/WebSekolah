@extends('Administrator.template')
@section('content')
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="" method="post">
            <div class="mb-3">
                <label for="nisn" class="form-label">Nisn</label>
                <input type="text" class="form-control" id="nisn" name="nisn" required>
            </div>
            <div class="mb-4">
                <label for="nama_siswa" class="form-label">Nama Siswa</label>
                <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" required>
            </div>
            <div class="mb-4">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-select mt-2" aria-label="Default select example">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="tahun_masuk" class="form-label">Tahun Masuk</label>
                <input type="date" class="form-control" id="tahun_masuk" name="tahun_masuk" required>
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
        <h3 class="fw-bold py-3 text-white">Siswa</h3>
        <!-- Button trigger modal -->
        <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary d-flex align-items-center py-3 px-4" style="background-color: #6D326D; height: 25px; border: none; border-radius: 25px; font-size: 15px;">Tambah Siswa</a>
    </div>
    <div class="bg-light p-3 rounded" style="height: 600px;">
        <table id="example" class="table table-responsive table-striped">
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
                <tr>
                    <td scope="row">1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>2023</td>
                    <td>OK</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<script>
    new DataTable('#example');
</script>
@endsection