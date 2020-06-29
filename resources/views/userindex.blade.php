<!-- bhavik chudasama
user view
26-06-20 -->
@extends('layouts.app')

@section('content')


<div class="container">
<!-- Modal for adding category-->

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">projects</div>

                <div class="card-body">
                <table  class="table table-striped table-bordered" style="width:100%">
        <a href="{{route('register')}}" type="button" class="btn btn-success" style="float : right;" >ADD NEW</a>
        <thead>
            <tr>
                
                <th>Developer Name</th>
                
                <th>Email</th>
                <th>Joined</th>
                 <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            @foreach($data as $row)
           
                <td>{{$row->name}}</td>
               
                <td>{{$row->email}}</td>
                <td>{{$row->created_at}}</td>

                <td>
                <a href="{{route('usr.show',$row->id)}}" class="btn btn-info btn-circle">
                    Details
                  </a>
                  
                
                  </td>
            
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
            
                <th>Developer Name</th>
                
                <th>Email</th>
                <th>Joined</th>
                 <th>Actions</th>
            </tr>
        </tfoot>
    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection