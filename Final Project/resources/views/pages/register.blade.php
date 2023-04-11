@include('includes.head')
@include('includes.nav-bar')

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    
<section id="signupSection">
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="col-sm-12 col-md-9 col-lg-5 text-white border border-4 border-secondary rounded p-5 ">
            <h3 class="text-center mb-4 fw-bold">Sign Up</h3>
            <form action="{{ route('register.post') }}" method="POST" >
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label ">Full Name</label>
                    <input name="name" type="text" class="form-control opacity-50" id="name" aria-describedby="fullName" placeholder="Full Name" required >
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="email_address" class="form-label ">Email address</label>
                    <input name="email" type="email" class="form-control opacity-50" id="email_address" aria-describedby="emailHelp" placeholder="email@mail.com" required >
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control opacity-50" id="password">
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                
                
                <button type="submit" class="btn-prim col-10 col-sm-2 text-white w-100 p-1 mb-5">Sign Up</button>
            </form>

        </div>
    </div>
</section>
@include('includes.script')
