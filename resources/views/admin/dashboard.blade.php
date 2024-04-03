@extends('layout.layout3')
@section('content')

<div class="container-fluid">
<div class="row">
<!-- Sidebar -->
<div class="col-md-3">
@include('include.sidebar')

</div>
<div class="col-md-9">
    <div class="container-fluid pt-4 px-4">
<div style="margin-top: 50px;">
<!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-line fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2 text-white">Categories:</p>
                    <h6 class="mb-0">{{ $categoriesCount }}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-bar fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2 text-white">Products</p>
                    <h6 class="mb-0">{{ $productsCount}}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-area fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2 text-white">Clients</p>
                    <h6 class="mb-0">{{$clients}}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-pie fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2 text-white">Operators</p>
                    <h6 class="mb-0">{{$operators}}</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sale & Revenue End -->
</div>
</div>
</div>
</div>
</div>
@endsection