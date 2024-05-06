@extends('layout.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10 col-sm-12">
            <div style="margin-top: 15%; margin-bottom: 5%;">
                <h1 class="display-4 mb-4  text-center">Edit product</h1>
                <div id="success-alert" class="alert alert-success" style="display: none;">
                    Product edited successfully!
                </div>
                <div class="rounded h-100 p-4" style="background-color: #1E1916;">
                    <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="title" name="title" value="{{$product->title}}">
                            <label for="title">Title</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="description" value="{{$product->description}}" name="description">
                            <label>Description</label>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="price" placeholder="text" name='price' value="{{$product->price}}">
                                    <label>Price</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="available_products" placeholder="text" name='available_products' value="{{$product->available_products}}">
                                    <label>Available products</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="category_id" aria-label="Floating label select example" name="category_id">
                                <option selected disabled>{{$product->category->name}}</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            <select class="form-select mt-3" id="region_id" aria-label="Floating label select example" name="region_id">
                                <option selected disabled>{{$product->region->name}}</option>
                                @foreach($regions as $region)
                                <option value="{{$region->id}}">{{$region->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Image</label>
                            <input class="form-control bg-dark" type="file" id="image" name='image'>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection