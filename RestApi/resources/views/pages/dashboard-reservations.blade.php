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
                            <td class="text-center">0645875136</td>
                            <td class="text-center">DLN0</td>
                            <td class="text-center">2000-01-01</td>
                            <td class="text-center">2023-04-01</td>
                            <td class="text-center">2023-04-09</td>
                            <td><span class="status delivered">Delivered</span></td>
                            <td class="text-center">
                                <a href=""><ion-icon name="create-outline"></ion-icon></a>
                                <a href=""><ion-icon name="trash-outline"></ion-icon></a>
                            </td> 
                        </tr>
                        <tr>
                            <td class="text-center">Salah</td>
                            <td class="text-center">Chevrolet Camaro</td>
                            <td class="text-center">HA221138</td>
                            <td class="text-center">0645875136</td>
                            <td class="text-center">DLN0</td>
                            <td class="text-center">2000-01-01</td>
                            <td class="text-center">2023-04-01</td>
                            <td class="text-center">2023-04-09</td>
                            <td><span class="status pending">Pending</span></td> 
                            <td class="text-center">
                                <a href=""><ion-icon name="create-outline"></ion-icon></a>
                                <a href=""><ion-icon name="trash-outline"></ion-icon></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">Salah Eddine Hanaoui</td>
                            <td class="text-center">Chevrolet Camaro</td>
                            <td class="text-center">HA221138</td>
                            <td class="text-center">0645875136</td>
                            <td class="text-center">DLN0</td>
                            <td class="text-center">2000-01-01</td>
                            <td class="text-center">2023-04-01</td>
                            <td class="text-center">2023-04-09</td>
                            <td><span class="status return">Return</span></td> 
                            <td class="text-center">
                                <a href=""><ion-icon name="create-outline"></ion-icon></a>
                                <a href=""><ion-icon name="trash-outline"></ion-icon></a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
 
    </div>
</div>

@stop