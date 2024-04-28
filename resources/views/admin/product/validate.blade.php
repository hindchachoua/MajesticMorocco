@extends('layout.layout3')
@section('content')

<div style="background:linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url({{asset('storage/images/produits-locals.jpg')}})">
    <div class="row" >
    <!-- Sidebar -->
    <div class="col-md-3">
    @include('include.sidebar')
    
    </div>
    <div class="col-md-9">
        
        <div class="container-fluid px-4">
            
            <div class="container-fluid px-4">
                <div class= "text-center rounded p-4 wow fadeInUp">
                    <div class="d-flex align-items-center justify-content-between mb-4 mt-4">
                        <h2 class="mb-0 text-primary display-6">All Products</h2>
                    </div>
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
                        @if ($products->isEmpty())
                        <div>
                            <div class="alert alert-warning" role="alert">
                                <h4 class="alert-heading">Info!</h4>
                                <p>There are no orders (not valid) yet.</p>
                                <hr>
                            </div>
                        </div>
                        
                        @else
                            @foreach ($products as $product)
                                <div class="col wow fadeInUp shadow-sm border rounded m-2 p-2 text-center h-100 bg-light">
                                    <div class="card"> <!-- Removed 'h-100' class to make cards smaller -->
                                        <img src="{{ asset('images/' . $product->image) }}" class="card-img-top rounded shadow " style="object-fit: cover; height: 150px;" alt="Product Image"> <!-- Decreased height of the image -->
                                        
                                        <div class="card-body">
                                            <small>Price: {{ $product->price }} DH</small>
                                            <h5 class="card-title text-primary">{{ $product->title }}</h5>
                                            <p class="card-text">{{ $product->description }}</p>
                                            
                                            @if ($product->is_Valid == 0)
                                            <form action="{{ route('validation', $product->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="btn btn-success">
                                                    Valid
                                                </button>
                                            </form>
                                            @else
                                            <p class="alert alert-success" style="font-family: 'Times New Roman', Times, serif">Valid</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            
</div>
</div>
</div>
</div>
@endsection