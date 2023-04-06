@extends('layouts.default')
@section('breadcrumbs')
<!-- BreadCrumbs -->
<div class="text-white mt-4 ms-5 mb-4 pb-3" >
    <h2>All Cars</h2>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url ('/')}}" style="color: white; text-decoration: none">Home</a></li>
          <li class="breadcrumb-item " aria-current="page">Cars List</li>
        </ol>
    </nav>
</div>
@stop

@section('content')
<section>
    <div id="allCars">
        <!-- SEARCH -->
        <div class="ps-5 pe-5 mb-3" >
            <form action="#" class="d-flex">
                <input class="w-100 me-1 border-0 text-white rounded" type="text" id="searchAllCars" name="searchAllCars" placeholder=" Search"  style="background-color: #12232E"><br><br>
                <button type="submit" name="search" class="btn-prim col-3 text-white"><i class="bi bi-search"></i> Search</button>
              </form>
        </div>

        <div class="d-flex justify-content-center ">
            <h3 class="text-white ">20 Results</h3>
        </div>

        <div class="dropdown d-flex justify-content-center">
            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Sort By
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Ascending Price</a></li>
              <li><a class="dropdown-item" href="#">Desending Price</a></li>
            </ul>
        </div>

        <div class="d-flex flex-wrap justify-content-center">
            <a href="{{url ('cardetail')}}" class="card m-5 border border-info" style="width: 20rem; background-color: #0B0C10;text-decoration: none;">
                <img src="{{ asset('img/buggati chiron.jpg') }}" class="card-img-top p-3" alt="...">
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
            </a>
            <a href="{{url ('cardetail')}}" class="card m-5 border border-info" style="width: 20rem; background-color: #0B0C10;text-decoration: none;">
                <img src="{{ asset('img/buggati chiron.jpg') }}" class="card-img-top p-3" alt="...">
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
            </a>
            <a href="{{url ('cardetail')}}" class="card m-5 border border-info" style="width: 20rem; background-color: #0B0C10;text-decoration: none;">
                <img src="{{ asset('img/buggati chiron.jpg') }}" class="card-img-top p-3" alt="...">
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
            </a>
            <a href="{{url ('cardetail')}}" class="card m-5 border border-info" style="width: 20rem; background-color: #0B0C10;text-decoration: none;">
                <img src="{{ asset('img/buggati chiron.jpg') }}" class="card-img-top p-3" alt="...">
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
            </a>
           
            
            
            
        </div>
    </div>
</section>
@stop