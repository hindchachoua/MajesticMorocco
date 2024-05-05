@extends('layout.layout')
@section('title', 'Welcome')
    
@section('content')
    <div class="container-fluid page-header py-3 wow fadeIn" style="background:linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url({{ asset('images/' . $product->image)}})">
        <div class="container text-center pt-5 pb-3">
            <h1 class="display-4 text-white animated slideInDown mb-3">{{$product->title}}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                
            </nav>
        </div>
    </div>
    <div class="py-5" style="margin-left: 500px">
        <div class="col-md-6 wow fadeInUp bg-light shadow p-5" data-wow-delay="0.1s">
            <div class=" text-center rounded overflow-hidden">
                <img class="img-fluid" src="{{ asset('images/' . $product->image)}}" alt="">
                <div class="team-text">
                    <div class="team-title">
                        <h5>{{$product->title}}</h5>
                        <span>{{$product->price}}DH</span>
                        <p>{{$product->description}}</p>
                        <small>Available products:{{$product->available_products}}</small>
                        <h6>category:{{$product->category->name}}</h6>
                        <h6>region:{{$product->region->name}}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endSection