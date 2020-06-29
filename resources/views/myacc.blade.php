<!-- bhavik chudasama
home
24-06-20 -->
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="color:blue;">My account details</div>
                        
                
                <div class="card-body">
               
                <h3 style="float:right">Avatar</br><img src="{{Auth::user()->avatar}}"></img></h3> 
                    </br>
                    <h3>Name:-
                    {{Auth::user()->name}}</h3>
                    <h3>Email:-
                    {{Auth::user()->email}}</h3>
                    <h3>Joined:-
                    {{Auth::user()->created_at}}</h3>
                  
                    <a href=""  style="float : right;"data-toggle="modal">Edit details</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
