@extends('layout.layout3')
@section('content')

<div class="container-fluid">
    <div class="row">
    <!-- Sidebar -->
    <div class="col-md-3">
    @include('include.sidebar')
    
    </div>
    <div class="col-md-9">
        <div class="container-fluid page-header py-3 wow fadeIn" data-wow-delay="0.1s" style="background:linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url({{asset('storage/images/produits-locals.jpg')}})">
            <div class="container text-center pt-5 pb-3">
                <h1 class="display-4 text-white animated slideInDown mb-3">Edit Region</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    
                </nav>
            </div>
        </div>
        <div class="container-fluid px-4"  style="width: 800px;">
            <form action="{{ route('region.update', $region->id)}}" enctype="multipart/form-data" method="post">
                @csrf
                @method('PUT')
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="namz_cat" name="name_region" value="{{$region->name}}" >
                    <label for="floatingInput">Name of Region</label>
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form> 
</div>
</div>
</div>
</div>
@endsection