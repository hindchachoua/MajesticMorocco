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
            

            <section class="pricing-section section-padding section-bg container-xxl bg-light my-6 py-6 pb-0" id="section_5" style="margin-top: 100px" >
                <div class="container" >
                    <div class="row">
            
                        <div class="col-lg-8 col-12 mx-auto">
                            <h2 class="text-center mb-5" style="font-size: 50px; margin-top: -50px">The Order</h2>
                        </div>
                        
                            
                        <div class="col-lg-6 col-12 mt-4 mt-lg-0" style="margin-left: 350px">
                            <div class="pricing-thumb">
                                <div class="d-flex">
                                    <div >
                                        <h3 style="font-size: 28px; margin-top: -20px" ></h3>
            
                                        <p><span style="font-weight: bold">Client Name:</span> </p>
                                    </div>
                                </div>
                                <form action="" method="POST">
                                  @csrf
                                  
                                  <input type="hidden" name="order_id" value="">
                                  <button type="submit" class="btn btn-danger" style=" color: white">Cancel</button>
                              </form>
                              
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