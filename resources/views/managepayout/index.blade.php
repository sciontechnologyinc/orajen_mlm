@extends('admin.master.template')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
    <div class="row">
      <div class="row col-lg-12">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 grid-margin stretch-card">
          <div class="card card-statistics">
            <div class="card-body">
              <h5>Manage Payout</h5>
              <div class="form-group">
                   
              </div>

              <div class="form-group form-inline">
                    <label for="productVoucher" class="col-xl-2">Member</label>
                    <select name="username" class="form-control form-control col-xl-8 col-sm-12">
                            <option value="" disabled="true">Select a Sponsor</option>
                            <option value="main">Main Account ({{auth()->user()->name}})</option>
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
              </div>

              <div class="form-group form-inline">
                <label for="productVoucher" class="col-xl-2">Net Income</label>
                <input type="text" class="form-control col-xl-8 col-sm-12" id="netincome"> 
              </div>

              <div class="form-group form-inline">
                <label for="productVoucher" class="col-xl-2">Payout</label>
                <input type="text" class="form-control col-xl-8 col-sm-12" id="payout">
              </div>

              <button class="btn-primary" class="saveIncome" id="saveIncome">Update Member</button>
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
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    $(document).ready(function(){
        $('[name="username"]').change(function(){
            $.ajax({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: '/users/'+$('[name="username"]').val(),
                    dataType : 'json',
                    type: 'POST',
                    data: {},
                    contentType: false,
                    processData: false,
                    success:function(response) {
                        $('#netincome').val(response.username[0].netincome);
                        $('#payout').val(response.username[0].payout);
                    }
                });
            });

        $('#saveIncome').click(function(){
            console.log('jetro macalipay');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                url: 'updateusers/'+$('[name="username"]').val(),
                method:"POST",  
                data:{
                    netincome: $('#netincome').val(),
                    payout: $('#payout').val()
                },                              
                success: function( data ) {
                    alert('Successfully Updated !')
                }
            });
        })
    })
</script>
@endsection