<!-- Sidebar Start -->
<div class="sidebar " style="margin-left: -15px">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Admin</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            
            
        </div>
        <div class="navbar-nav w-100">
            <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="{{ route('home')}}" class="nav-link">Home</a>
                {{-- <div class="dropdown-menu bg-transparent border-0">
                    <a href="button.html" class="dropdown-item">Buttons</a>
                    <a href="typography.html" class="dropdown-item">Typography</a>
                    <a href="element.html" class="dropdown-item">Other Elements</a>
                </div> --}}
            </div>
            <a href="{{route('categories')}}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Manage Categories</a>
            <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Manage Regions</a>
            <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Manage Orders</a>
            <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Validation</a>
            <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Access</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link" data-bs-toggle="dropdown"></a>
                
            </div>
        </div>
    </nav>
</div>
<!-- Sidebar End -->