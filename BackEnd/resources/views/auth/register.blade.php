<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickDrive</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="https://code.iconify.design/iconify-icon/1.0.5/iconify-icon.min.js"></script>
</head>
<body style="background-color: #0B0C10;">
    <header style="background-color: #12232E">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg " data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold" href="index.html">QUICKDRIVE</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-4 text-center">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#aboutUs">Abouts Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#contactUs">Contact Us</a>
                        </li>
                    </ul>
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-secondary m-1" href="{{ route('login') }}">Login</a>
                        <a class="btn btn-secondary m-1" href="{{ route('register') }}">Signup</a>
                    </div>
                </div>
            </div>
        </nav>

    </header>

    <section id="signupSection">
        <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-sm-12 col-md-9 col-lg-5 text-white border border-4 border-secondary rounded p-5 ">
                <h3 class="text-center mb-4 fw-bold">Sign Up</h3>
                <form method="POST" action="{{ route('register') }}">
                    @csrf 
                        <div class="mb-3">
                            <label for="name" value="{{ __('Name') }}" class="form-label ">Full Name</label>
                            <input type="text" class="form-control opacity-50" id="name" name="name" :value="old('name')" required autofocus autocomplete="name" >
                        </div>
                        <div class="mb-3">
                            <label for="email" value="{{ __('Email') }}"  class="form-label ">Email address</label>
                            <input type="email" class="form-control opacity-50" id="email" name="email" :value="old('email')" required autocomplete="username" >
                        </div>
                        <div class="mb-3">
                            <label for="password" value="{{ __('Password') }}">Password</label>
                            <input type="password" class="form-control opacity-50" id="password" name="password" required autocomplete="new-password">
                        </div>
                        <div class="mb-4">
                            <label for="password_confirmation" value="{{ __('Confirm Password') }}">Confirm Password</label>
                            <input type="password" class="form-control opacity-50" id="password_confirmation" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        
                        
                        <button type="submit" name="signup" class="btn-prim col-10 col-sm-2 text-white w-100 p-1 mb-3"> {{ __('Register') }}</button>

                        <div class="flex items-center justify-end ">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
                        </div>
                </form>

            </div>
        </div>
    </section>


</body>

<script src="https://use.fontawesome.com/releases/vVERSION/js/all.js" data-mutate-approach="sync"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="assets/js/scripts.js"></script>

</html>