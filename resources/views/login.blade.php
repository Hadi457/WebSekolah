<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('asset/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('asset/fontawesome/css/all.min.css')}}">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
        <title>Login</title>
        <style>
            body {
                font-family: 'Poppins', sans-serif;
            }
            *, body, html {
                margin: 0;
                padding: 0;
            }
        </style>
    </head>
    <body>
        <div class="container min-vh-100 d-flex justify-content-center align-items-center">
            <div class="row">
                <div class="col">
                    <div class="card shadow p-5 rounded-5" style="width: 600px;">
                        <div class="card-body">
                            <div class="col d-flex flex-column justify-content-center align-items-center mb-4">
                                <img src="{{asset('asset/image/sman6logo.png')}}" width="100" height="100" alt="">
                                <h3 class="text-center mb-4 mt-3 fw-semibold">SMA Negri 6 Jakarta </h3>
                            </div>
                            @if (session('pesan'))
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                    {{session('pesan')}}
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="row d-flex">
                                <div class="col d-flex justify-content-center align-items-center">
                                    <img src="{{asset('asset/image/undraw_login_weas.svg')}}" width="200" height="200" style="object-fit: contain" alt="">
                                </div>
                                <form class="col d-flex justify-content-center align-items-center flex-column" action="{{ route('authentication') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" required>
                                    </div>
                                    <button type="submit" class="btn w-100" style="background-color: #003F91; color: white;">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<script src="{{asset('asset/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
