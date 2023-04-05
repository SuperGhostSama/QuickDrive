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
                            <td class="text-center">Name</td>
                            <td class="text-center">Email</td>
                            <td class="text-center">Role</td>
                            
                            <td class="text-center">Operations</td>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td class="text-center">{{ $user->name }}</td>
                            <td class="text-center">{{ $user->email }}</td>
                            <td class="text-center">{{ $user->getRoleNames()[0] }}</td>
                            <td class="text-center">
                                <a href="#modal-roles" data-bs-toggle="modal"><ion-icon name="create-outline"></ion-icon></a>
                            </td>
                        </tr>
                        
                        @endforeach
                        

                        
                    </tbody>
                </table>
            </div>

        </div>
 
    </div>
</div>
@include('includes.roles-modal')
@stop