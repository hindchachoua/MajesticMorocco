@extends('layout.layout3')
@section('content')
<div>
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
            

            <section class="pricing-section section-padding section-bg container-xxl bg-light my-6 py-6 pb-0" id="section_5" style="margin-top: 100px">
                <div class="container">
                    <div >
                        <div class="col-lg-8 col-12 mx-auto">
                            <h2 class="text-center mb-5" style="font-size: 50px; margin-top: -50px">The Order</h2>
                        </div>
            
                        <div>
                            <div class="d-flex">
                                <img src="{{asset('storage/images/order.jpg')}}" alt="" style="width: 30%; height: 30%;margin-bottom: 10%">
                                <div class="pricing-thumb" style="margin-left: 10%">
                                    <h3 style="font-size: 28px; margin-top: -20px"></h3>
            
                                    <p><span style="font-weight: bold">Product's title: </span> <span>{{$order->products[0]->title}}</span> </p>
                                    <p><span style="font-weight: bold">Product's description: </span>{{$order->products[0]->description}}</p>
                                    <p><span style="font-weight: bold">Product's price: </span>{{$order->products[0]->price}}</p>
                                    <p><span style="font-weight: bold">Product's quantity: </span>{{$order->num_products}}</p>
                                    <p><span style="font-weight: bold">Product's region: </span>{{$order->products[0]->region->name}}</p>
                                    <p><span style="font-weight: bold">Product's category: </span>{{$order->products[0]->category->name}}</p>
                                    <p><span style="font-weight: bold">Order's created at: </span>{{$order->created_at}}</p>
            
                                    <form action="{{ route('cancelOrderAdmin', $order->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger">Annuler</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            

</div>
</div>
</div>
</div>


@endsection