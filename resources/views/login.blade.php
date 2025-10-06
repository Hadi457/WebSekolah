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
        <div class="container min-vh-100 d-flex justify-content-center align-items-center p-3">
            <div class="row w-100 justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6">
                    <div class="card shadow rounded-5">
                        <div class="card-body p-4 p-md-5">
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
                            <div class="row align-items-center">
                                <div class="col-12 col-md-6 text-center mb-4 mb-md-0">
                                    <img src="{{asset('asset/image/sman6logo.png')}}"
                                         class="img-fluid"
                                         style="max-width: 200px; height: auto;"
                                         alt="">
                                </div>
                                <div class="col-12 col-md-6">
                                    <form action="{{ route('authentication') }}" method="POST">
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
        </div>
    </body>
</html>
<script src="{{asset('asset/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
