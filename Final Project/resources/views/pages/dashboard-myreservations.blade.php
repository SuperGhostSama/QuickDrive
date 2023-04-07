@extends('layouts.dashboard')
@section('content')

<!-- =============== Navigation ================ -->
<div class="containers">
    @include('includes.dashboard-sidebar')

    
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
                        
                        <tr>
                            <td class="text-center">Salah</td>
                            <td class="text-center">Chevrolet Camaro</td>
                            <td class="text-center">HA221138</td>
                            <td class="text-center">0642781382</td>
                            <td class="text-center">HA3128931</td>
                            <td class="text-center">11/05/2000</td>
                            <td class="text-center">01/07/2023</td>
                            <td class="text-center">30/07/2023</td>
                            <td><span class="status pending">Pending</span></td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
 
    </div>
</div>

@stop