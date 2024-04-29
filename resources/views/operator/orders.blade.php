@extends('layout.layout')
@section('title', 'Product Details')
    
@section('content')
<div class="container-fluid page-header py-6 wow fadeIn" data-wow-delay="0.1s" style="background:linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url({{asset('storage/images/souk.webp')}})">
    <div class="container text-center pt-5 pb-3">
        <h1 class="display-4 text-white animated slideInDown mb-3">History of your orders</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">History</li>
            </ol>
        </nav>
    </div>
</div>
<div class="container-xxl py-6">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row img-twice position-relative h-100">
                    <div class="col-6">
                        <img class="img-fluid rounded" src="{{asset('storage/images/ceramic.jpg')}}" alt="">
                    </div>
                    <div class="col-6 align-self-end">
                        <img class="img-fluid rounded" src="{{asset('storage/images/Moroccan.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s" >
                <div >
                    <ul class="list-group">
                        @foreach($orders as $order)
                        <li class="list-group-item d-flex justify-content-between align-items-center" style="font-size: 1.2rem;">
                            <span style="color: black" class="badge badge-pill"><span style=" color:rgb(141, 52, 0)">Total Price: </span>{{ $order->total_price }}</span>
                            <ul class="list-group list-group-flush">
                                @foreach ($order->products as $product)
                                <li class="list-group-item">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="mb-0 " style=" color:rgb(187, 68, 0)">{{ $product->title }}</h5>
                                            <p class="mb-0">Available Products: {{ $product->available_products}}</p>
                                            <p class="mb-0">Client: {{ $order->client->name }}</p>
                                        </div>
                                        <span class="badge badge-primary badge-pill">{{ $product->pivot->quantity }}</span>
                                    </div>
                                    
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection