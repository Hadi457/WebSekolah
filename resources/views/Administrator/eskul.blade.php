@extends('Administrator.template')
@section('content')
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Eskul</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="" method="post">
            <div class="mb-3">
                <label for="nama_eskul" class="form-label">Nama Eskul</label>
                <input type="text" class="form-control" id="nama_eskul" name="nama_eskul" required>
            </div>
            <div class="mb-4">
                <label for="pembina" class="form-label">Pembina</label>
                <input type="text" class="form-control" id="pembina" name="pembina" required>
            </div>
            <div class="mb-4">
                <label for="jadwal_latihan" class="form-label">Jadwal Latihan</label>
                <input type="text" class="form-control" id="jadwal_latihan" name="jadwal_latihan" required>
            </div>
            <div class="mb-4">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
            </div>
            <div class="mb-4">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar" required>
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
        <h3 class="fw-bold py-3 text-white">Ekstrakurikuler</h3>
        <!-- Button trigger modal -->
        <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary d-flex align-items-center py-3 px-4" style="background-color: #6D326D; height: 25px; border: none; border-radius: 25px; font-size: 15px;">Tambah Eskul</a>
    </div>
    <div class="bg-light p-3 rounded" style="height: 600px;">
        <table id="example" class="table table-responsive table-striped">
            <thead>
                <tr>
                    <th scope="col">Nama Eskul</th>
                    <th scope="col">Pembina</th>
                    <th scope="col">Jadwal Latihan</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">Pramuka</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>Lorem, ipsum dolor sit amet consectetur</td>
                    <td>pwp.jpg</td>
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