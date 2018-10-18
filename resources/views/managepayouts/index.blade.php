@extends('admin.master.template')
@section('headerButton')
<ul class="navbar-nav navbar-nav-left">
                    <li class="nav-item">
                    <a href="updatemember" class="nav-link">Update Member</a>
                    </li>
                    <li class="nav-item active">
                        <a href="managepayout" class="nav-link">Request Payout List</a>
                    </li>
            </ul>
@endsection

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
                    <select name="username"  class="form-control form-control col-xl-8 col-sm-12 name">
                            <option value="" disabled="true">Select a Sponsor</option>
                            <option value="main">Main Account ({{auth()->user()->name}})</option>
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
              </div>

              <div class="form-group form-inline">
                <label for="productVoucher" class="col-xl-2">Net Income</label>
                <input type="text" class="form-control col-xl-8 col-sm-12 netincome" id="netincome"> 
              </div>

              <div class="form-group form-inline">
                <label for="productVoucher" class="col-xl-2">Payout</label>
                <input type="text" class="form-control col-xl-8 col-sm-12 payout" id="payout">
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
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });


    $(document).ready(function(){
      $('.name').change(function() {
      var NameId = $('.name').val();
      console.log(NameId);
      $.ajax({
          headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          url: '/getname/' + NameId,
          dataType : 'json',
          type: 'POST',
          data: {},
          success:function(response) {
               $('.netincome').val(response.users[0].netincome);
               $('.payout').val(response.users[0].payout);
               console.log(response);
           
          }
     });
  });

        $('#saveIncome').click(function(){
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
    });
</script>
@endsection