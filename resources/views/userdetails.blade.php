<!-- bhavik chudasama
user details
26-06-20 -->
@extends('layouts.app')

@section('content')
<div class="container">
<div class="modal fade" id="assignpro" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Assign project</h5>

                    
                  </div>
                  <div class="modal-body">
                  <form method="post" action="{{ route('prousr.store' )}}" >

                    @csrf

                    <label >Project name</label>
                    <select class="form-control input-lg" name="pid" required>
                    @foreach($data2 as $row1)
                    <option value="{{$row1->id}}">{{$row1->name}}</option>
                    @endforeach
                    </select>
                    <label >Developer name</label>
                    <input type="hidden" name="uid" value="{{$data->id}}" required>
                    <input type="text"  value="{{$data->name}}"class="form-control input-lg" disabled/>
                    </br>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                  </form>

                  
                  </div>
                  <div class="modal-footer">
                  
                </div>
                
              </div>
            </div>
          </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h2><div class="card-header" >User details</div></h2>

                <div class="card-body">
                <h2 style="color:blue;" >Developer General details</h2>
                <h3 style="float:right">Image</br><img src="{{$data->avatar}}"></img></h3> 
                    </br>
                    <h3>Name:-
                    {{$data->name}}</h3>
                    <h3>Email:-
                    {{$data->email}}</h3>
                    <h3>Joined:-
                    {{$data->created_at}}</h3>
                    </br>
                    </br>
                    </br>
                    <h2 style="color:blue;" >Working on following projects</h2>
                    
                    @foreach($data1 as $row)
                    </br>
                    </br>
                    </br>
                    <h3>Project:-
                    {{$row->proname}}
                    </h3>
                    <h3>Vendor:-
                    {{$row->vendor}}
                    </h3>
                    <h3>Started at:-
                    {{$row->created_at}}
                    </h3>
                    <h3>Project Detail:-
                    {{$row->desc}}
                    </h3>

                    @endforeach
                    </br>
                    <a href="#assignpro"  style="float : right;"data-toggle="modal">Assign new project</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
