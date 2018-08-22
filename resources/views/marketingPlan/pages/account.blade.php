@extends('marketingPlan.master.dashboard')

    @section('header')
        @include('marketingPlan.partial.headerPage')
    @endsection

    @section('content')
        <div class='account-page'>
            <div class='account-content'>
                <h1>Member</h1>
                <div class='acount-details'>
                    <account></account>
                </div>
            </div>
        </div>
    @endsection