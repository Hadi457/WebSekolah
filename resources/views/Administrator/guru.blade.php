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
    <div class="modal-body">
        <form action="" method="post">
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
                <input type="text" class="form-control" id="foto" name="foto" required>
            </div>
            <div class="mb-4">
                <label for="mapel" class="form-label">mapel</label>
                <input type="date" class="form-control" id="mapel" name="mapel" required>
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
        <h3 class="fw-bold py-3 text-white">Guru</h3>
        <!-- Button trigger modal -->
        <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary d-flex align-items-center py-3 px-4" style="background-color: #6D326D; height: 25px; border: none; border-radius: 25px; font-size: 15px;">Tambah Guru</a>
    </div>
    <div class="bg-light p-3 rounded" style="height: 600px;">
        <table id="example" class="table table-responsive table-striped" style="height: 100%;">
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
                <tr>
                    <td scope="row">1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>Admin</td>
                    <td>OK</td>
                </tr>
            </tbody>
    </div>
</div>
<script>
new DataTable('#example');
</script>
@endsection