@extends('layouts.app')

@section('content')
<head>

<link  rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" >

</head>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" ></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<div class="container">
<!-- Modal for adding category-->
<div class="modal fade" id="createpro" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">create project</h5>

                    
                  </div>
                  <div class="modal-body">
                  <form method="post" action="{{ route('pro.store' )}}" enctype="multipart/form-data">

                    @csrf

                    <label >Enter project name</label>
                    <input type="hidden" name="mid" value="{{ Auth::user()->id }}">
                    <input type="text" name="name" class="form-control input-lg" />
                    <label >Enter vendor name</label>

                    <input type="text" name="vendor" class="form-control input-lg" />
                    <label >Enter Description of project</label>

                    <input type="text" name="desc" class="form-control input-lg" />
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
                <table id="example" class="table table-striped table-bordered" style="width:100%">
        <a href="#createpro" type="button" class="btn btn-primary" style="float : right;"data-toggle="modal" ><i class="fa fa-plus"></i></a>
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
                <td>{{$row->mid}}</td>
                <td>{{$row->vendor}}</td>
                <td>{{$row->desc}}</td>
                <td>{{$row->created_at}}</td>

                <td><a href="{{route('pro.edit',$row->id)}}" class="btn btn-info btn-circle">
                    <i class="fas fa-info-circle"></i>
                  </a>
                  <form action="{{ route('pro.destroy', $row->id) }}" method="post">
                @csrf
				 @method('DELETE')
					 <button type="submit" class="btn btn-danger">Delete</button>
 					
				</form>
                
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