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
 <link rel="stylesheet" href="{!! ('/css/members.css') !!}">

   
     
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
				
                         <div class="middlename">
								{!!Form::label('middlename', 'Middle Name', array('class' => 'form-control-label'))!!}
								{!!Form::text('middlename',null, ['placeholder' => 'Middle Name', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
						 </div>

                           <div class="lastname">
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
                                                      
                        </div>
                 </div>
        </div>
    </div>
</div>
{!! Form::close() !!}    

    
@endsection()