@extends('admin.master.template')
@section('headerButton')
          <ul class="navbar-nav navbar-nav-left">
                    <li class="nav-item active">
                    <a href="#" class="nav-link">Add Company Info</a>
                    </li>
                    <li class="nav-item">
                        <a href="informations" class="nav-link">Company Info List</a>
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
 {!! Form::open(['id' => 'dataForm', 'url' => '/companyinformations', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="content-wrapper">
    <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Product</h4>
                      <p class="card-description">
                        Add a Company Info
                      </p>
                      <form class="forms-sample">
                        <div class="form-group">
                          {!!Form::label('companybackground', 'Company Background', array('class' => 'form-control-label'))!!}
                          {!!Form::text('companybackground',null, ['placeholder' => '', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
                        </div>
                        <div class="form-group">
                          {!!Form::label('mission', 'Mission', array('class' => 'form-control-label'))!!}
                          {!!Form::text('mission',null, ['placeholder' => '', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
                        </div>
                        <div class="form-group">
                          {!!Form::label('vision', 'Vision', array('class' => 'form-control-label'))!!}
                          {!!Form::text('vision',null, ['placeholder' => '', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
                        </div>
                        {!!Form::submit('Submit', ['id' => 'addForm','class' => 'btn btn-success mr-2']) !!}
                        <button class="btn btn-light">Cancel</button>
                      </form>
                    </div>
                  </div>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
        </div>
    </div>
    {!! Form::close() !!}
</div>

@endsection()

