@extends('layout.layout')

@section('content')
<div style="margin-top: 200px">

    <h1 class="display-4 mb-4 animated slideInDown text-center">Edit product</h1>
    <div id="success-alert" class="alert alert-success" style="display: none;">
        Product edited successfully!
    </div>
<div class=" rounded h-100 p-4" style="background-color: #1E1916; width: 800px; height: 800px; margin: auto">
    <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="title" name="title" value="{{$product->title}}">
        <label for="title">Title</label>

    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="description"
            value="{{$product->description}}"  name="description">
        <label >Description</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="price"
            placeholder="text" name='price' value="{{$product->price}}">
        <label >Price</label>
    </div>
    <div class="form-floating mb-3">
        <input type="number" class="form-control" id="available_products"
            placeholder="text" name='available_products' value="{{$product->available_products}}">
        <label >Available products</label>
    </div>
    <div class="form-floating mb-3">
        <select class="form-select" id="category_id" aria-label="Floating label select example" name="category_id">
            <option selected disabled>{{$product->category->name}}</option>
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        <select class="form-select" id="region_id" aria-label="Floating label select example" name="region_id">
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
    <div class="form-check">
        @if($product->is_Auto==1)
            <input class="form-check-input" type="checkbox" value="0" name='is_Auto'>
            <label class="form-check-label" for="is_Auto">Auto</label>
        @else
        <input class="form-check-input" type="checkbox" value="1" name='is_Auto'>
            <label class="form-check-label" for="is_Auto">Manual</label>
        @endif
        {{-- <input class="form-check-input" type="checkbox" name="is_Auto" value="1" @if($product->is_Auto==1) checked @endif>
<label class="form-check-label" for="is_Auto">Auto</label> --}}
        
    </div>
    <button type="submit" class="btn btn-primary mt-3">Edit</button>
</form>
</div>
<div>
@endsection