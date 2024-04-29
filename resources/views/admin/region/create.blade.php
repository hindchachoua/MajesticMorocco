@extends('layout.layout3')
@section('content')

<div>
    <div class="row">
        <div class="col-md-3">
        @include('include.sidebar')
        
        </div>
        <div class="col-md-9" style="background:linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url({{asset('storage/images/produits-locals.jpg')}})">
            <div class="container-fluid page-header py-3 wow fadeIn" data-wow-delay="0.1s" >
                <div class="container text-center pt-5 pb-3">
                    <h1 class="display-4 text-white animated slideInDown mb-3">Add Region</h1>
                    <nav aria-label="breadcrumb animated slideInDown">
                        
                    </nav>
                </div>
            </div>
            <div class="container-fluid px-4">
                <div class="card mt-4 bg-light">
                    <div class="card-body">
                        <form action="{{ route('regionadd') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name_region" class="form-label">Name of region</label>
                                <input type="text" class="form-control" id="name_region" name="name_region" placeholder="Enter name">
                            </div>
                            <button type="submit" class="btn btn-success">Add</button>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection