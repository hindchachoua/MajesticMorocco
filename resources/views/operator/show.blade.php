@extends('layout.layout')
@section('title', 'Welcome')
    
@section('content')
    <div class="container-fluid page-header py-3 wow fadeIn" data-wow-delay="0.1s" style="background:linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url({{asset('storage/images/produits-locals.jpg')}})">
        <div class="container text-center pt-5 pb-3">
            <h1 class="display-4 text-white animated slideInDown mb-3">Edit Region</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                
            </nav>
        </div>
    </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class=" text-center rounded overflow-hidden">
                        <a href="{{ route('product.show', $product->id)}}"><img class="img-fluid" src="{{asset('storage/images/produits-locals.jpg')}}" alt=""></a>

                        <div class="team-text">
                            <div class="team-title">
                                <h5>{{$product->title}}</h5>
                                <span>{{$product->price}}DH</span>
                                <p>{{$product->description}}</p>
                                <h6>category:{{$product->category->name}}</h6>
                                <h6>region:{{$product->region->name}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
  
@endSection