@extends('admin.master.template')
@section('headerButton')
          <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                    <li class="nav-item active">
                    <a href="#" class="nav-link">Add Product</a>
                    </li>
                    <li class="nav-item">
                        <a href="products" class="nav-link">Products List</a>
                    </li>
            </ul>
@endsection
@section('content')
<<<<<<< HEAD
 <link rel="stylesheet" href="{!! ('/css/members.css') !!}">

   
     
=======
<link rel="stylesheet" href="{!! ('/css/members.css') !!}">

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
>>>>>>> 5fa32f54f191c541d6d17c2e86835c03a5b3d477
 <div class="main-panel">
 {!! Form::open(['id' => 'dataForm', 'url' => '/members']) !!}
    <div class="content-wrapper">
         <div class="col-12">
                  <div class="card">
                    <div class="card-header"><strong>Create</strong><small> Member</small></div>
                    <div class="card-body">
                     

                       
                          <div class="form-group">
                          
								{!!Form::label('firstname', 'First Name', array('class' => 'form-control-label'))!!}
								{!!Form::text('firstname',null, ['placeholder' => 'First Name', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
				
                         <div class="form-group">
								{!!Form::label('middlename', 'Middle Name', array('class' => 'form-control-label'))!!}
								{!!Form::text('middlename',null, ['placeholder' => 'Middle Name', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
						 </div>

                           <div class="form-group">
								{!!Form::label('lastname', 'Last Name', array('class' => 'form-control-label'))!!}
								{!!Form::text('lastname',null, ['placeholder' => 'Last Name', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
						  </div>
                        </div>
                  
                
                          <div class="form-group">
								{!!Form::label('address', 'Address', array('class' => 'form-control-label'))!!}
								{!!Form::text('address',null, ['placeholder' => 'Address', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
						  </div>
                          <div class="form-group">
								{!!Form::label('email', 'Email', array('class' => 'form-control-label'))!!}
								{!!Form::email('email',null, ['placeholder' => 'Email', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
						  </div>
                          <div class="form-group">
								{!!Form::label('mobileno', 'Contact', array('class' => 'form-control-label'))!!}
								{!!Form::number('mobileno',null, ['placeholder' => 'Contact', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
						  </div>
					
                          <div class="form-group">
								{!!Form::label('sponsorid', 'Sponsor ID', array('class' => 'form-control-label'))!!}
								{!!Form::number('sponsorid',null, ['placeholder' => 'Sponsor ID', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
						  </div>

                          <div class="form-group">
								{!!Form::label('placementid', 'Placement ID', array('class' => 'form-control-label'))!!}
								{!!Form::number('placementid',null, ['placeholder' => 'Placement ID', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
						  </div>

                         <div class="form-group">
								{!!Form::label('activationcode', 'Activation Code', array('class' => 'form-control-label'))!!}
								{!!Form::number('activationcode',null, ['placeholder' => 'Activation Code', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
                          </div>
                          <br>
                                {!!Form::submit('Create Member', ['id' => 'addForm','class' => 'btn btn-primary  col-lg-3 offset-9']) !!}
                    {!! Form::close() !!}    
                        </div>
                 </div>
        </div>
    </div>
</div>
<<<<<<< HEAD
{!! Form::close() !!}    

=======
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
     $("#dataForm").submit(function (event) {
                 var x = confirm("Are you sure you want to add?");
                    if (x) {
                        return true;
                    }
                    else {
                        event.preventDefault();
                        return false;
                    }
                });
</script>
>>>>>>> 5fa32f54f191c541d6d17c2e86835c03a5b3d477
    
@endsection()