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
            <h1 class="display-6 mb-4">Explore Our Cultural Products</h1>
        </div>
        <div class="row g-4">
            @foreach ($products as $product)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                    <div class="text-center p-4">
                        <div class="d-inline-block border border-primary rounded-pill px-3 mb-3">{{$product->price}} DH</div>
                        <h3 class="mb-3">{{$product->title}}</h3>
                        <span>{{$product->description}}</span>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="{{ asset('images/' . $product->image)}}" alt="">
                        <div class="product-overlay">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle" href="{{ route('product.show', ['id' => $product->id]) }}"><i class="fa fa-eye text-primary"></i></a>
                        </div>
                        
                    </div>
                </div>
                @if ($product->available_products == 0)
                        <p class="alert alert-danger" style="font-family: 'Times New Roman', Times, serif">No available Products</p>
                                        
                        @else
    
                        <form action="{{ route('user.reserve', $product->id) }}" method="POST">
                          @csrf
                          <input type="number" name="num_products" id="num_product">
                          <input type="hidden" name="product_id" value="{{ $product->id }}">
                          <button type="submit" class="btn" style="background-color:#ee5007; color: white">Buy Product</button>
                      </form>
                      @endif
            </div>
            @endforeach
            {{-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                    <div class="text-center p-4">
                        <div class="d-inline-block border border-primary rounded-pill pt-1 px-3 mb-3">$11 - $99</div>
                        <h3 class="mb-3">Furniture</h3>
                        <span>Moroccan cultural furniture products are a reflection of the rich tapestry of Moroccan heritage and traditions. Crafted with meticulous attention to detail and infused with symbolic motifs, these pieces embody the essence of Moroccan culture and design. From intricately carved wooden tables to sumptuous leather poufs and vibrant kilim rugs, each piece tells a story steeped in history and craftsmanship.</span>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="{{asset('storage/images/furniture.png')}}" alt="">
                        <div class="product-overlay">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-eye text-primary"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                    <div class="text-center p-4">
                        <div class="d-inline-block border border-primary rounded-pill pt-1 px-3 mb-3">$11 - $99</div>
                        <h4 class="mb-3">Decoration</h4>
                        <span>Moroccan cultural decoration products encompass a diverse array of handcrafted items that reflect the rich heritage and artistic traditions of Morocco. From vibrant textiles to intricately designed ceramics, these products blend elements of Berber, Arab, and Andalusian influences, creating a unique and captivating aesthetic</span>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="{{asset('storage/images/decoration.jpg')}}" alt="">
                        <div class="product-overlay">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-eye text-primary"></i></a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<!-- Product End -->


@endsection