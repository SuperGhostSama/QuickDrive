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
                    <h2>Contact Us</h2>
                    
                </div>

                <table>
                    <thead>
                        <tr >
                            <td class="text-center">Name</td>
                            <td class="text-center">Email</td>
                            <td class="text-center">Message</td>
                            <td class="text-center">Created At</td>
                            <td class="text-center">Operations</td>
                            
                            
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($contacts as $contact)
                        <tr>
                            <td class="text-center">{{ $contact->full_name }}</td>
                            <td class="text-center">{{ $contact->email }}</td>
                            <td class="text-center">{{ $contact->message }}</td>
                            <td class="text-center">{{ $contact->created_at }}</td>
                            <td class="text-center">
                                <form class="d-inline" method="POST" action="{{ route('contacts.destroy', $contact) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="unstyled" type="submit"><ion-icon name="trash-outline"></ion-icon></button>
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

@stop