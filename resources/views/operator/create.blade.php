@extends('layout.layout')

@section('content')
<div style="margin-top: 200px">

    <h1 class="display-4 mb-4 animated slideInDown text-center">Create product</h1>
    <div id="success-alert" class="alert alert-success" style="display: none;">
        Product created successfully!
    </div>
<div class=" rounded h-100 p-4 mb-5" style="background-color: #1E1916; width: 800px; height: 800px; margin: auto">
    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" name="title" placeholder="">
        <label for="floatingInput">Title</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingtext"
            placeholder="" name="description">
        <label >Description</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingtext"
            placeholder="text" name='price'>
        <label >Price</label>
    </div>
    <div class="form-floating mb-3">
        <input type="number" class="form-control" id="floatingtext"
            placeholder="text" name='available_product'>
        <label >Available products</label>
    </div>
    <div class="form-floating mb-3">
        
        <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="category_id">
            <option selected disabled>Categorie</option>
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="region_id">
            <option selected disabled>Region</option>
            @foreach($regions as $region)
                <option value="{{$region->id}}">{{$region->name}}</option>
            @endforeach
        </select>
        
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Image</label>
        <input class="form-control bg-dark" type="file" id="formFile" name="image">
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="0" name='is_Auto'>
        <label class="form-check-label" for="is_Auto">
            Manual
        </label>
    </div>
    
    <button type="submit" class="btn btn-primary mt-3">Add</button>
</form>
</div>
<div>
@endsection