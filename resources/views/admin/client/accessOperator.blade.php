@extends('layout.layout3')
@section('content')

<div  style="background:linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url({{asset('storage/images/produits-locals.jpg')}})">
    <div class="row">
        <div class="col-md-3">
        @include('include.sidebar')
        </div>
        <div class="col-md-9">
            <div class="container-fluid page-header py-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="container text-center pt-5 pb-3">
                    <h1 class="display-4 text-white animated slideInDown mb-3">Access Operators <i class="fas fa-cogs text-primary"></i></h1>
                    <nav aria-label="breadcrumb animated slideInDown">
                        
                    </nav>
                </div>
            </div>
            <div class="container-fluid px-4">
                <div class="container-fluid px-4" style="margin-top: 15px">
                    <div class="bg-white text-center rounded p-4 wow fadeInUp">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h6 class="mb-0 display-6 text-primary">All Operators</h6>
                        </div>
                        <div class="table-responsive">
                            <table class="table text-start align-middle table-bordered table-hover mb-5">
                                <thead>
                                    <tr class="text-white">
                                        <th scope="col" style="color: #573100">Name</th>
                                        <th scope="col" style="color: #573100">Email</th>
                                        <th scope="col" style="color: #573100">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($operators as $operator)
                                        <tr>
                                            <td>{{ $operator->name }}</td>
                                            <td>{{ $operator->email }}</td>
                                            <td>
                                                <form action="{{ route('blockUser', $operator->id) }}" method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit" class="btn btn-{{ $operator->is_blocked ? 'success' : 'danger' }}">
                                                        {{ $operator->is_blocked ? 'Unblock' : 'Block' }}
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