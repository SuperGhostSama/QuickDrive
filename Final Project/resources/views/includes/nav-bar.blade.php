<!-- Navbar -->
<nav class="navbar navbar-expand-lg " data-bs-theme="dark" style="background-color: #000000">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="{{url ('/')}}">QUICKDRIVE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-4 text-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url ('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url ('/#aboutUs')}}">Abouts Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url ('/#contactUs')}}">Contact Us</a>
                </li>
            </ul>
            @auth
                @role('user')
                <div class="d-flex justify-content-center ">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{auth()->user()->name}}
                        </button>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('profile') }}">Profile</a></li>
                        <li><a class="dropdown-item" href="{{ url('logout') }}">Logout</a></li>
                        </ul>
                    </div>
                </div>
                @else
                <div class="d-flex justify-content-center ">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{auth()->user()->name}}
                        </button>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('dashboard') }}">Dashboard</a></li>
                        <li><a class="dropdown-item" href="{{ url('profile') }}">Profile</a></li>
                        <li><a class="dropdown-item" href="{{ url('logout') }}">Logout</a></li>
                        </ul>
                    </div>
                </div>
                @endrole
            @else
            <div class="d-flex justify-content-center">
                <a class="btn btn-secondary m-1" href="{{ url('login') }}">Login</a>
                <a class="btn btn-secondary m-1" href="{{ url('register') }}">Signup</a>
            </div>
            @endauth
        </div>
    </div>
</nav>