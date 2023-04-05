@extends('layouts.dashboard')
@section('content')

<!-- =============== Navigation ================ -->
<div class="containers">
    @include('includes.dashboard-sidebar')

    
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{auth()->user()->name}}</span><span class="text-black-50">{{auth()->user()->getRoleNames()[0]}}</span><span> </span></div>
            </div>
            <div class="col-md-5 border-right">
                <form action="{{ route('profile.update',auth()->id()) }}" method="POST">
                    @csrf
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Profile Settings</h4>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12"><label class="labels">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="first name" value="{{auth()->user()->name}}">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12"><label class="labels">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="enter email" value="{{auth()->user()->email}}">
                                </div>
                                <div class="col-md-12"><label class="labels">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="" value="">
                                </div>
                            </div>
                            
                            <div class="mt-5 text-center">
                                <button class="btn btn-primary profile-button" type="submit">Save Profile</button>

                                <form class="d-inline" method="POST" action="{{ route('profile.delete',auth()->id()) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger profile-button" type="submit">Delete Profile</button>
                                </form>
                                


                            </div>
                        </div>
                </form>
            </div>
            
        </div>
    </div>
 
    </div>
</div>

@stop