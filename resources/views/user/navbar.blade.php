<nav class="navbar navbar-expand-lg">
    
    <div class="container">

        <!-- LOGO -->
        <a class="navbar-brand" href="{{ url('/') }}">
            <h2>Daily <em>Threads</em></h2>
        </a>

        <!-- MOBILE BUTTON -->
        <button class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarResponsive">

            <span class="navbar-toggler-icon"></span>

        </button>

        <!-- NAVBAR -->
        <div class="collapse navbar-collapse"
             id="navbarResponsive">

            <ul class="navbar-nav ml-auto">

                <!-- HOME -->
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                    <a class="nav-link"
                       href="{{ url('/') }}">
                        Home
                    </a>
                </li>

                <!-- PRODUCTS -->
                <li class="nav-item {{ Request::is('products') ? 'active' : '' }}">
                    <a class="nav-link"
                       href="{{ url('/products') }}">
                        Products
                    </a>
                </li>

                <!-- ABOUT -->
                <li class="nav-item {{ Request::is('aboutus') ? 'active' : '' }}">
                    <a class="nav-link"
                       href="{{ url('/aboutus') }}">
                        About Us
                    </a>
                </li>

                <!-- ACCOUNT -->
                <li class="nav-item {{ Request::is('account') ? 'active' : '' }}">
                    <a class="nav-link"
                       href="{{ url('/account') }}">
                        Account
                    </a>
                </li>

                @if (Route::has('login'))

                    @auth

                    <!-- CART -->
                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{ url('showcart') }}">

                            <i class="fas fa-shopping-cart"></i>

                            Cart

                            <span class="badge badge-light">
                                {{ $count ?? 0 }}
                            </span>

                        </a>
                    </li>

                    <!-- USER DROPDOWN -->
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle"
                           href="#"
                           data-toggle="dropdown">

                            {{ Auth::user()->name }}

                        </a>

                        <div class="dropdown-menu dropdown-menu-right">

                            <form method="POST"
                                  action="{{ route('logout') }}">

                                @csrf

                                <button type="submit"
                                        class="dropdown-item text-danger">

                                    Logout

                                </button>

                            </form>

                        </div>

                    </li>

                    @else

                    <!-- LOGIN -->
                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{ route('login') }}">
                            Log In
                        </a>
                    </li>

                    <!-- REGISTER -->
                    @if (Route::has('register'))

                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{ route('register') }}">
                            Register
                        </a>
                    </li>

                    @endif

                    @endauth

                @endif

            </ul>

        </div>

    </div>

</nav>


<!-- SUCCESS MESSAGE -->
@if(session()->has('message'))

<div class="alert alert-success alert-dismissible fade show text-center mb-0">

    {{ session('message') }}

    <button type="button"
            class="close"
            data-dismiss="alert">

        <span>&times;</span>

    </button>

</div>

@endif
