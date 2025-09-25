@extends('Administrator.template')
@section('content')
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-4">
                <label for="password" class="form-label">password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-4">
                <label for="role">Role</label>
                <select name="role" id="role" class="form-select mt-2" aria-label="Default select example">
                    <option value="Admin">Admini</option>
                    <option value="Operator">Perempuan</option>
                </select>
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
        <h3 class="fw-bold py-3 text-white">User</h3>
        <!-- Button trigger modal -->
        <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary d-flex align-items-center py-3 px-4" style="background-color: #6D326D; height: 25px; border: none; border-radius: 25px; font-size: 15px;">Tambah User</a>
    </div>
    <div class="bg-light p-3 rounded" style="height: 600px;">
        <table id="example" class="table table-responsive table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Role</th>
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
        </table>
    </div>
</div>
<script>
    new DataTable('#example');
</script>
@endsection