@include('includes.head')
@include('includes.nav-bar')
<section id="loginSection">
    <div class="d-flex justify-content-center align-items-center " style="height: 100vh;">
        <div class="col-sm-12 col-md-9 col-lg-5 text-white border border-4 border-secondary rounded p-5 ">
            <h3 class="text-center mb-4 fw-bold">Log In</h3>
            <form action="{{ route('login.post') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email_address" class="form-label ">Email address</label>
                    <input name="email" type="text" class="form-control opacity-50" id="email_address" aria-describedby="emailHelp" placeholder="email@mail.com" required >
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
                
                <a href="" class="mb-3">Forgot Password?</a>
                <button type="submit"class="btn-prim col-10 col-sm-2 text-white w-100 p-1 mb-5">Login</button>
            </form>

        </div>
    </div>
</section>
@include('includes.script')
