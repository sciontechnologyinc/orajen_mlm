@extends('admin.master.template')

@section('content')
 
 @if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

 @if(count($errors) > 0 )
    <div class="alert alert-danger">
        <strong>Whoooppss !!</strong> There were some problem with your input. <br>
        <ul>
          @foreach($errors->all() as $error)
              <li> {{ $error }} </li>
          @endforeach
        </ul>
    </div>
 @endif

 <div class="main-panel">
    <div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                  Member List
                <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                  <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Sponsor ID</th>
                            <th>Placement ID</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                    @foreach($members as $member)
                      <tr>
                        <td> {{ $member->id }}</td>
                        <td> {{ $member->firstname }}</td>
                        <td> {{ $member->middlename }}</td>
                        <td> {{ $member->lastname }}</td>
                        <td> {{ $member->email }}</td>
                        <td> {{ $member->sponsorid }}</td>
                        <td> {{ $member->placementid }}</td>
                        <td><center>
                        <div class="form-group" >
                        <a rel="tooltip" title="Edit" class="btn btn-success btn-sm mr-1" href="members/{!! $member->id !!}/edit"><i class="fa fa-edit"></i></a>
                        {!! Form::open(['id' => 'deleteForm', 'method' => 'DELETE', 'url' => '/members/' . $member->id]) !!}
                        {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'rel' => 'tooltip', 'title' => 'Delete'] )  }}
                        {!! Form::close() !!}
                        </div>
                        </center></td>
                      </tr>
                     @endforeach
                    </tbody>
                  </table>
                  </div>
                </div>
              </div>
            </div>
    </div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script type="text/javascript">
     $("#deleteForm").submit(function (event) {
                 var x = confirm("Are you sure you want to delete?");
                    if (x) {
                        return true;
                    }
                    else {

                        event.preventDefault();
                        return false;
                    }

                });
</script>

<script type="text/javascript">
	$(document).ready(function(){
	    $("[rel=tooltip]").tooltip({ placement: 'top'});
	    $("[rel=tooltip]").tooltip({ placement: 'top'});
	});
</script>
 @endsection