@extends('layouts.dashboard')
@section('content')

<!-- =============== Navigation ================ -->
<div class="containers">
    @include('includes.dashboard-sidebar')

    
            <!-- ================ Order Details List ================= -->
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>My Reservations</h2>
                    
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
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
 
    </div>
</div>

@stop