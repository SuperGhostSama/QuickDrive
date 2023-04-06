@extends('layouts.default')
@section('banner')
    @include('includes.banner')
@stop

@section('content')
<section id="recommendedCars">
    <div class="d-flex justify-content-center">
        <h3 class="text-white">Recommended Cars</h3>
    </div>
    <div class="d-flex flex-wrap justify-content-center">
        <div class="card m-5" style="width: 20rem; background-color: #0B0C10;">
            <img src="{{ asset('img/buggati chiron.jpg') }}" class="card-img-top p-1" alt="...">
            <span class="badge text-bg-primary w-25 ms-3">New</span>
            <div class="card-body">
            <h5 class="card-title text-white">Bugatti chiron</h5>
            <p class="card-text fw-bold fs-4" style="color: #007CC7;">500$</p>
            </div>
            <div class="d-flex">

                <div class="card-body">
                    <p class="card-text fw-bold text-white"><i class="bi bi-calendar" style="color: #007CC7;"></i> 2020</p> 
                    <p class="card-text fw-bold text-white"><i class="bi bi-fuel-pump" style="color: #007CC7;"></i> Essence</p>
                </div>
                <div class="card-body">
                    <p class="card-text fw-bold text-white"><i class="bi bi-car-front-fill" style="color: #007CC7;"></i> Rear-wheel Drive</p> 
                    <p class="card-text fw-bold text-white"><i class="bi bi-person" style="color: #007CC7;"></i>5</p>
                </div>
            </div>
        </div>
        <div class="card m-5" style="width: 20rem; background-color: #0B0C10;">
            <img src="{{ asset('img/buggati chiron.jpg') }}" class="card-img-top p-1" alt="...">
            <span class="badge text-bg-primary w-25 ms-3">New</span>
            <div class="card-body">
            <h5 class="card-title text-white">Bugatti chiron</h5>
            <p class="card-text fw-bold fs-4" style="color: #007CC7;">500$</p>
            </div>
            <div class="d-flex">

                <div class="card-body">
                    <p class="card-text fw-bold text-white"><i class="bi bi-calendar" style="color: #007CC7;"></i> 2020</p> 
                    <p class="card-text fw-bold text-white"><i class="bi bi-fuel-pump" style="color: #007CC7;"></i> Essence</p>
                </div>
                <div class="card-body">
                    <p class="card-text fw-bold text-white"><i class="bi bi-car-front-fill" style="color: #007CC7;"></i> Rear-wheel Drive</p> 
                    <p class="card-text fw-bold text-white"><i class="bi bi-person" style="color: #007CC7;"></i>5</p>
                </div>
            </div>
        </div>
        <div class="card m-5" style="width: 20rem; background-color: #0B0C10;">
            <img src="{{ asset('img/buggati chiron.jpg') }}" class="card-img-top p-1" alt="...">
            <span class="badge text-bg-primary w-25 ms-3">New</span>
            <div class="card-body">
            <h5 class="card-title text-white">Bugatti chiron</h5>
            <p class="card-text fw-bold fs-4" style="color: #007CC7;">500$</p>
            </div>
            <div class="d-flex">

                <div class="card-body">
                    <p class="card-text fw-bold text-white"><i class="bi bi-calendar" style="color: #007CC7;"></i> 2020</p> 
                    <p class="card-text fw-bold text-white"><i class="bi bi-fuel-pump" style="color: #007CC7;"></i> Essence</p>
                </div>
                <div class="card-body">
                    <p class="card-text fw-bold text-white"><i class="bi bi-car-front-fill" style="color: #007CC7;"></i> Rear-wheel Drive</p> 
                    <p class="card-text fw-bold text-white"><i class="bi bi-person" style="color: #007CC7;"></i>5</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="aboutUs" class="d-flex text-white mb-5" style="background-color: #12232E;">
    <div class="container text-white" >
        <div class="row ">
            <div class="col-sm-12 col-lg-6 p-5">
                <h3 class="">About Us</h3>
                <p class="mt-4">QuickDrive is a cutting-edge car rental website that aims to revolutionize the way people rent cars. Our platform provides customers with a seamless and hassle-free experience, allowing them to easily book a car that suits their needs and budget. At QuickDrive, we take pride in our extensive selection of vehicles, from compact cars to luxury SUVs, all of which are well-maintained and ready for the road.</p>
                <div class="row">
                    <div class="col-6 text-center">
                        <h3>120</h3>
                        <hr class="m-0" >
                        <hr class="mt-2 w-50" >
                        <p>Vehicle In Stock</p>
                    </div>
                    <div class="col-6 text-center">
                        <h3>120</h3>
                        <hr class="m-0" >
                        <hr class="mt-2 w-50" >
                        <p>Vehicle Categories</p>
                    </div>
                    <div class="col-6 text-center">
                        <h3>120</h3>
                        <hr class="m-0" >
                        <hr class="mt-2 w-50" >
                        <p>Rented Vehicle</p>
                    </div>
                    <div class="col-6 text-center">
                        <h3>120</h3>
                        <hr class="m-0" >
                        <hr class="mt-2 w-50" >
                        <p>Rentable Vehicle</p>
                    </div>
                </div>

            </div>

            
            <img class="col-sm-12 col-lg-6 p-4" src="{{ asset('img/aboutUs.png') }}" alt="AboutUsImage" >
            
        </div>
    </div>
</section>

<section id="ourService">
    <div class="d-flex justify-content-center">
        <h3 class="text-white">Our Service</h3>
    </div>
    <div class="d-flex justify-content-center">
        <a href="{{url ('allcars')}}" class="card mt-1 mb-5 border border-info" style="width: 20rem; background-color: #0B0C10; text-decoration: none;">
            <div class="card-body">
                <h5 class="card-title text-white text-center"><i class="bi bi-car-front" style="font-size: 50px;"></i></h5>
                <h4 class="text-white text-center">Rent a car</h4>
            </div>
    
        </a>
    </div>
</section>

<section id="contactUs">
    <div class="container text-white" >
        <div class="row ">
                <img class="col-sm-12 col-lg-6 p-5" src="{{ asset('img/maps.png') }}" alt="maps">
            <div class="col-sm-12 col-lg-6 p-5">
                <h3>Contact Us</h3>
                <form action="{{ route('contacts.store') }}" method="POST" id="form">
                    @csrf
                    <div class="mb-3">
                      <label for="contactName" class="form-label">Name</label>
                      <input type="text" name="fullname" class="form-control" id="contactName" aria-describedby="emailHelp" placeholder="Full Name" required>
                    </div>
                    <div class="mb-3">
                      <label for="contactEmail" class="form-label">Email address</label>
                      <input type="email" name="email" class="form-control" id="contactEmail" aria-describedby="emailHelp" placeholder="email@mail.com" required>
                    </div>
                    
                    <div class="mb-3">
                      <label for="contactComment" class="form-label">Comment</label>
                      <textarea type="text" name="message" class="form-control" id="contactComment" placeholder="Leave a message here" required style="max-height: 269px; min-height: 269px;"></textarea>
                    </div>
                    
                    <button type="submit" name="send" class="btn-prim col-10 col-sm-2 text-white w-100 p-1">Send</button>

                </form>   

            </div>
          
            
        </div>
    </div>

</section>

<section id="partners">
    <div>
        <img src="{{ asset('img/partners.png') }}" alt="" width="100%">
    </div>
</section>

@stop