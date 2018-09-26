@extends('admin.master.template')
@section('headerButton')
<ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
    <li class="nav-item active">
    <a href="{{ url('create') }}" class="nav-link">Add Member</a>
    </li>
    <li class="nav-item">
        <a href="{{ url('members') }}" class="nav-link">Generate Activation</a>
    </li>
</ul>
@endsection
@section('content')

   
     
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
 <div class="main-panel">
 {!! Form::open(['id' => 'dataForm', 'url' => '/members']) !!}
    <div class="content-wrapper">
         <div class="col-12">
                  <div class="card">
                    <div class="card-header"><strong>Create</strong><small> Member</small></div>
                    <div class="card-body">
                     

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
								{!!Form::label('memberemail', 'Email', array('class' => 'form-control-label'))!!}
								{!!Form::email('memberemail',null, ['placeholder' => 'Email', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
						  </div>
                          <div class="form-group">
								{!!Form::label('mobileno', 'Contact', array('class' => 'form-control-label'))!!}
								{!!Form::number('mobileno',null, ['placeholder' => 'Contact', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
						  </div>
					
                          <div class="form-group">
                                {!!Form::label('sponsorid', 'Sponsor', array('class' => 'form-control-label'))!!}
                                <select name="sponsorid" class="form-control">
                                    <option value="" disabled="true">Select a Sponsor</option>
                                    <option value="main">Main Account ({{auth()->user()->name}})</option>
                                    @foreach($members as $member)
                                        <option value="{{$member->id}}">{{$member->lastname}}, {{$member->firstname}} {{$member->middlename}}</option>
                                    @endforeach
                                </select>
						  </div>

                          <div class="form-group">
								{!!Form::label('placementid', 'Placement ID', array('class' => 'form-control-label'))!!}
								{!!Form::text('placementid',uniqid(), ['placeholder' => 'Placement ID', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
						  </div>

                         <div class="form-group">
								{!!Form::label('activationcode', 'Activation Code', array('class' => 'form-control-label'))!!}
								{!!Form::text('activationcode', null, ['placeholder' => 'Activation Code', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
                          </div>
                          <br>
                                {!!Form::submit('Create Member', ['id' => 'addForm','class' => 'btn btn-primary  col-lg-3 offset-9']) !!}
                    {!! Form::close() !!}    
                        </div>
                 </div>
        </div>
    </div>
</div>
{!! Form::close() !!}    

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