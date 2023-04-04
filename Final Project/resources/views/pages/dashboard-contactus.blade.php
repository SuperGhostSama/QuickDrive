@extends('layouts.dashboard')
@section('content')

<!-- =============== Navigation ================ -->
<div class="containers">
    @include('includes.dashboard-sidebar')

    
            <!-- ================ Order Details List ================= -->
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Contact Us</h2>
                    
                </div>

                <table>
                    <thead>
                        <tr >
                            <td class="text-center">Name</td>
                            <td class="text-center">Phone</td>
                            <td class="text-center">Email</td>
                            <td class="text-center">Comment</td>
                            
                            
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Salah</td>
                            <td>0642781382</td>
                            <td>Salah@test.com</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim officia, dicta blanditiis saepe voluptate necessitatibus quidem quibusdam debitis! Maiores, provident.</td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
 
    </div>
</div>

@stop