@extends('user.master.template')

@section('content')
@section('headerButton')
          <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                    <li class="nav-item">
                        <a href="fifthwoe" class="nav-link">Transactions</a>
                    </li>
                    <li class="nav-item active">
                        <a href="fifthwoehw" class="nav-link">How it works</a>
                    </li>
            </ul>
@endsection
<div class="main-panel">
    <div class="content-wrapper">
        <div class="fifthwoe-title">COMPANY REWARD SYSTEM</div>
        <div class="fw-rewards"><b>Rewards</b></div><br>
                <ul>
                    <li>Gadget/Appliance Incentives (VIVO V9, Laptop, and TV LED 40 inches)</li>
                    <li>Cash Incentives (Php 200,000.00, Php 1,000,000.00)</li>
                    <li>Car Incentives Fully Paid</li>
                    <li>Group Travel Incentives in Hongkong</li>
                </ul>
                <div class="fifthwoecontainer">
                    <img src="/images/fifthwoe.png" alt="">
                </div>
                <div class="fw-whoarethey">
                    Who are they?
                </div>
                        <div class="fwwat-list">Coreleader? Stockist? Top Earner?</div>
                        <div class="fwwat-qualified">*THOSE WHO BUY THE 7 PACKAGE DISTRIBUTOR KIT ARE QUALIFIED TO JOIN THE COMPANY REWARD SYSTEM*
                    </div>
    </div>
</div>
@endsection