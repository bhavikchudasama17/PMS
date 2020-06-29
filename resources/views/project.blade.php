<!-- bhavik chudasama
Project view
25-06-20 -->
@extends('layouts.app')

@section('content')



<div class="container">
<!-- Modal for adding category-->
<div class="modal fade" id="createpro" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">create project</h5>

                    
                  </div>
                  <div class="modal-body">
                  <form method="post" action="{{ route('pro.store' )}}" >

                    @csrf

                    <label >Enter project name</label>
                    <input type="hidden" name="mid" value="{{ Auth::user()->id }}" >
                    <input type="text" name="name" class="form-control input-lg" required/>
                    <label >Enter vendor name</label>

                    <input type="text" name="vendor" class="form-control input-lg" required/>
                    <label >Enter Description of project</label>

                    <textarea name="desc" class="form-control input-lg"  required></textarea>
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
                <div class="card-header">projects</div>

                <div class="card-body">
                <table  class="table table-striped table-bordered" style="width:100%">
        <a href="#createpro" type="button" class="btn btn-success" style="float : right;"data-toggle="modal" >ADD NEW</a>
        <thead>
            <tr>
                <th>Projects</th>
                <th>Manager</th>
                <th>Vendor</th>
                <th>Description</th>
                <th>Created date</th>
                 <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            @foreach($data as $row)
                <td>{{$row->name}}</td>
                <td>{{$row->manname}}</td>
                <td>{{$row->vendor}}</td>
                <td>{{$row->desc}}</td>
                <td>{{$row->created_at}}</td>

                <td>@if(Auth::user()->id==$row->mid)
                <a href="{{route('pro.edit',$row->id)}}" class="btn btn-info btn-circle">
                    Edit
                  </a>
                  <form action="{{ route('pro.destroy', $row->id) }}" method="post">
                @csrf
				 @method('DELETE')
					 <button type="submit" class="btn btn-danger">Delete</button>
 					
			      	</form>
                @endif
                  </td>
            
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
            <th>Projects</th>
                <th>Manager</th>
                <th>Vendor</th>
                <th>Description</th>
                <th>Created date</th>
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