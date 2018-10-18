@extends('user.master.template')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
          <div class="card card-statistics">
            <div class="card-body">
              <div class="clearfix">
                <div class="float-left">
                  <i class="mdi mdi-cube text-danger icon-lg"></i>
                </div>
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

        {!! Form::open(['id' => 'dataForm', 'url' => '/home', 'method' => 'POST']) !!}
                <div class="float-right">
                  <p class="mb-0 text-right">Total Earnings</p>
                  <div class="fluid-container">
                    <h3 class="font-weight-medium text-right mb-0">P <span class="income"></span></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
          <div class="card card-statistics">
            <div class="card-body">
              <div class="clearfix">
                <div class="float-left">
                  <i class="mdi mdi-receipt text-warning icon-lg"></i>
                </div>
                <div class="float-right">
                  <p class="mb-0 text-right">Purchased Products</p>
                  <div class="fluid-container">
                    <h3 class="font-weight-medium text-right mb-0"><span class="account"></span></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
          <div class="card card-statistics">
            <div class="card-body">
              <div class="clearfix">
                <div class="float-left">
                  <i class="mdi mdi-poll-box text-success icon-lg"></i>
                </div>
                <div class="float-right">
                  <p class="mb-0 text-right">No. Of Accounts</p>
                  <div class="fluid-container">
                    <h3 class="font-weight-medium text-right mb-0"><span class="account"></span></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
          <div class="card card-statistics">
            <div class="card-body">
              <div class="clearfix">
                <div class="float-left">
                  <i class="mdi mdi-account-location text-info icon-lg"></i>
                </div>
                <div class="float-right">
                  <p class="mb-0 text-right">No. Of Referrals</p>
                  <div class="fluid-container">
                    <h3 class="font-weight-medium text-right mb-0"><span class="sponsor"></span></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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
                {!!Form::text('netincome',Auth::user()->netincome, ['placeholder' => '', 'class' => 'form-control col-xl-8 col-sm-12', 'id' => 'netIncome', 'readonly'])!!}
              </div>
             
              <div class="form-group form-inline">
                <label for="productVoucher" class="col-xl-4">Payout</label>
                {!!Form::text('payout',Auth::user()->payout, ['placeholder' => '', 'class' => 'form-control col-xl-8 col-sm-12', 'id' => 'payout', 'readonly'])!!}
                <input type="hidden" class="form-control col-xl-8 col-sm-12" id="userno" value="{{ Auth::user()->id }}">
              </div class="form-group form-inline">
              {!!Form::submit('Request Payout', ['id' => 'requestPayout','class' => 'btn btn-primary form-control col-xl-6 col-sm-6']) !!}
              <div>


              </div>
            </div>
          </div>
        </div>
    </div>

      </div>
    </div>
  </div>
  {!! Form::close() !!}
@endsection

@section('scripts')
<script>

    $(document).ready(function(){
            $.get('/dashboard/'+$('#userno').val(), function(response)
                {
                  var data = response.summary[0];
                  var data2 = response.sponsor[0];
                  $('.income').append(data.income);
                  $('.account').append(data.account);
                  $('.sponsor').val(data2.sponsor);
                  $('#netIncome').val(data2.netincome);
                  $('#payout').val(data2.payout);
                  $('#productVoucher').val(data.voucher);
                  $('#directReferral').val(data.directreferral);
                  $('#passUp').val(data.passup);
                  $('#globalPool').val(data.globalpool);
                }, 'json');
                
          $('#requestPayout').click(function(){
            var payout = $('#payout').val();
            if (confirm('Are you sure you want to request Payout ? Amount: P'+ payout)) {
              $.ajax({
          headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          url:'/getname/'+$('#userno').val(),
          type:'POST',
          data:{},
          success:function(data){
         console.log(data);
              var gcash = data.users[0].gcashnumber;
              var name = data.users[0].name;
              var payout= $('#payout').val();
              var fullDate = new Date();
              var twoDigitMonth = ((fullDate.getMonth().length+1) === 1)? (fullDate.getMonth()+1) :(fullDate.getMonth()+1);
              var currentDate = fullDate.getDate() + "/" + twoDigitMonth + "/" + fullDate.getFullYear();
               $.ajax({
                headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
                 url:'/insertpayout',
                 type:'POST',
                 data:{
                        name:name,
                        payout:payout,
                        gcashnumber:gcash,
                        netincome:'123',
                        date:currentDate,
                 },
                 success:function(data){

                 }
               })
          }
        })
                  // Save it!
              } else {
                  // Do nothing!
              }
          })
    })
</script>
@endsection