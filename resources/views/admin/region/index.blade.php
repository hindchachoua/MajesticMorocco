@extends('layout.layout3')
@section('content')

{{-- <div> --}}
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3">
        @include('include.sidebar')
        
        </div>
        <div class="col-md-9">
            {{-- <div class="container-fluid page-header py-3 wow fadeIn" data-wow-delay="0.1s" style="background:linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url({{asset('storage/images/produits-locals.jpg')}})">
                <div class="container text-center pt-5 pb-3">
                    <h1 class="display-4 text-white animated slideInDown mb-3">Manage Regions</h1>
                    <nav aria-label="breadcrumb animated slideInDown">
                        
                    </nav>
                </div>
            </div> --}}
            <div class="container-fluid px-4">
                @if(count($regions) == 12)
                <div></div>
                @else
                <a href="{{ route('addregion')}}" class="btn btn-primary wow fadeInUp mt-3">Add Region</a>
                @endif
                <div class="container-fluid px-4">
                    <div class="bg-white text-center rounded p-4 wow fadeInUp">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h3 class="mb-0">All Regions</h3>
                        </div>
                        <!-- Add table-responsive class here -->
                        <div class="table-responsive">
                            <table class="table text-start align-middle table-bordered table-hover mb-5">
                                <thead>
                                    <tr class="text-white bg-primary">
                                        <th scope="col">Name</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($regions as $region)
                                        <tr>
                                            <td>{{ $region->name }}</td>
                                            <td>
                                                <a class="btn btn-sm btn-success me-2" href="{{ route('region.edit', $region->id) }}">Edit</a>
                                                <form action="{{ route('region.destroy', $region->id) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit"  class="btn btn-sm btn-danger">
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
{{-- </div> --}}
@endsection