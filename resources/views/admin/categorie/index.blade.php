@extends('layout.layout3')
@section('content')

<div style="background:linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url({{asset('storage/images/produits-locals.jpg')}})">
    <div class="row">
        <div class="col-md-3">
            @include('include.sidebar')
        </div>
        <div class="col-md-9">
            <div class="container-fluid page-header py-3 " data-wow-delay="0.1s" >
                <div class="container text-center pt-5 pb-3">
                    <h1 class="display-4 text-white animated slideInDown mb-3">Manage Category <i class="fas fa-folder text-primary"></i></h1>
                    <nav aria-label="breadcrumb animated slideInDown">
                    </nav>
                </div>
            </div>
            <div class="container-fluid px-4">
                <a href="{{ route('categorie.add')}}" class="btn btn-primary  my-3">Add Category</a>
                <div class="container-fluid px-4">
                    <div class="bg-white text-center rounded p-4 ">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h3 class="mb-0">All Categories</h3>
                        </div>
                        <div class="table-responsive">
                            <table class="table text-start align-middle table-bordered table-hover mb-5">
                                <thead>
                                    <tr class="text-white bg-primary">
                                        <th scope="col">Name</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $categorie)
                                    <tr>
                                        <td>{{ $categorie->name }}</td>
                                        <td>
                                            <a class="btn btn-sm btn-success me-2" href="{{ route('categorie.edit', $categorie->id) }}">Edit</a>
                                            <form action="{{ route('categorie.destroy', $categorie->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection