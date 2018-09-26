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
 <link rel="stylesheet" href="{!! ('/css/members.css') !!}">

   
     
 <div class="main-panel">
    <div class="content-wrapper">

         <div class="col-12">
                 <div class="card">
                    <div class="card-header"><strong>Create</strong><small> Member</small></div>
                      <div class="card-body card-block">
                        {!! Form::open(['id' => 'dataForm', 'method' => 'PATCH', 'url' => '/members/' . $member->id ]) !!}
                     

                        <div class="fullname-group">
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
                  
                    </div>
                          <div class="form-group">
								{!!Form::label('address', 'Address', array('class' => 'form-control-label'))!!}
								{!!Form::text('address',null, ['placeholder' => 'Address', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
						  </div>
                          <div class="form-group">
<<<<<<< HEAD
								{!!Form::label('memberemail', 'Email', array('class' => 'form-control-label'))!!}
								{!!Form::text('memberemail',$member->email, ['placeholder' => 'Email', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
=======
								{!!Form::label('email', 'Email', array('class' => 'form-control-label'))!!}
								{!!Form::text('email',null, ['placeholder' => 'Email', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
>>>>>>> a8662098407b17fbdbdb1cb92579e9beeb1937d1
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
    
@endsection()