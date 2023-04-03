@include('includes.head')
@include('includes.nav-bar')
<section id="loginSection">
    <div class="d-flex justify-content-center align-items-center " style="height: 100vh;">
        <div class="col-sm-12 col-md-9 col-lg-5 text-white border border-4 border-secondary rounded p-5 ">
            <h3 class="text-center mb-4 fw-bold">Log In</h3>
            <form>
                
                <div class="mb-3">
                <label for="contactEmail" class="form-label ">Email address</label>
                <input type="email" class="form-control opacity-50" id="contactEmail" aria-describedby="emailHelp" placeholder="email@mail.com" required >
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control opacity-50" id="exampleInputPassword1">
                </div>
                
                
                <button type="submit" name="login" class="btn-prim col-10 col-sm-2 text-white w-100 p-1 mb-5">Login</button>
            </form>

        </div>
    </div>
</section>
@include('includes.script')
