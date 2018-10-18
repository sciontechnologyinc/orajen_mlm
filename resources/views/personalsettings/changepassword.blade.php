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
                      <h4 class="card-title">Change Password</h4>
                      <p class="card-description">
                        Update password
                      </p>
                      <form class="form-horizontal" method="POST" action="{{ route('changePassword') }}" enctype="multipart/form-data">
                      {!! csrf_field() !!}
                    

                        <div class="form-group">
                        <label for="categorydesc">Current password</label>
                        <input id="current-password" type="password" placeholder="Current Password" class="form-control" name="current-password">
                                    @if ($errors->has('current-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                                    @endif
                        </div>
                        <div class="form-group">
                        <label for="categorydesc">Set new password</label>
                        <input id="new-password" type="password" placeholder="New Password" class="form-control" name="new-password">
 
                                    @if ($errors->has('new-password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('new-password') }}</strong>
                                        </span>
                                    @endif
                        </div>
                        <div class="form-group">
                        <label for="categorydesc">Confirm new password</label>
                        <input id="new-password-confirm" type="password" placeholder="Confirm new password" class="form-control" name="new-password_confirmation">
                        </div>


                        <button type="submit" class="btn btn-success mr-2">Update Account </button>
                      </form>
                    </div>
                  </div>
        </div>
    </div>
</div>
@endsection