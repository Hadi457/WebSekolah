@extends('Administrator.template')
@section('content')
<div class="h-100">
    <div class="d-flex justify-content-between align-items-center">
        <h3 class="fw-bold py-3">Siswa</h3>
        <a href="#" class="btn btn-primary d-flex align-items-center py-3" style="background-color: #6D326D; height: 25px; border: none; border-radius: 25px;">+ Tambah Siswa</a>
    </div>
    <div class="bg-light p-3 rounded" style="height: 600px;">
        <table id="example" class="table table-striped">
            <thead>
                <tr>
                <th>Id</th>
                <th>Nisn</th>
                <th class="text-center">Nama Siswa</th>
                <th>Jenis Kelamin</th>
                <th>Tahun Masuk</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>008899</td>
                    <td>Hadi</td>
                    <td>Laki Laki</td>
                    <td>2025</td>
                    <td>
                        a
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>008899</td>
                    <td>Hadi</td>
                    <td>Laki Laki</td>
                    <td>2025</td>
                    <td>
                        a
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>008899</td>
                    <td>Hadi</td>
                    <td>Laki Laki</td>
                    <td>2025</td>
                    <td>
                        a
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>008899</td>
                    <td>Hadi</td>
                    <td>Laki Laki</td>
                    <td>2025</td>
                    <td>
                        a
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>008899</td>
                    <td>Hadi</td>
                    <td>Laki Laki</td>
                    <td>2025</td>
                    <td>
                        a
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>008899</td>
                    <td>Hadi</td>
                    <td>Laki Laki</td>
                    <td>2025</td>
                    <td>
                        a
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>008899</td>
                    <td>Hadi</td>
                    <td>Laki Laki</td>
                    <td>2025</td>
                    <td>
                        a
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>008899</td>
                    <td>Hadi</td>
                    <td>Laki Laki</td>
                    <td>2025</td>
                    <td>
                        a
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<script>
        new DataTable('#example');
    </script>
@endsection