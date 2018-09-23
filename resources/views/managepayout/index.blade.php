@extends('user.master.template')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
    <div class="row">
      <div class="row col-lg-12">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 grid-margin stretch-card">
          <div class="card card-statistics">
            <div class="card-body">
              <h5>First Portion</h5>
              <div class="form-group form-inline">
                <label for="productVoucher" class="col-xl-4">product Voucher</label>
                <input type="text" class="form-control col-xl-8 col-sm-12" id="productVoucher" readonly>
              </div>

              <div class="form-group form-inline">
                <label for="productVoucher" class="col-xl-4">Direct Referral</label>
                <input type="text" class="form-control col-xl-8 col-sm-12" id="directReferral" readonly>
              </div>

              <div class="form-group form-inline">
                <label for="productVoucher" class="col-xl-4">Pass-up</label>
                <input type="text" class="form-control col-xl-8 col-sm-12" id="passUp" readonly>
              </div>

              <div class="form-group form-inline">
                <label for="productVoucher" class="col-xl-4">Global Pool</label>
                <input type="text" class="form-control col-xl-8 col-sm-12" id="globalPool" readonly>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 grid-margin stretch-card">
          <div class="card card-statistics">
            <div class="card-body">
              <h5>Second Portion</h5>
              <div class="form-group form-inline">
                <label for="productVoucher" class="col-xl-4">Net Income</label>
                <input type="text" class="form-control col-xl-8 col-sm-12" id="netIncome" readonly>
              </div>
             
              <div class="form-group form-inline">
                <label for="productVoucher" class="col-xl-4">Payout</label>
                <input type="text" class="form-control col-xl-8 col-sm-12" id="payout" readonly>
                <input type="hidden" class="form-control col-xl-8 col-sm-12" id="userno" value="{{ Auth::user()->id }}">
              </div>
            </div>
          </div>
        </div>
    </div>

      </div>
    </div>
  </div>

@endsection

@section('scripts')
<script>
    $(document).ready(function(){
           
    })
</script>
@endsection