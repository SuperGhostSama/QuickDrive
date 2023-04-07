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
                    <h2>Reservations List</h2>
                    
                </div>

                <table>
                    <thead>
                        <tr >
                            <td class="text-center">Name</td>
                            <td class="text-center">Car</td>
                            <td class="text-center">CIN</td>
                            <td class="text-center">Phone</td>
                            <td class="text-center">Driving Licence</td>
                            <td class="text-center">Date Of Birth</td>
                            <td class="text-center">Start Date</td>
                            <td class="text-center">End Date</td>
                            <td class="text-center">Status</td>
                            <td class="text-center">Operations</td>
                            
                            
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($reservations as $reservation)
                        <tr>
                            <td class="text-center">{{ $reservation->user->name}}</td>
                            <td class="text-center">{{ $reservation->car->brand->name.' '.$reservation->car->model }}</td>
                            <td class="text-center">{{ $reservation->CIN}}</td>
                            <td class="text-center">{{ $reservation->phone_number}}</td>
                            <td class="text-center">{{ $reservation->driving_licence_number}}</td>
                            <td class="text-center">{{ $reservation->date_of_birth}}</td>
                            <td class="text-center">{{ $reservation->start_date}}</td>
                            <td class="text-center">{{ $reservation->end_date}}</td>
                            <td><span class="
                                @if ($reservation->status == "Accepted")
                                { available }

                                @elseif ($reservation->status == "Rejected") 
                                { reserved }

                                @else
                                { pending }

                                @endif  
                                ">{{ $reservation->status}}</span></td>
                            <td class="text-center">
                                <a href="#modal-reservation" data-bs-toggle="modal" onclick="editReservation({{ $reservation->id }})"><ion-icon name="create-outline"></ion-icon></a>
                                
                                <form class="d-inline" method="POST" action="{{ route('reservations.destroy', $reservation) }}">
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
@include('includes.reservations-modal')
<script>
    function editReservation(id) {
        let xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                let reservation = JSON.parse(xhr.responseText);

                console.log(reservation);

                //Setting the value of the hidden input as id
                document.querySelector('#modal-reservation #reservation-id').value = reservation.reservation.id;
                // Condition that selects the option in status update
                if(reservation.reservation.status == 'Accepted' || reservation.reservation.status == 'Pending' || reservation.reservation.status == 'Rejected'){
                    document.querySelector('#modal-reservation [name=status] option[value='+reservation.reservation.status+']').selected = true;
                }
                else {
                    document.querySelector('#modal-reservation [name=status] option').selected = true;
                }
            }
        }
        xhr.open("GET", "reservations/" + id, true);
        xhr.send();
    }
    
</script>
@stop