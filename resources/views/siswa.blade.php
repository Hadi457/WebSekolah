@extends('template')
@section( 'content')
    <div class="container mt-4 mt-md-5">
        <div class="text-center mb-4 mb-md-5">
            <h1 class="fw-bold mb-3">Siswa {{ $profile->nama_sekolah }}</h1>
            <p class="text-muted mx-auto" style="max-width: 600px;">
                Berikut daftar siswa {{ $profile->nama_sekolah }}.
            </p>
        </div>
        <div class="bg-light p-3 rounded">
            <div class="table-responsive">
                <table id="example" class="table w-100 table-striped">
                    <thead>
                        <tr>
                            <th scope="col">NISN</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Tahun Masuk</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswa as $item)
                            <tr>
                                <td scope="row">{{$item->nisn}}</td>
                                <td>{{$item->nama_siswa}}</td>
                                <td>{{$item->jenis_kelamin}}</td>
                                <td>{{$item->tahun_masuk}}</td>
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
