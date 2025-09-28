<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap 5 Sidebar</title>
        <link rel="stylesheet" href="{{ asset('asset/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('asset/fontawesome/css/all.min.css')}}">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.datatables.net/v/dt/dt-2.0.2/datatables.min.css" rel="stylesheet">
        <script src="https://cdn.datatables.net/v/dt/dt-2.0.2/datatables.min.js"></script>
        <script src ="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js"></script>
        <script src="https://cdn.datatables.net/responsive/3.0.0/js/dataTables.responsive.js"></script>
        <script src="https://cdn.datatables.net/responsive/3.0.0/js/responsive.bootstrap5.js"></script>
        <link herf="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
        <link herf="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap5.css" rel="stylesheet">
        <link herf="https://cdn.datatables.net/responsive/3.0.0/css/responsive.bootstrap5.css" rel="stylesheet">
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
                <div class="d-flex justify-content-center align-items-center p-3">
                    <img src="{{asset('asset/image/sman6logo.png')}}" width="75" height="75" alt="">
                </div>
                <h3 class="p-3 fw-semibold text-white text-center" style="margin-top: -10px;">Admin</h3>
                <p class="text-white text-center" style="margin-top: -15px;">SMA Negri 6 Jakarta</p>
                <div class="px-3 d-flex justify-content-start align-items-center">
                    <i class="fa-solid fa-grip  text-white"></i>
                    <a href="/admin/dashbord">Dashboard</a>
                </div>
                <div class="px-3 d-flex justify-content-start align-items-center">
                    <i class="fa-solid fa-user  text-white"></i>
                    <a href="/admin/user">Users</a>
                </div>
                <div class="px-3 d-flex justify-content-start align-items-center">
                    <i class="fa-solid fa-chalkboard-user   text-white"></i>
                    <a href="/admin/guru">Guru</a>
                </div>
                <div class="px-3 d-flex justify-content-start align-items-center">
                    <i class="fa-solid fa-users text-white"></i>
                    <a href="/admin/siswa">Siswa</a>
                </div>
                <div class="px-3 d-flex justify-content-start align-items-center">
                    <i class="fa-solid fa-image text-white"></i>
                    <a href="/admin/galeri">Galeri</a>
                </div>
                <div class="px-3 d-flex justify-content-start align-items-center">
                    <i class="fa-solid fa-newspaper text-white"></i>
                    <a href="/admin/berita">Berita</a>
                </div>
                <div class="px-3 d-flex justify-content-start align-items-center">
                    <i class="fa-solid fa-futbol    text-white"></i>
                    <a href="/admin/eskul">Ekstrakurikuler</a>
                </div>
                <div class="px-3 d-flex justify-content-start align-items-center">
                    <i class="fa-solid fa-school    text-white"></i>
                    <a href="/admin/profile-sekolah">Profile Sekolah</a>
                </div>
                <div class="d-flex mt-auto">
                    <div class="px-3 d-flex justify-content-start align-items-center">
                        <i class="fa-solid fa-right-from-bracket text-white"></i>
                        <a href="/logout">Logout</a>
                    </div>
                    
                </div>
            </div>
            <div class="flex-grow-1 p-3" style="padding-top: 1px; padding-left: 0; padding-right: 0; overflow: hidden;">
                @yield('content')
            </div>
        </div>
    </body>
</html>
<script src="{{asset('asset/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

