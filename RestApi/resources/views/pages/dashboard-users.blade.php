@extends('layouts.dashboard')
@section('content')

<!-- =============== Navigation ================ -->
<div class="containers">
    @include('includes.dashboard-sidebar')

    
            <!-- ================ Order Details List ================= -->
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Users</h2>
                    
                </div>

                <table>
                    <thead>
                        <tr>
                            <td>Users</td>
                            <td>Role</td>
                            <td>Email</td>
                            
                            <td>Operations</td>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Salah</td>
                            <td>Admin</td>
                            <td>Salah@test.com</td>
                            <td>
                                <a href="#modal-roles" data-bs-toggle="modal"><ion-icon name="create-outline"></ion-icon></a>

                                <a href=""><ion-icon name="trash-outline"></ion-icon></a>
                            </td>
                        </tr>
                        

                        

                        
                    </tbody>
                </table>
            </div>

        </div>
 
    </div>
</div>
@include('includes.roles-modal')
@stop