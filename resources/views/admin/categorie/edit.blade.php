@extends('layout.layout3')
@section('content')

<div style="background:linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url({{asset('storage/images/produits-locals.jpg')}})">
    <div class="row">
        <div class="col-md-3">
            @include('include.sidebar')
        </div>
        <div class="col-md-9">
            <div class="container-fluid page-header py-3 " >
                <div class="container text-center pt-5 pb-3">
                    <h1 class="display-4 text-primary animated slideInDown mb-3">Edit Categorie</h1>
                    
                </div>
            </div>
            <div class="container-fluid px-4" style="width: 800px;">
                <form action="{{ route('categorie.update', $category->id) }}" enctype="multipart/form-data" method="post" class="row">
                    @csrf
                    @method('PUT')

                    <div class="form-floating mb-3 ">
                        <input type="text" class="form-control" id="name_cat" name="name_cat" value="{{ $category->name }}">
                        <label for="name_cat">Name of category</label>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
