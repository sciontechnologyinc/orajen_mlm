@extends('user.master.template')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        Ways of Earning
    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                50% DISCOUNT ON REPEAT PURCHASE
                </button>
            </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
            <b>CONSUMERS BENEFITS</b> <br><br>
            Regular customers will be benefit the 50% discount on every repeat purchase of products. <br><br>
            Get 10% to 30% discounts of other products on ORAJEN online store.
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                DIRECT REFERRAL INCENTIVES
                </button>
            </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
                Get unlimited 100 pesos everytime you refer to buy a product package worth 1,500.
                <div class="secondwoecontainer">
                    <img src="/images/secondwoe.jpg" alt="">
                </div>
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                GLOBAL POOL SHARING INCENTIVES
                </button>
            </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
                Budget Allocation (Php 210.00/Package) <br><br>
                Maximum Income (Php 4,900.00) per qualified account
                <div class="thirdwoecontainer">
                    <img src="/images/thirdwoe.jpg" alt="">
                </div>
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingFour">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                INFINITY PASS UP INCENTIVES
                </button>
            </h5>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
            <div class="card-body">
                <b>UNLIMITED 150 PESOS</b>
                    <div class="blue-label">UPLINE = 1 & 2</div>
                    <div class="red-label">You = 3, 4, 5, 6, 8, 9, 10, 11, 12, 13</div>
                    <div class="green-label">Product Voucher =5, 10, 15, 20</div>
                <div class="fourthwoecontainer">
                    <img src="/images/fourthwoe.jpg" alt="">
                </div>
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingFive">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                COMPANY REWARD SYSTEM
                </button>
            </h5>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
            <div class="card-body">
                <div class="fw-rewards"><b>Rewards</b></div><br>
                <ul>
                    <li>Gadget/Appliance Incentives (VIVO V9, Laptop, and TV LED 40 inches)</li>
                    <li>Cash Incentives (Php 200,000.00, Php 1,000,000.00)</li>
                    <li>Car Incentives Fully Paid</li>
                    <li>Group Travel Incentives in Hongkong</li>
                </ul>
                <div class="fifthwoecontainer">
                    <img src="/images/fifthwoe.jpg" alt="">
                </div>
                <div class="fw-whoarethey">
                    Who are they?
                </div>
                        <div class="fwwat-list">Coreleader? Stockist? Top Earner?</div>
                        <div class="fwwat-qualified">*THOSE WHO BUY THE 7 PACKAGE DISTRIBUTOR KIT ARE QUALIFIED TO JOIN THE COMPANY REWARD SYSTEM*
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection