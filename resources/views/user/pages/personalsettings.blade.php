@extends('user.master.template')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <p class="module-title">Personal Settings</p>
        <div class="personalsettings-container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 grid-margin personalsettings">New Username :</div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 grid-margin"><input type="text" placeholder="New Username"></div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 grid-margin personalsettings">New Password :</div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 grid-margin"><input type="password" placeholder="New Password"></div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 grid-margin personalsettings">Confirm Password :</div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 grid-margin"><input type="password" placeholder="Confirm Password"></div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 grid-margin"></div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 grid-margin savechanges">
                <button type="button" class="btn btn-secondary btn-fw savechanges">
                          <i class="mdi mdi-file-document"></i>Save Changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection