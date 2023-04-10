@extends('layouts.dashboard')
@section('content')

<!-- =============== Navigation ================ -->
<div class="containers">
    @include('includes.dashboard-sidebar')

    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('success') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
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
                                <a id="edit-button" onclick="editRole({{ $user->id }})" href="#modal-roles" data-bs-toggle="modal"><ion-icon name="create-outline"></ion-icon></a>
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


<script>
    function editRole(id) {
        let xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                let role = xhr.responseText;
                
                console.log(role);
                // Condition that selects the option in role update
                    document.querySelector('#modal-roles [name=role] option[value="'+role+'"]').selected = true;
               
                    document.querySelector('#modal-roles #user-id').value = id;
                
            }
        }
        xhr.open("GET", "users/"+id, true);
        xhr.send();
    }
    
</script>
@stop