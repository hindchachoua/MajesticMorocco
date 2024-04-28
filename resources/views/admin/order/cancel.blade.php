@extends('layout.layout3')
@section('content')

<div  style="background:linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url({{asset('storage/images/produits-locals.jpg')}})">
    <div class="row">
    <!-- Sidebar -->
    <div class="col-md-3">
    @include('include.sidebar')
    
    </div>
    <div class="col-md-9">
        {{-- <div class="container-fluid page-header py-3 wow fadeIn" data-wow-delay="0.1s" style="background:linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url({{asset('storage/images/produits-locals.jpg')}})">
            <div class="container text-center pt-5 pb-3">
                <h1 class="display-4 text-white animated slideInDown mb-3">Cancel Order</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    
                </nav>
            </div>
        </div> --}}
        <div class="container-fluid px-4">
            

    <!-- Testimonial Start -->
    <div class="container-xxl my-6 py-6 pb-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6 mb-4 text-primary">Cancel Orders</h1>
            </div>
        @if ($orders->isEmpty())
                <div>
                    <div class="alert alert-warning" role="alert">
                        <h4 class="alert-heading">Info!</h4>
                        <p>There are no orders (not valid) yet.</p>
                        <hr>
                    </div>
                </div>
            @else
            <div class="container" >
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <p class="text-primary text-uppercase mb-2">// Client's Order</p>
                    <h1 class="display-6 mb-4"></h1>
                </div>
            
                @if (count($orders) > 1)
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    @foreach ($orders as $order)
                    @foreach($order->products as $product)
                    <div class="testimonial-item bg-white rounded p-2">
                        <div class="d-flex align-items-center mb-2">
                            <img class="flex-shrink-0 rounded-circle border p-1" src="{{asset('storage/images/order.jpg')}}" alt="" style="width: 50px; height: 50px;">
                            <div class="ms-2">
                                <h5 class="mb-0"><a href="{{route('showOrder' , ['id' => $order->id])}}">{{$order->client->name}}</a></h5>
                                <span class="small">Product's title: {{ $product->title }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endforeach
                </div>
                @else
                @foreach ($orders as $order)
                @foreach($order->products as $product)
                <div class="testimonial-item bg-white rounded p-2">
                    <div class="d-flex align-items-center mb-2">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="{{asset('storage/images/order.jpg')}}" alt="" style="width: 50px; height: 50px;">
                        <div class="ms-2">
                            <h5 class="mb-0"><a href="{{route('showOrder' , ['id' => $order->id])}}">{{$order->client->name}}</a></h5>
                            <span class="small">Product's title: {{ $product->title }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
                @endforeach
                @endif
            
            </div>
            
        @endif
    </div>
    <!-- Testimonial End -->

</div>
</div>
</div>
</div>
@endsection