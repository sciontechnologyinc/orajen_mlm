@extends('user.master.template')

@section('content')


<div class="main-panel">
    <div class="content-wrapper">
    <div class="col-12">
                  <div class="card">
                    <div class="card-body">
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
                      <h4 class="card-title">Personal Settings</h4>
                      <p class="card-description">
                        Update personal settings
                      </p>
                      <form class="form-horizontal" method="POST" action="{{ route('changePassword') }}" enctype="multipart/form-data">
                      {!! csrf_field() !!}
                        <div class="form-group">
                          <label for="categoryname">Name</label>
                          {!!Form::text('name',Auth::user()->name, ['placeholder' => 'Name', 'class' => 'form-control' ])!!}
                        </div>
                        <div class="form-group">
                        <label for="categorydesc">E-mail Address</label>
                        {!!Form::email('email',Auth::user()->email, ['placeholder' => 'Email-Address', 'class' => 'form-control' ])!!}
                        </div>
                        <div class="form-group">
                        <label for="categorydesc">G-Cash #</label>
                        {!!Form::text('gcashnumber',Auth::user()->gcashnumber, ['placeholder' => 'G-Cash #', 'class' => 'form-control' ])!!}
                        </div>
                        <div class="form-group">
                        <label for="categorydesc">Profile Picture</label><br>
                        <input id="phto" name="photo"  class="photo" type="file" accept="image/x-png,image/gif,image/jpeg" value="{{Auth::user()->photo}}">
                        </div>


                        <div class="form-group">
                        <label for="categorydesc">Current password</label>
                        <input id="current-password" type="password" placeholder="Current Password" class="form-control" name="current-password" required>
                                    @if ($errors->has('current-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                                    @endif
                        </div>
                        <div class="form-group">
                        <label for="categorydesc">Set new password</label>
                        <input id="new-password" type="password" placeholder="New Password" class="form-control" name="new-password" required>
 
                                    @if ($errors->has('new-password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('new-password') }}</strong>
                                        </span>
                                    @endif
                        </div>
                        <div class="form-group">
                        <label for="categorydesc">Confirm new password</label>
                        <input id="new-password-confirm" type="password" placeholder="Confirm new password" class="form-control" name="new-password_confirmation" required>
                        </div>


                        <button type="submit" class="btn btn-success mr-2">Update Account </button>
                      </form>
                    </div>
                  </div>
        </div>
    </div>
</div>
@endsection