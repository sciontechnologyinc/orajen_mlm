@extends('admin.master.template')
@section('headerButton')
          <ul class="navbar-nav navbar-nav-left">
                    <li class="nav-item active">
                    <a href="#" class="nav-link">Add About</a>
                    </li>
                    <li class="nav-item">
                        <a href="products" class="nav-link">About us List</a>
                    </li>
            </ul>
@endsection
@section('content')
<div class="main-panel">
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
 {!! Form::open(['id' => 'dataForm', 'url' => '/abouts', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="content-wrapper">
    <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Product</h4>
                      <p class="card-description">
                        Add a Product
                      </p>
                      <form class="forms-sample">
                        <div class="form-group">
                          {!!Form::label('phoneno', 'Phone No.', array('class' => 'form-control-label'))!!}
                          {!!Form::text('phoneno',null, ['placeholder' => '', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
                        </div>
                        <div class="form-group">
                          {!!Form::label('emailaddress', 'E-Mail Address', array('class' => 'form-control-label'))!!}
                          {!!Form::email('emailaddress',null, ['placeholder' => '', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
                        </div>
                        <div class="form-group">
                          {!!Form::label('location', 'Location', array('class' => 'form-control-label'))!!}
                          {!!Form::text('location',null, ['placeholder' => '', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
                        </div>

                        {!!Form::submit('Submit', ['id' => 'addForm','class' => 'btn btn-success mr-2']) !!}
                        <button class="btn btn-light">Cancel</button>
                      </form>
                    </div>
                  </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>
@endsection()

