    
    <nav class="navbar bg-secondary navbar-dark p-4">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Admin</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            
            
        </div>
        <div class="navbar-nav w-100">
            <a href="{{route('dashboard')}}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="{{ route('home')}}" class="nav-link">Home</a>
            </div>
            <a href="{{route('categories')}}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Manage Categories</a>
            <a href="{{route('region')}}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Manage Regions</a>
            <a href="{{route('historyAdmin')}}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Manage Orders</a>
            <a href="{{route('products.validation')}}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Validation</a>
            <div class="nav-item dropdown">
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
            </div>
        </div>
    </nav>