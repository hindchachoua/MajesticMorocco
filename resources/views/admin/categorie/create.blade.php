@extends('layout.layout3')
@section('content')

<div style="background:linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url({{asset('storage/images/produits-locals.jpg')}})">
    <div class="row">
        <div class="col-md-3">
        @include('include.sidebar')
        </div>
    <div class="col-md-9">
        <div class="container-fluid page-header py-3 " data-wow-delay="0.1s">
            <div class="container text-center pt-5 pb-3">
                <h1 class="display-4 text-white animated slideInDown mb-3">Add Categorie</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    
                </nav>
            </div>
        </div>
        <div class="container-fluid px-4"  style="width: 800px;">
            <form action="{{ route('categorieadd') }}" method="POST">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="namz_cat" name="name_cat" placeholder="">
                    <label for="floatingInput">Name of categorie</label>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form> 
        </div>
    </div>
    </div>
</div>
@endsection