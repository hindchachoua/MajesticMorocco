@extends('layout.layout')

@section('content')
<div style="margin-top: 200px">

    <h1 class="display-4 mb-4 animated slideInDown text-center">Create product</h1>

<div class=" rounded h-100 p-4" style="background-color: #1E1916; width: 800px; height: 800px; margin: auto">
    <form action="" method="POST">
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
        <select class="form-select" id="floatingSelect"
            aria-label="Floating label select example">
            <option selected>Categorie</option>
            <option value="1">One</option>
        </select>
        <select class="form-select" id="floatingSelect"
            aria-label="Floating label select example">
            <option selected>Region</option>
            <option value="1">One</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Image</label>
        <input class="form-control bg-dark" type="file" id="formFile" name='image'>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="0" id="flexCheckDefault" name='manual'>
        <label class="form-check-label" for="flexCheckDefault">
            Manual
        </label>
    </div>
    
    <button type="submit" class="btn btn-primary mt-3">Add</button>
</form>
</div>
<div>
@endsection