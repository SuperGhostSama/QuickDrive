@extends('layouts.dashboard')
@section('content')

<!-- =============== Navigation ================ -->
<div class="containers">
    @include('includes.dashboard-sidebar')

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
                            <td>Brand</td>
                            <td>Model</td>
                            <td>Year</td>
                            <td>Body Type</td>
                            <td>Seats</td>
                            <td>Exterior Color</td>
                            <td>Fuel Type</td>
                            <td>Mileage</td>
                            <td>Transmission</td>
                            <td>Power</td>
                            <td>Length</td>
                            <td>Width</td>
                            <td>Height</td>
                            <td>Cargo Volume</td>
                            <td>Status</td>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Star Refrigerator</td>
                            <td>$1200</td>
                            <td>$1200</td>
                            <td>$1200</td>
                            <td>$1200</td>
                            <td>$1200</td>
                            <td>$1200</td>
                            <td>$1200</td>
                            <td>$1200</td>
                            <td>$1200</td>
                            <td>$1200</td>
                            <td>$1200</td>
                            <td>$1200</td>
                            <td>Paid</td>
                            <td><span class="status delivered">Delivered</span></td>
                        </tr>

                        <tr>
                            <td>Dell Laptop</td>
                            <td>$110</td>
                            <td>$1200</td>
                            <td>$1200</td>
                            <td>$1200</td>
                            <td>$1200</td>
                            <td>$1200</td>
                            <td>$1200</td>
                            <td>$1200</td>
                            <td>$1200</td>
                            <td>$1200</td>
                            <td>$1200</td>
                            <td>$1200</td>
                            <td>Due</td>
                            <td><span class="status pending">Pending</span></td>
                        </tr>

                        <tr>
                            <td>Apple Watch</td>
                            <td>$1200</td>
                            <td>$1200</td>
                            <td>$1200</td>
                            <td>$1200</td>
                            <td>$1200</td>
                            <td>$1200</td>
                            <td>$1200</td>
                            <td>$1200</td>
                            <td>$1200</td>
                            <td>$1200</td>
                            <td>$1200</td>
                            <td>$1200</td>
                            <td>Paid</td>
                            <td><span class="status return">Return</span></td>
                        </tr>

                        
                    </tbody>
                </table>
            </div>

        </div>
 
    </div>
</div>
@include('includes.cars-modal')
@stop