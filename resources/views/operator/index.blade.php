@extends('layout.layout')
@section('title', 'Welcome')
    
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-6 wow fadeIn" data-wow-delay="0.1s" style="background:linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url({{asset('storage/images/produits-locals.jpg')}})">
    <div class="container text-center pt-5 pb-3">
        <h1 class="display-4 text-white animated slideInDown mb-3">Manage Product</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="{{ route('home')}}">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Manage Product</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->
    <div style="margin-top: -120px">
         <!-- Team Start -->
    <div class="container-xxl py-6">
        
        <a href="{{ route('addproduct')}}" class="btn btn-primary wow fadeInUp">Add Product</a>
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="text-primary text-uppercase mb-2">// Your Products</p>
                <h1 class="display-6 mb-4">We offer you to manage your products</h1>
            </div>
            <div class="row g-4">
                @foreach($products as $product)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <a href="{{ route('product.show', ['id' => $product->id]) }}">
                            <img class="img-fluid" src="{{ asset('storage/images/produits-locals.jpg') }}" alt="">
                        </a>
                        

                        <div class="team-text">
                            <div class="team-title">
                                <h5>{{$product->title}}</h5>
                                <span>{{$product->price}}DH</span>
                            </div>
                            <div class="team-social">
                                <a class="btn btn-square btn-light rounded-circle" href="{{ route('product.edit', $product->id) }}"><i class="fas fa-edit"></i></a>
                                <form action="{{ route('product.destroy', $product->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-square btn-light rounded-circle" type="submit"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
                {{-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <img class="img-fluid" src="img/team-2.jpg" alt="">
                        <div class="team-text">
                            <div class="team-title">
                                <h5>Title</h5>
                                <span>Description</span>
                            </div>
                            <div class="team-social">
                                <a class="btn btn-square btn-light rounded-circle" href=""><i class="fas fa-edit"></i></a>
                                <a class="btn btn-square btn-light rounded-circle" href=""><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <img class="img-fluid" src="img/team-3.jpg" alt="">
                        <div class="team-text">
                            <div class="team-title">
                                <h5>Title</h5>
                                <span>Description</span>
                            </div>
                            <div class="team-social">
                                <a class="btn btn-square btn-light rounded-circle" href=""><i class="fas fa-edit"></i></a>
                                <a class="btn btn-square btn-light rounded-circle" href=""><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <img class="img-fluid" src="img/team-4.jpg" alt="">
                        <div class="team-text">
                            <div class="team-title">
                                <h5>Title</h5>
                                <span>Description</span>
                            </div>
                            <div class="team-social">
                                <a class="btn btn-square btn-light rounded-circle" href=""><i class="fas fa-edit"></i></a>
                                <a class="btn btn-square btn-light rounded-circle" href=""><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <img class="img-fluid" src="img/team-1.jpg" alt="">
                        <div class="team-text">
                            <div class="team-title">
                                <h5>Title</h5>
                                <span>Description</span>
                            </div>
                            <div class="team-social">
                                <a class="btn btn-square btn-light rounded-circle" href="{{ route('editproduct')}}"><i class="fas fa-edit"></i></a>
                                <a class="btn btn-square btn-light rounded-circle" href=""><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <img class="img-fluid" src="img/team-2.jpg" alt="">
                        <div class="team-text">
                            <div class="team-title">
                                <h5>Title</h5>
                                <span>Description</span>
                            </div>
                            <div class="team-social">
                                <a class="btn btn-square btn-light rounded-circle" href=""><i class="fas fa-edit"></i></a>
                                <a class="btn btn-square btn-light rounded-circle" href=""><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <img class="img-fluid" src="img/team-3.jpg" alt="">
                        <div class="team-text">
                            <div class="team-title">
                                <h5>Title</h5>
                                <span>Description</span>
                            </div>
                            <div class="team-social">
                                <a class="btn btn-square btn-light rounded-circle" href=""><i class="fas fa-edit"></i></a>
                                <a class="btn btn-square btn-light rounded-circle" href=""><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <img class="img-fluid" src="img/team-4.jpg" alt="">
                        <div class="team-text">
                            <div class="team-title">
                                <h5>Title</h5>
                                <span>Description</span>
                            </div>
                            <div class="team-social">
                                <a class="btn btn-square btn-light rounded-circle" href=""><i class="fas fa-edit"></i></a>
                                <a class="btn btn-square btn-light rounded-circle" href=""><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Team End -->
        
    </div>
@endSection