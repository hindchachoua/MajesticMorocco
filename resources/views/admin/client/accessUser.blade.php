@extends('layout.layout3')
@section('content')

<div class="container-fluid">
    <div class="row">
    <!-- Sidebar -->
    <div class="col-md-3">
    @include('include.sidebar')
    
    </div>
    <div class="col-md-9">
        <div class="container-fluid page-header py-3 wow fadeIn" data-wow-delay="0.1s" style="background:linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url({{asset('storage/images/produits-locals.jpg')}})">
            <div class="container text-center pt-5 pb-3">
                <h1 class="display-4 text-white animated slideInDown mb-3">Access Users</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    
                </nav>
            </div>
        </div>
        <div class="container-fluid px-4">
            
<div class="container-fluid px-4" style="width: 800px; height: 300px;margin-top: 15px">
    <div class="bg-white text-center rounded p-4 wow fadeInUp">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">All Users</h6>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-5">
                <thead>
                    <tr class="text-white">
                        {{-- <th scope="col"></th> --}}
                        <th scope="col" style="color: #573100">Name</th>
                        <th scope="col" style="color: #573100">Email</th>
                        <th scope="col" style="color: #573100">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr class="text-white">
                        {{-- <th scope="col"></th> --}}
                        <th scope="col" style="color: #573100">{{ $user->name }}</th>
                        <th scope="col" style="color: #573100">{{ $user->email }}</th>
                        <th scope="col">
                            <form action="{{ route('blockUser', $user->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-{{ $user->is_blocked ? 'success' : 'danger' }}">
                                    {{ $user->is_blocked ? 'Unblock' : 'Block' }}
                                </button>
                            </form>
                        </th>   
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