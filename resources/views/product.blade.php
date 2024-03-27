@extends('layout.layout')
@section('title', 'Product Details')
    
@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header py-6 wow fadeIn" data-wow-delay="0.1s" style="background:linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url({{asset('storage/images/souk.webp')}})">
    <div class="container text-center pt-5 pb-3">
        <h1 class="display-4 text-white animated slideInDown mb-3">Products</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Products</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<div class="container-xxl bg-light my-6 py-6 pt-0">
    <div class="container">
        <div class="bg-primary text-light rounded-bottom p-5 my-6 mt-0 wow fadeInUp" data-wow-delay="0.1s">
           
           
        </div>
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="text-primary text-uppercase mb-2">// Our Products</p>
            <h1 class="display-6 mb-4">Explore The Products</h1>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('storage/images/ceramic.jpg')}}" class="d-block mx-auto" style="max-width: 500px; max-height: 300px;" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('storage/images/Moroccan.jpg')}}" class="d-block mx-auto" style="max-width: 500px; max-height: 300px;" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('storage/images/decoration.jpg')}}" class="d-block mx-auto" style="max-width: 500px; max-height: 300px;" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('storage/images/decoration.jpg')}}" class="d-block mx-auto" style="max-width: 500px; max-height: 300px;" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('storage/images/decoration.jpg')}}" class="d-block mx-auto" style="max-width: 500px; max-height: 300px;" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
<!-- Product End -->


@endsection