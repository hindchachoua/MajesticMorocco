@extends('layout.layout3')
@section('content')

<div class="container-fluid">
    <div class="row">
    <!-- Sidebar -->
    <div class="col-md-3">
    @include('include.sidebar')
    
    </div>
    <div class="col-md-9">
        
        <div class="container-fluid px-4">
            
<div class="container-fluid px-4" >
    <div class="bg-white text-center rounded p-4 wow fadeInUp">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">All Products (non valid)</h6>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3"> <!-- Adjust the number of columns and gutter spacing -->
            @foreach ($products as $product)
            <div class="col"> <!-- Adjust the column width -->
                <div class="card h-100"> <!-- Add 'h-100' class to make cards of equal height -->
                    <img src="{{ asset('images/' . $product->image)}}" class="card-img-top" style="object-fit: cover; height: 200px;" alt="Product Image
                    ">

                    <div class="card-body">
                        <small>Price: {{ $product->price }} DH</small>
                        <h5 class="card-title">{{ $product->title }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        
                        <form action="{{ route('validation', $product->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-success">
                                Valid
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        
    </div>
</div>
</div>
</div>
</div>
</div>
@endsection