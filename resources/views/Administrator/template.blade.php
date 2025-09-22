<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 5 Sidebar</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('asset/fontawesome/css/all.min.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.lineicons.com/5.0/lineicons.css" rel="stylesheet">
    <style>
    body {
        font-family: 'Poppins', sans-serif;
        min-height: 100vh;
        overflow-x: hidden;
    }
    .sidebar {
        width: 320px;
        min-height: 100vh;
    }
    .sidebar a {
        color: white;
        text-decoration: none;
        padding: 10px 15px;
        display: block;
    }
    .sidebar a:hover {
        color: #5DA9E9;
    }
    </style>
</head>
<body>
    <div class="d-flex">
        <div class="sidebar d-flex flex-column" style="background-color: #003F91;">
            <h3 class="p-3 fw-bold text-white">Lorem</h3>
            <div class="px-3 d-flex justify-content-start align-items-center">
                <a href="/admin/dashbord">Dashboard</a>
            </div>
            <div class="px-3 d-flex justify-content-start align-items-center">
                <a href="/admin/user">Users</a>
            </div>
            <div class="px-3 d-flex justify-content-start align-items-center">
                <a href="/admin/guru">Guru</a>
            </div>
            <div class="px-3 d-flex justify-content-start align-items-center">
                <a href="/admin/siswa">Siswa</a>
            </div>
            <div class="px-3 d-flex justify-content-start align-items-center">
                <a href="/admin/galeri">Galeri</a>
            </div>
            <div class="px-3 d-flex justify-content-start align-items-center">
                <a href="/admin/berita">Berita</a>
            </div>
            <div class="px-3 d-flex justify-content-start align-items-center">
                <a href="/admin/eskul">Ekstrakulikuler</a>
            </div>
            <div class="px-3 d-flex justify-content-start align-items-center">
                <a href="/admin/profile-sekolah">Profile Sekolah</a>
            </div>
            <div class="d-flex mt-auto">
                <a href="/logout">Logout</a>
            </div>
        </div>
        <div class="flex-grow-1 p-3">
            @yield('content')
        </div>
    </div>
</body>
</html>
<script src="{{asset('asset/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

