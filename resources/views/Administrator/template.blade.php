<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin {{$profile->nama_sekolah}}</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/fontawesome/css/all.min.css') }}">
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
</head>
<body class="bg-light" style="font-family: 'Poppins', sans-serif;">
    <!-- Offcanvas Sidebar untuk di Mobile -->
    <div class="offcanvas offcanvas-start" style="background-color: #003F91;" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="sidebarMobile">
        <div class="offcanvas-header border-bottom border-secondary">
            <div class="d-flex align-items-center w-100">
                <img src="{{ asset('asset/image/sman6logo.png') }}" width="50" height="50" alt="" class="me-3">
                <div class="flex-grow-1">
                    <h5 class="text-white mb-0 fw-semibold">{{Auth::user()->role}}</h5>
                    <small class="text-white-50">{{ $profile->nama_sekolah}}</small>
                </div>
            </div>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body p-0">
            <nav class="nav flex-column">
                <a href="/admin/dashboard" class="nav-link text-white py-3 px-3 d-flex align-items-center">
                    <i class="fas fa-dashboard me-3 fs-6"></i>Dashboard
                </a>
                <a href="/admin/user" class="nav-link text-white py-3 px-3 d-flex align-items-center">
                    <i class="fas fa-user me-3 fs-6"></i>Users
                </a>
                <a href="/admin/guru" class="nav-link text-white py-3 px-3 d-flex align-items-center">
                    <i class="fas fa-chalkboard-user me-3 fs-6"></i>Guru
                </a>
                <a href="/admin/siswa" class="nav-link text-white py-3 px-3 d-flex align-items-center">
                    <i class="fas fa-user-graduate me-3 fs-6"></i>Siswa
                </a>
                <a href="/admin/galeri" class="nav-link text-white py-3 px-3 d-flex align-items-center">
                    <i class="fas fa-image me-3 fs-6"></i>Galeri
                </a>
                <a href="/admin/berita" class="nav-link text-white py-3 px-3 d-flex align-items-center">
                    <i class="fas fa-newspaper me-3 fs-6"></i>Berita
                </a>
                <a href="/admin/eskul" class="nav-link text-white py-3 px-3 d-flex align-items-center">
                    <i class="fas fa-futbol me-3 fs-6"></i>Ekstrakurikuler
                </a>
                <a href="/admin/profile-sekolah" class="nav-link text-white py-3 px-3 d-flex align-items-center">
                    <i class="fas fa-school me-3 fs-6"></i>Profile Sekolah
                </a>
                <a href="/logout" class="nav-link text-white py-3 px-3 d-flex align-items-center">
                    <i class="fas fa-right-from-bracket me-3 fs-6"></i>Logout
                </a>
            </nav>
        </div>
    </div>

    <div class="d-flex" style="height: 100vh; overflow: hidden;">
        <!-- Desktop Sidebar -->
        <div class="d-none d-lg-flex flex-column text-white vh-100" style="background-color: #003F91; width: 280px;">
            <div class="p-4 border-bottom border-secondary">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('storage/school-profile/' . $profile->logo) }}" width="60" height="60" alt="" class="me-3">
                    <div>
                        <h5 class="mb-1 fw-semibold">{{Auth::user()->role}}</h5>
                        <small class="text-white-50">{{ $profile->nama_sekolah }}</small>
                    </div>
                </div>
            </div>

            <nav class="nav flex-column flex-grow-1 p-3">
                <a href="/admin/dashboard" class="nav-link text-white rounded py-3 mb-2 d-flex align-items-center">
                    <i class="fas fa-dashboard me-3 fs-5"></i>
                    <span>Dashboard</span>
                </a>
                <a href="/admin/user" class="nav-link text-white rounded py-3 mb-2 d-flex align-items-center">
                    <i class="fas fa-user me-3 fs-5"></i>
                    <span>Users</span>
                </a>
                <a href="/admin/guru" class="nav-link text-white rounded py-3 mb-2 d-flex align-items-center">
                    <i class="fas fa-chalkboard-user me-3 fs-5"></i>
                    <span>Guru</span>
                </a>
                <a href="/admin/siswa" class="nav-link text-white rounded py-3 mb-2 d-flex align-items-center">
                    <i class="fas fa-user-graduate me-3 fs-5"></i>
                    <span>Siswa</span>
                </a>
                <a href="/admin/galeri" class="nav-link text-white rounded py-3 mb-2 d-flex align-items-center">
                    <i class="fas fa-image me-3 fs-5"></i>
                    <span>Galeri</span>
                </a>
                <a href="/admin/berita" class="nav-link text-white rounded py-3 mb-2 d-flex align-items-center">
                    <i class="fas fa-newspaper me-3 fs-5"></i>
                    <span>Berita</span>
                </a>
                <a href="/admin/eskul" class="nav-link text-white rounded py-3 mb-2 d-flex align-items-center">
                    <i class="fas fa-futbol me-3 fs-5"></i>
                    <span>Ekstrakurikuler</span>
                </a>
                <a href="/admin/profile-sekolah" class="nav-link text-white rounded py-3 mb-2 d-flex align-items-center">
                    <i class="fas fa-school me-3 fs-5"></i>
                    <span>Profile Sekolah</span>
                </a>
            </nav>

            <div class="p-3 border-top border-secondary">
                <a href="/logout" class="nav-link text-white rounded py-3 d-flex align-items-center" style="margin-left: 19px;">
                    <i class="fas fa-right-from-bracket me-3 fs-5"></i>
                    <span>Logout</span>
                </a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-grow-1" style="overflow-y: auto; height: 100vh;">
            <!-- Mobile Header -->
            <div class="d-lg-none bg-white shadow-sm p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <button class="btn " type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMobile">
                        <i class="fas fa-bars" style="color: #003F91;"></i>
                    </button>
                    <div class="text-center">
                        <h5 class="mb-0 text-dark fw-semibold">Admin Panel</h5>
                        <small class="text-muted">SMA Negeri 6 Jakarta</small>
                    </div>
                    <div style="width: 40px;"></div>
                </div>
            </div>

            <!-- Page Content -->
            <div class="p-3 p-lg-4">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="{{ asset('asset/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
