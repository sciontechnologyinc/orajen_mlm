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

    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">ORAJEN Products</h4>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> #</th>
                          <th> Name </th>
                          <th>G-Cash</th>
                          <th>Net Income</th>
                          <th>Pay Out</th>
                          <th>Date</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($payouts as $index => $payout)
                        <tr>
                          <td>{{$index +1}}</td>
                          <td>{{$payout->name}}</td>
                          <td>{{$payout->gcashnumber}}</td>
                          <td>{{$payout->netincome}}</td>
                          <td>{{$payout->payout}}</td>
                          <td>{{$payout->date}}</td>
                          <td>{{$payout->status}}</td>
                          <td><a id="{{$payout->id}}" class="approve"><i class="fas fa-check" style="color:green"></i></a></td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>
    </div>
</div>
@endsection

<<<<<<< HEAD
@section('scripts')
<script>
  $(document).ready(function(){
    $('.approve').click(function(){
      if (confirm('Transaction Done ?')) {
        var payoutid = this.id;
                  $.ajax({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: 'approved/'+this.id,
                    method:"POST",
                    data:{
                            status:'Done'
                        },
                        success: function(data)
                        {
                          
                        }
                    });
        }else{
  
        }
     })
  })
</script>
=======

<!-- Modal -->                                   
                                                {!! Form::open(['id' => 'dataForm', 'method' => 'PATCH', 'url' => '/managepayouts/' . $payout->id ]) !!}
                                                @if($payout->status == 'Pending')
                                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                                <div class="modal-dialog modal-sm" role="document">
                                                <div class="modal-content">
                                                <div class="row">
                                                <div class="col-sm-12 text-center">
                                                <section class="panel">
                                                <h2 class="panel-heading">
                                                <center class="text-danger">Manage Payout!!</center>
                                                </h2>


                                                {!!Form::submit('Approve Payout', ['class' => 'btn btn-primary btn-return  col-lg-14']) !!}
                                                
                                                @elseif($payout->status == 'Approved')
                                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                                <div class="modal-dialog modal-sm" role="document">
                                                <div class="modal-content">
                                                <div class="row">
                                                <div class="col-sm-12 text-center">
                                                
                                                <section class="panel">
                                                <h2 class="panel-heading">
                                                <center class="text-danger">Manage Payout!!</center>
                                                </h2>
                                                {!!Form::submit('Change to Pending', ['class' => 'btn btn-primary btn-return  col-lg-14']) !!}
                                                @else
         
                                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                                <div class="modal-dialog modal-sm" role="document">
                                                <div class="modal-content">
                                                <div class="row">
                                                <div class="col-sm-12 text-center">
                                                <section class="panel">
                                                <h2 class="panel-heading">
                                                <center class="text-danger">Manage Payout!!</center>
                                                </h2>
                                                @endif

                                                        <div class="panel-body">
                                                        @if($payout->status == 'Pending')
                                                        <input type="hidden" name="status" id="status" class="status" value="Approved">
                                                        @elseif($payout->status == 'Approved')
                                                        <input type="hidden" name="status" id="status" class="status" value="Approved">
                                                        @else
                                                        <input type="hidden" name="status" id="status" class="status" value="Approved">
                                                        @endif
    
                                                         {!! Form::close() !!}                                                  
                                                        </div>
                                                    </section>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
 
>>>>>>> 5dac99384042e119a616f58bf35f5bec94168ba1
@endsection