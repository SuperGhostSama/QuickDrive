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
                            <td class="text-center"><span class="
                                @if ($car->status == "Available"){
                                    available
                                @else reserved
                                @endif                                
                                ">{{$car->status}}</span></td>

                            <td class="text-center">
                                <a id="edit-button" onclick="editCar({{ $car->id }})" href="#modal-cars-edit" data-bs-toggle="modal"><ion-icon name="create-outline"></ion-icon></a>
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
                console.log(car);
                
                // Gets all the brands options
                let brands = car.brands;
                // console.log(car.brands);
                let brandSelect = document.querySelector('#modal-cars-edit [name=brand]');
                brandSelect.innerHTML = `<option selected>Open this select menu</option>`;
                brands.forEach(element => {
                    let domElement = `<option value="${element.id}">${element.name}</option>`;
                    brandSelect.innerHTML += domElement;    
                });
                
                // Gets all the bodytype options
                let bodytype = car.bodytype;
                // console.log(car.bodytype);
                let bodytypeSelect = document.querySelector('#modal-cars-edit [name=bodytype]');
                bodytypeSelect.innerHTML = `<option selected>Open this select menu</option>`;
                bodytype.forEach(element => {
                    let domElement = `<option value="${element.id}">${element.name}</option>`;
                    bodytypeSelect.innerHTML += domElement;    
                });

                // Gets all the fueltype options
                let fueltype = car.fueltype;
                // console.log(car.fueltype);
                let fueltypeSelect = document.querySelector('#modal-cars-edit [name=fueltype]');
                fueltypeSelect.innerHTML = `<option selected>Open this select menu</option>`;
                fueltype.forEach(element => {
                    let domElement = `<option value="${element.id}">${element.name}</option>`;
                    fueltypeSelect.innerHTML += domElement;    
                });
                
                // Gets all the transmission options
                let transmission = car.transmission;
                // console.log(car.transmission);
                let transmissionSelect = document.querySelector('#modal-cars-edit [name=transmission]');
                transmissionSelect.innerHTML = `<option selected>Open this select menu</option>`;
                transmission.forEach(element => {
                    let domElement = `<option value="${element.id}">${element.name}</option>`;
                    transmissionSelect.innerHTML += domElement;    
                });

                // Condition that selects the option in brand update
                    document.querySelector('#modal-cars-edit [name=brand] option[value="'+car.car.brand_id+'"]').selected = true;
               
                // Condition that selects the option in bodytype update
                    document.querySelector('#modal-cars-edit [name=bodytype] option[value="'+car.car.body_type_id+'"]').selected = true;
               
                // Condition that selects the option in fueltype update
                    document.querySelector('#modal-cars-edit [name=fueltype] option[value="'+car.car.fuel_type_id+'"]').selected = true;
               
                // Condition that selects the option in transmission update
                    document.querySelector('#modal-cars-edit [name=transmission] option[value="'+car.car.transmission_id+'"]').selected = true;
               
                
                // Condition that selects the option in status update
                if(car.car.status == 'Available' || car.car.status == 'Reserved'){
                    document.querySelector('#modal-cars-edit [name=status] option[value='+car.car.status+']').selected = true;
                }
                else {
                    document.querySelector('#modal-cars-edit [name=status] option').selected = true;
                }

                



                document.querySelector('#modal-cars-edit #car-id').value = car.car.id;
                document.querySelector('#modal-cars-edit #model').value = car.car.model;
                document.querySelector('#modal-cars-edit #seats').value = car.car.seats;
                document.querySelector('#modal-cars-edit #color').value = car.car.color;
                document.querySelector('#modal-cars-edit #mileage').value = car.car.mileage;
                document.querySelector('#modal-cars-edit #power').value = car.car.power;
                document.querySelector('#modal-cars-edit #length').value = car.car.length;
                document.querySelector('#modal-cars-edit #width').value = car.car.width;
                document.querySelector('#modal-cars-edit #height').value = car.car.height;
                document.querySelector('#modal-cars-edit #cargo').value = car.car.cargo_volume;
                document.querySelector('#modal-cars-edit #price').value = car.car.price;
            }
        }
        xhr.open("GET", "cars/" + id, true);
        xhr.send();
    }
    // function addCar() {
    //     let xhr = new XMLHttpRequest();
    //     xhr.onreadystatechange = function() {
    //         if (xhr.readyState == 4 && xhr.status == 200) {
    //             let car = JSON.parse(xhr.responseText);
    //             console.log(car);

                
    //             // Gets all the brands options
    //             let brands = car.brands;
    //             // console.log(car.brands);
    //             let brandSelect = document.querySelector('[name=brand]');
    //             brandSelect.innerHTML = `<option selected>Open this select menu</option>`;
    //             brands.forEach(element => {
    //                 let domElement = `<option value="${element.id}">${element.name}</option>`;
    //                 brandSelect.innerHTML += domElement;    
    //             });
                
    //             // Gets all the bodytype options
    //             let bodytype = car.bodytype;
    //             // console.log(car.bodytype);
    //             let bodytypeSelect = document.querySelector('[name=bodytype]');
    //             bodytypeSelect.innerHTML = `<option selected>Open this select menu</option>`;
    //             bodytype.forEach(element => {
    //                 let domElement = `<option value="${element.id}">${element.name}</option>`;
    //                 bodytypeSelect.innerHTML += domElement;    
    //             });

    //             // Gets all the fueltype options
    //             let fueltype = car.fueltype;
    //             // console.log(car.fueltype);
    //             let fueltypeSelect = document.querySelector('[name=fueltype]');
    //             fueltypeSelect.innerHTML = `<option selected>Open this select menu</option>`;
    //             fueltype.forEach(element => {
    //                 let domElement = `<option value="${element.id}">${element.name}</option>`;
    //                 fueltypeSelect.innerHTML += domElement;    
    //             });
                
    //             // Gets all the transmission options
    //             let transmission = car.transmission;
    //             // console.log(car.transmission);
    //             let transmissionSelect = document.querySelector('[name=transmission]');
    //             transmissionSelect.innerHTML = `<option selected>Open this select menu</option>`;
    //             transmission.forEach(element => {
    //                 let domElement = `<option value="${element.id}">${element.name}</option>`;
    //                 transmissionSelect.innerHTML += domElement;    
    //             });

               
    //         }
    //     }
    //     xhr.open("GET", "cars/" + id, true);
    //     xhr.send();
    // }
</script>
@stop