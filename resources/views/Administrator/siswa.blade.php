@extends('Administrator.template')
@section('content')
    <h1 class="fw-bold">Siswa</h1>
    <table class="table">
        <thead class="table-dark">
        <div style="background-color: #003F91;" class="text-white p-3 mb-3">

            <tr>
                <th>Nisn</th>
                <th>Nama Siswa</th>
                <th>Jenis Kelamin</th>
                <th>Tahun Masuk</th>
            </tr>
        </div>
        </thead>
        <tbody>
        <tr>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
            <td>john@example.com</td>
        </tr>
        <tr>
            <td>Mary</td>
            <td>Moe</td>
            <td>mary@example.com</td>
            <td>mary@example.com</td>
        </tr>
        </tbody>
    </table>
@endsection