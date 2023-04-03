@extends('layouts.default')
@section('breadcrumbs')
<!-- BreadCrumbs -->
<div class="text-white mt-4 ms-5 mb-4">
    <h2>Bugatti Chiron</h2>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url ('/')}}" style="color: white; text-decoration: none">Home</a></li>
          <li class="breadcrumb-item"><a href="{{url ('allcars')}}" style="color: white; text-decoration: none">Car List</a></li>
          <li class="breadcrumb-item " aria-current="page">Car Detail</li>
        </ol>
      </nav>
</div>
@stop
@section('carousel')
    @include('includes.carousel')
@stop

@section('content')
<div class="row p-4 p-lg-5" id="informationContainer">  
    <div class="text-white col-lg-8">
      <div class="col-lg-11">      
        <h4>Description</h4>
        <p id="carDescription">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas diam nam eu nulla a. Vestibulum aliquet facilisi interdum nibh blandit. Leo amet ultricies cum cras sit sed curabitur ultrices faucibus. Ultrices pellentesque ultricies semper leo maecenas. Amet, et sagittis consectetur at euismod iaculis.
          Id non velit auctor praesent a amet risus facilisis. Lobortis nisl placerat orci, eu nisl ornare. Eu vitae pellentesque rhoncus eros vivamus est purus enim dui. Leo ac pharetra massa tristique. Libero aliquam pellentesque laoreet dui pulvinar facilisis. Id lectus mauris senectus sodales porta malesuada tincidunt et. Quam dui nulla venenatis suscipit nulla lectus volutpat, augue purus. Sed condimentum parturient maecenas viverra pulvinar leo augue nunc.</p>
      </div>
        <div class="col-lg-11">
          <h3>Contact Us</h3>
          <form>
              <div class="mb-3">
                <label for="contactName" class="form-label">Name</label>
                <input type="text" class="form-control" id="contactName" aria-describedby="emailHelp" placeholder="Full Name" required>
              </div>
              <div class="mb-3">
                <label for="contactEmail" class="form-label">Email address</label>
                <input type="email" class="form-control" id="contactEmail" aria-describedby="emailHelp" placeholder="email@mail.com" required>
              </div>
              <div class="mb-3">
                <label for="contactPhone" class="form-label">Phone</label>
                <input type="tel" class="form-control" id="contactPhone"pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" placeholder="000-000-000" required>
              </div>
              <div class="mb-3">
                <label for="contactComment" class="form-label">Comment</label>
                <textarea type="text" class="form-control" id="contactComment" placeholder="Leave a message here" required style="max-height: 180px; min-height: 180px;"></textarea>
              </div>
              
              <button type="submit" name="send" class="btn-prim col-10 col-sm-2 text-white w-100 p-1 mb-5">Send</button>
            </form>

        </div>
    </div>
    
    <div class="col-lg-4 ">
      <card href="#" class="card mt-1 mb-5 border border-info" style="background-color: #0B0C10">
        <div class="card-body">
            <h4 class="text-info text-center fw-bold">600DH</h4>
        </div>
      </card>
      <div class="p-4" style="background-color: #12232E;">
        <h4 class="text-white">Car Details</h4>
        <div class="d-flex justify-content-between">
          <p class="text-secondary fw-bold">Brand</p>
          <p class="text-white">Tesla</p>
        </div>
        <div class="d-flex justify-content-between">
          <p class="text-secondary fw-bold">Model</p>
          <p class="text-white">Model 3</p>
        </div>
        <div class="d-flex justify-content-between">
          <p class="text-secondary fw-bold">Year</p>
          <p class="text-white">2022</p>
        </div>
        <div class="d-flex justify-content-between">
          <p class="text-secondary fw-bold">Body Type</p>
          <p class="text-white">Sedan</p>
        </div>
        <div class="d-flex justify-content-between">
          <p class="text-secondary fw-bold">Seats</p>
          <p class="text-white">5 people</p>
        </div>
        <div class="d-flex justify-content-between">
          <p class="text-secondary fw-bold">Exterior Color</p>
          <p class="text-white">Black</p>
        </div>
        <hr class="text-white">

        <h4 class="text-white">Engine</h4>
        <div class="d-flex justify-content-between">
          <p class="text-secondary fw-bold">Fuel Type</p>
          <p class="text-white">Electric</p>
        </div>
        <div class="d-flex justify-content-between">
          <p class="text-secondary fw-bold">Mileage</p>
          <p class="text-white">340km</p>
        </div>
        <div class="d-flex justify-content-between">
          <p class="text-secondary fw-bold">Transmission</p>
          <p class="text-white">Automatic</p>
        </div>
        <div class="d-flex justify-content-between">
          <p class="text-secondary fw-bold">Power</p>
          <p class="text-white">283hp</p>
        </div>
        <hr class="text-white">

        <h4 class="text-white">Dimension</h4>
        <div class="d-flex justify-content-between">
          <p class="text-secondary fw-bold">Length</p>
          <p class="text-white">4694 mm</p>
        </div>
        <div class="d-flex justify-content-between">
          <p class="text-secondary fw-bold">Width</p>
          <p class="text-white">1849 mm</p>
        </div>
        <div class="d-flex justify-content-between">
          <p class="text-secondary fw-bold">Height</p>
          <p class="text-white">1443 mm</p>
        </div>
        <div class="d-flex justify-content-between">
          <p class="text-secondary fw-bold">Cargo Volume</p>
          <p class="text-white">542 L</p>
        </div>
        
        
      </div>
    </div>
  </div>

@stop