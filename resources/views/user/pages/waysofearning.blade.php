@extends('user.master.template')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
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
                <div class="firstwoecontainer">
                    <img src="/images/firstwoe.jpg" alt="">
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
                <div class="secondwoecontainer">
                    <img src="/images/secondwoe.jpg" alt="">
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
                Budget Allocation (Php 210.00/Package) <br><br>
                Maximum Income (Php 4,900.00) per qualified account
                <div class="secondwoecontainer">
                    <img src="/images/secondwoe.jpg" alt="">
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
                Budget Allocation (Php 210.00/Package) <br><br>
                Maximum Income (Php 4,900.00) per qualified account
                <div class="secondwoecontainer">
                    <img src="/images/secondwoe.jpg" alt="">
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection