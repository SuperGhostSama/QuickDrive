@extends('layouts.dashboard')
@section('content')

<!-- =============== Navigation ================ -->
<div class="containers">
    @include('includes.dashboard-sidebar')

    
            <!-- ================ Order Details List ================= -->
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Available Brands</h2>
                    <a href="#modal-brands" data-bs-toggle="modal" class="btns">Add Car</a>
                </div>

                <table>
                    <thead>
                        <tr>
                            <td>Brand</td>
                            
                            <td>Operations</td>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Toyota</td>
                            <td>
                                <a href=""><ion-icon name="create-outline"></ion-icon></a>
                                <a href=""><ion-icon name="trash-outline"></ion-icon></a>
                            </td>
                        </tr>

                        <tr>
                            <td>Dacia</td>
                            <td>
                                <a href=""><ion-icon name="create-outline"></ion-icon></a>
                                <a href=""><ion-icon name="trash-outline"></ion-icon></a>
                            </td>
                        </tr>

                        <tr>
                            <td>Suzuki</td>
                            <td>
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
@include('includes.brands-modal')
@stop