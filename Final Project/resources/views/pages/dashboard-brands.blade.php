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
                        @foreach ($brands as $brand)
                        <tr>
                            <td>{{ $brand->name }}</td>
                            <td>
                                <a id="edit-button" onclick="editBrand({{ $brand->id }})" href="#modal-brands-edit" data-bs-toggle="modal"><ion-icon name="create-outline"></ion-icon></a>
                                <form class="d-inline" method="POST" action="{{ route('brands.destroy', $brand) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="unstyled"><ion-icon name="trash-outline"></ion-icon></button>
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
@include('includes.brands-modal')
@include('includes.brands-edit-modal')
<script>
    function editBrand(id) {
        let xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                let brand = JSON.parse(xhr.responseText);
                document.querySelector('#modal-brands-edit #brand-id').value = brand.id;
                document.querySelector('#modal-brands-edit #brand').value = brand.name;
            }
        }
        xhr.open("GET", "brands/" + id, true);
        xhr.send();
    }
</script>
@stop

