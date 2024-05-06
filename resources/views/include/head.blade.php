<nav class="navbar navbari bg-dark navbar-expand-lg navbar-dark py-3 py-lg-0 fixed" >
    <a href="" class="navbar-brand ms-4 ms-lg-0">
        <h1 class="text-primary m-0">{{ config('app.name') }}</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" >
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto p-4 p-lg-0">
            <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
            <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
            @auth
                @if (auth()->user()->role_id == 2)
                    <a href="{{ route('operator') }}" class="nav-item nav-link">Manage Product</a>
                    <a href="{{ route('ordersClient')}}" class="nav-item nav-link">Orders</a>
                @elseif(auth()->user()->role_id == 1)
                    <a href="{{ route('dashboard' )}}" class="nav-item nav-link">Dashboard</a>
                @else
                    <a href="{{ route('products') }}" class="nav-item nav-link">Products</a>
                    <a href="{{ route('history')}}" class="nav-item nav-link">History</a>
                    
                    <button style="width: 40%; height: 40%;margin-top: 6%" type="button"  class="btn btn-primary me-3 d-lg-block "  data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger"></span>
                      </button>
                @endif
            @endauth
        </div>
        <div class="dropdown d-lg-none">
            <button class="btn btn-primary dropdown-toggle" type="button" id="authDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                @auth
                    {{ auth()->user()->name }}
                @else
                    Menu
                @endauth
            </button>
            <ul class="dropdown-menu" aria-labelledby="authDropdown">
                @auth
                    <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                @else
                    <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                    <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                @endauth
            </ul>
        </div>
        
        <div class="d-none d-lg-flex">
            <span class="navbar-text me-3">
                @auth
                    {{ auth()->user()->name }}
                @endauth
            </span>
            @auth
                <li class="nav-item">
                    <button type="button" class="btn btn-primary me-3 d-lg-block">
                        <a style="color: white" href="{{ route('logout') }}">Logout</a>
                    </button>
                </li>
            @else
                <li class="nav-item">
                    <button type="button" class="btn btn-primary me-3 d-lg-block"><a style="color: white" href="{{ route('login') }}">Login</a></button>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
            @endauth
        </div>
    </div>
</nav>
