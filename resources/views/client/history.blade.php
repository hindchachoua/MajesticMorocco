@extends('layout.layout')
@section('title', 'Product Details')
    
@section('content')
<!-- Page Header Start -->
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
<!-- Page Header End -->

<div class="container-xxl py-6">
    <div class="container">
        
        @if ($orders->isEmpty())
        <div class="text-center mt-5" >
            <div class="alert alert-info" role="alert">
                <h4 class="alert-heading">Info!</h4>
                <p>There are no orders yet.</p>
                <a href="{{ route('products')}}" class="btn btn-primary wow fadeInUp">Go to products</a>
                <hr>
            </div>
        </div>
     @else
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
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <ul class="list-group">
                        @foreach($orders as $order)
                        @foreach($order->products as $product)
                        <li class="list-group-item d-flex justify-content-between align-items-center"  style="font-size: 1.2rem;">
                            {{ $product->title }}
                          <span style="color: black" class="badge badge-pill">Number products: {{$order->num_products}}</span>
                          @if($order->status == 1)
                          <span style="color: black" class="badge badge-pill">en cours</span>
                            <form action="{{ route('cancelOrder', $order->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-outline-danger">Annuler</button>
  
                            </form>
                          @else
                          <span style="color: black" class="badge badge-pill">annulée</span>
                          @endif
                          <span style="color: black" class="badge badge-pill">{{ $order->created_at}}</span>

                        </li>
                        @endforeach

                        @endforeach
                       
                        </li>
                      </ul>
                    
                </div>
            </div>
            
        </div>
        @endif
    </div>
</div>

@endsection