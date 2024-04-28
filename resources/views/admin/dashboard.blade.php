@extends('layout.layout3')
@section('content')

<div>
    <div class="row">
        <div class="col-md-3">
            @include('include.sidebar')
        </div>
        <div class="col-md-9">
            <div class="container-fluid pt-4 px-4">
                <div style="margin-top: 50px;">
                    
                    <div class="container-fluid pt-4 px-4">
                        <div class=" rounded h-100 p-4">
                            <h2 class="mb-4">Dashboard Admin</h2>
                        </div>
                        <div class="row g-4 pb-5">
                            <div class="col-sm-6 col-xl-3">
                                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                                    <i class="fas fa-folder fa-3x text-primary"></i>
                                    <div class="ms-3">
                                        <p class="mb-2 text-white">Categories:</p>
                                        <h6 class="mb-0">{{ $categoriesCount }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                                    <i class="fas fa-cube fa-3x text-primary"></i>
                                    <div class="ms-3">
                                        <p class="mb-2 text-white">Products</p>
                                        <h6 class="mb-0">{{ $productsCount}}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                                    <i class="fas fa-users fa-3x text-primary"></i>
                                    <div class="ms-3">
                                        <p class="mb-2 text-white">Clients</p>
                                        <h6 class="mb-0">{{$clients}}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                                    <i class="fas fa-cogs fa-3x text-primary"></i> 
                                    <div class="ms-3">
                                        <p class="mb-2 text-white">Operators</p>
                                        <h6 class="mb-0">{{$operators}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection