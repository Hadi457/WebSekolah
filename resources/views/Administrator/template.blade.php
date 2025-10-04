<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 5 Sidebar</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/fontawesome/css/all.min.css') }}">
    <link href="https://cdn.lineicons.com/5.0/lineicons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.datatables.net/v/dt/dt-2.0.2/datatables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/v/dt/dt-2.0.2/datatables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.0/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.0/js/responsive.bootstrap5.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap5.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/3.0.0/css/responsive.bootstrap5.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            overflow-x: hidden;
        }
        .sidebar {
            width: 320px;
            min-height: 100vh;
            background-color: #003F91;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            display: block;
        }
        .btn-navbar:hover {
            background-color: #519cd977;
            color: white;
        }
        .content-area {
            flex-grow: 1;
            overflow-y: auto;
            max-height: 100vh;
        }
        @media (max-width: 991px) {
            .content-area {
                padding: 1px 15px 0 15px;
            }
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <div class="sidebar d-flex flex-column">
            <div class="d-flex justify-content-center align-items-center p-3">
                <img src="{{ asset('asset/image/sman6logo.png') }}" width="75" height="75" alt="">
            </div>
            <h3 class="p-3 fw-semibold text-white text-center" style="margin-top: -10px;">Admin</h3>
            <p class="text-white text-center" style="margin-top: -15px;">SMA Negeri 6 Jakarta</p>
            <div class="btn-navbar mx-3 mt-1 rounded-3 px-3 d-flex justify-content-start align-items-center">
                <a href="/admin/dashboard">
                    <i class="me-3 fa-solid fa-dashboard text-white"></i>
                    Dashboard
                </a>
            </div>
            <div class="btn-navbar mx-3 mt-1 rounded-3 px-3 d-flex justify-content-start align-items-center">
                <a href="/admin/user">
                    <i class="me-3 fa-solid fa-user text-white"></i>
                    Users
                </a>
            </div>
            <div class="btn-navbar mx-3 mt-1 rounded-3 px-3 d-flex justify-content-start align-items-center">
                <a href="/admin/guru">
                    <i class="me-3 fa-solid fa-chalkboard-user text-white"></i>
                    Guru
                </a>
            </div>
            <div class="btn-navbar mx-3 mt-1 rounded-3 px-3 d-flex justify-content-start align-items-center">
                <a href="/admin/siswa">
                    <i class="me-3 fa-solid fa-user-graduate text-white"></i>
                    Siswa
                </a>
            </div>
            <div class="btn-navbar mx-3 mt-1 rounded-3 px-3 d-flex justify-content-start align-items-center">
                <a href="/admin/galeri">
                    <i class="me-3 fa-solid fa-image text-white"></i>
                    Galeri
                </a>
            </div>
            <div class="btn-navbar mx-3 mt-1 rounded-3 px-3 d-flex justify-content-start align-items-center">
                <a href="/admin/berita">
                    <i class="me-3 fa-solid fa-newspaper text-white"></i>
                    Berita
                </a>
            </div>
            <div class="btn-navbar mx-3 mt-1 rounded-3 px-3 d-flex justify-content-start align-items-center">
                <a href="/admin/eskul">
                    <i class="me-3 fa-solid fa-futbol text-white"></i>
                    Ekstrakurikuler
                </a>
            </div>
            <div class="btn-navbar mx-3 mt-1 rounded-3 px-3 d-flex justify-content-start align-items-center">
                <a href="/admin/profile-sekolah">
                    <i class="me-3 fa-solid fa-school text-white"></i>
                    Profile Sekolah
                </a>
            </div>
            <div class="d-flex mt-auto m-3 rounded-3">
                <div class="px-3 d-flex justify-content-start align-items-center">
                    <a href="/logout">
                        <i class="me-3 fa-solid fa-right-from-bracket text-white"></i>
                        Logout
                    </a>
                </div>
            </div>
        </div>
        <div class="content-area p-3">
            @yield('content')
        </div>
    </div>
    <script src="{{ asset('asset/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>