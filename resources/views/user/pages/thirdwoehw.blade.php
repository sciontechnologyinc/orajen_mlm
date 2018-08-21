@extends('user.master.template')

@section('content')

@section('headerButton')
          <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                    <li class="nav-item">
                        <a href="thirdwoe" class="nav-link">Transactions</a>
                    </li>
                    <li class="nav-item active">
                        <a href="thirdwoehw" class="nav-link">How it works</a>
                    </li>
            </ul>
@endsection
<div class="main-panel">
    <div class="content-wrapper">
        <div class="thirdwoe-title">GLOBAL POOL SHARING INCENTIVES</div>
                Budget Allocation (Php 210.00/Package) <br><br>
                Maximum Income (Php 4,900.00) per qualified account
                <div class="thirdwoecontainer">
                    <img src="/images/thirdwoe.png" alt="">
                </div>
    </div>
</div>
@endsection