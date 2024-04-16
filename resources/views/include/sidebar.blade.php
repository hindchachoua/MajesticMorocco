<!-- Sidebar Start -->
<div >
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Admin</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            
            
        </div>
        <div class="navbar-nav w-100">
            <a href="{{route('dashboard')}}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="{{ route('home')}}" class="nav-link">Home</a>
                {{-- <div class="dropdown-menu bg-transparent border-0">
                    <a href="button.html" class="dropdown-item">Buttons</a>
                    <a href="typography.html" class="dropdown-item">Typography</a>
                    <a href="element.html" class="dropdown-item">Other Elements</a>
                </div> --}}
            </div>
            <a href="{{route('categories')}}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Manage Categories</a>
            <a href="{{route('region')}}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Manage Regions</a>
            <a href="{{route('cancel')}}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Manage Orders</a>
            <a href="{{route('products.validation')}}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Validation</a>
            <div class="nav-item dropdown">
                {{-- <a href="#" class="nav-link" data-bs-toggle="dropdown"></a> --}}
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-chart-bar me-2"></i>Access

                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                      <li><a class="dropdown-item" href="{{route('access.user')}}">Users</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="{{route('access.operator')}}">Operators</a></li>
                    </ul>
                  </div>
                  
                {{-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item">Blank Page</a>
                        </div>
                    </div> --}}
            </div>
        </div>
    </nav>
</div>
<!-- Sidebar End -->