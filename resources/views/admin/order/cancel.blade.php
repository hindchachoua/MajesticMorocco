@extends('layout.layout3')
@section('content')

<div  style="background:linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url({{asset('storage/images/produits-locals.jpg')}})">
    <div class="row">
        <div class="col-md-3">
        @include('include.sidebar')
        
        </div>
        <div class="col-md-9">
            <div class="container-fluid ">
                <div class="container-xxl my-6 ">
                    <div class="container">
                        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                            <h1 class="display-6 mb-4 text-primary">Cancel Orders</h1>
                        </div>
                        @if ($orders->isEmpty())
                                <div>
                                    <div class="alert alert-warning" role="alert">
                                        <h4 class="alert-heading">Info!</h4>
                                        <p>There are no orders yet.</p>
                                        <hr>
                                    </div>
                                </div>
                        @else
                            <div class="container" >
                                <div class="text-center mx-auto mb-5 wow fadeInUp" >
                                    <p class="text-primary text-uppercase mb-2">// Client's Order</p>
                                    <h1 class="display-6 mb-4"></h1>
                                </div>
                                @foreach ($orders as $order)
                                    <div class="testimonial-item bg-light rounded shadow-sm mb-3 p-3">
                                        <div class="d-flex align-items-center">
                                            <img class="flex-shrink-0 rounded-circle border p-1 me-3" src="{{ asset('storage/images/order.jpg') }}" alt="Order Image" style="width: 70px; height: 70px;">
                                            <div>
                                                <h5 class="mb-1"><a href="{{ route('showOrder', ['id' => $order->id]) }}" class="text-decoration-none text-dark"> <span class="text-primary">Who ordered:</span>{{ $order->client->name }}</a></h5>
                                                <p class="mb-1"><strong>Product's Title:</strong>
                                @foreach($order->products as $product)
                                                    <li>
                                                        {{ $product->title }}
                                                    </li>
                                @endforeach
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                            @endforeach
                            
                            </div>
                            
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection