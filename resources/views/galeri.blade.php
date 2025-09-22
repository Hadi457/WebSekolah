@extends('template')
@section('content')
    <div class="container mt-5">
        <h1 class="fw-bold">Galeri</h1>
        <hr>
        <div class="row">
            <div class="col d-flex flex-column justify-content-center">
                <img src="{{asset('asset/image/1.jpg')}}" width="350" height="350" style="object-fit: contain" alt="">
                <h3 style="margin-top: -50px;">Lorem</h3>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="col d-flex flex-column justify-content-center">
                <img src="{{asset('asset/image/2.jpg')}}" width="350" height="350" style="object-fit: contain" alt="">
                <h3 style="margin-top: -50px;">Lorem</h3>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="col d-flex flex-column justify-content-center">
                <img src="{{asset('asset/image/3.jpg')}}" width="350" height="350" style="object-fit: contain" alt="">
                <h3 style="margin-top: -50px;">Lorem</h3>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="col d-flex flex-column justify-content-center">
                <img src="{{asset('asset/image/4.jpg')}}" width="350" height="350" style="object-fit: contain" alt="">
                <h3 style="margin-top: -50px;">Lorem</h3>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="col d-flex flex-column justify-content-center">
                <img src="{{asset('asset/image/1.jpg')}}" width="350" height="350" style="object-fit: contain" alt="">
                <h3 style="margin-top: -50px;">Lorem</h3>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="col d-flex flex-column justify-content-center">
                <img src="{{asset('asset/image/1.jpg')}}" width="350" height="350" style="object-fit: contain" alt="">
                <h3 style="margin-top: -50px;">Lorem</h3>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
    </div>
@endsection