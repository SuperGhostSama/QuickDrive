@extends('layouts.dashboard')
@section('content')

<!-- =============== Navigation ================ -->
<div class="containers">
    @include('includes.dashboard-sidebar')

    <style>
        .unstyled{
            border: none;
            margin: 0;
            padding: 0;
            width: auto;
            overflow: visible;
            color: rgba(var(--bs-link-color-rgb),var(--bs-link-opacity,1));
            background: transparent;
        }
    </style>

            <!-- ================ Order Details List ================= -->
        <div class="details">
            
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Available Cars</h2>
                    <a href="#modal-cars" data-bs-toggle="modal" class="btns">Add Car</a>
                </div>
                
                <table>
                    <thead>
                        <tr>
                            <td class="text-center">Img</td>
                            <td class="text-center">Brand</td>
                            <td class="text-center">Model</td>
                            <td class="text-center">Body Type</td>
                            <td class="text-center">Seats</td>
                            <td class="text-center">Exterior Color</td>
                            <td class="text-center">Fuel Type</td>
                            <td class="text-center">Mileage</td>
                            <td class="text-center">Transmission</td>
                            <td class="text-center">Power</td>
                            <td class="text-center">Length</td>
                            <td class="text-center">Width</td>
                            <td class="text-center">Height</td>
                            <td class="text-center">Cargo Volume</td>
                            <td class="text-center">Price</td>
                            <td class="text-center">Status</td>
                            <td class="text-center">Operations</td>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($cars as $car)
                        <tr>
                            <td class="text-center">XX</td>
                            <td class="text-center">{{ $car->brand['name'] }}</td>
                            <td class="text-center">{{ $car->model }}</td>
                            <td class="text-center">{{ $car->bodytype['name'] }}</td>
                            <td class="text-center">{{ $car->seats }}</td>
                            <td class="text-center">{{ $car->color }}</td>
                            <td class="text-center">{{ $car->fueltype['name'] }}</td>
                            <td class="text-center">{{ $car->mileage }}</td>
                            <td class="text-center">{{ $car->transmission['name']}}</td>
                            <td class="text-center">{{ $car->power }}</td>
                            <td class="text-center">{{ $car->length }}</td>
                            <td class="text-center">{{ $car->width }}</td>
                            <td class="text-center">{{ $car->height }}</td>
                            <td class="text-center">{{ $car->cargo_volume}}</td>
                            <td class="text-center">{{ $car->price}} DH</td>
                            <td class="text-center"><span class="status delivered">{{$car->status}}</span></td>

                            <td>
                                <a id="edit-button" href="#modal-cars-edit" data-bs-toggle="modal"><ion-icon name="create-outline"></ion-icon></a>
                                <form class="d-inline" method="POST" action="{{ route('cars.destroy', $car) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="unstyled" type="submit"><ion-icon name="trash-outline"></ion-icon></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
 
    </div>
</div>
@include('includes.cars-modal')
@include('includes.cars-edit-modal')
<script>
    function editCar(id) {
        let xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                let car = JSON.parse(xhr.responseText);
                document.querySelector('#modal-cars-edit #car-id').value = car.id;
                document.querySelector('#modal-cars-edit #brand').value = car.name;
            }
        }
        xhr.open("GET", "cars/" + id, true);
        xhr.send();
    }
</script>
@stop