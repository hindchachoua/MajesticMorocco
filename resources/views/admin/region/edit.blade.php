@extends('layout.layout3')
@section('content')

<div>
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3">
            @include('include.sidebar')
        </div>

        <!-- Main content -->
        <div class="col-md-9" style="background:linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url({{asset('storage/images/produits-locals.jpg')}})">
            <!-- Header -->
            <div class="container-fluid page-header py-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="container text-center pt-5 pb-3">
                    <h1 class="display-4 text-white animated slideInDown mb-3">Edit Region</h1>
                    <nav aria-label="breadcrumb animated slideInDown">
                        <!-- Breadcrumb if needed -->
                    </nav>
                </div>
            </div>

            <!-- Form -->
            <div class="container-fluid px-4">
                <form action="{{ route('region.update', $region->id) }}" enctype="multipart/form-data" method="post" class="row g-3">
                    @csrf
                    @method('PUT')

                    <!-- Input field for region name -->
                    <div class="form-floating mb-3 col-12 col-md-6">
                        <input type="text" class="form-control" id="name_region" name="name_region" value="{{ $region->name }}">
                        <label for="name_region">Name of Region</label>
                    </div>

                    <!-- Submit button -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
