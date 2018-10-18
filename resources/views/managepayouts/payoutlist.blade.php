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

    <!-- <div class="um-img">
    <img src="/images/undermaintenance-img.png" alt="">
    </div>

   <div class="um-img">PAGE UNDER CONSTRUCTION</div>


    <div class="company-logo"><img src="/img/logo.png" alt=""></div>
    <div class="page-desc">Our website is coming soon. </div>
    <div class="page-desc1">"This page will show, create, edit and delete products."</div> -->
    
    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">ORAJEN Products</h4>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Name
                          </th>
                          <th>
                            G-Cash
                          </th>
                          <th>
                            Net Income
                          </th>
                          <th>
                            Pay Out
                          </th>
                          <th>
                            Date
                          </th>
                          <th>
                            Status
                          </th>
                          <th>
                          Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($payouts as $index => $payout)
                        <tr>
                          <td>
                          {{$index +1}}
                          </td>

                          <td>
                          {{$payout->name}}
                          </td>

                          <td>
                          {{$payout->gcashnumber}}
                          </td>

                          <td>
                          {{$payout->netincome}}
                          </td>

                          <td>
                          {{$payout->payout}}
                          </td>
                          <td>
                          Date
                          </td>
                          <td class="numeric text-center" id="status" data-title="Status">
                                    @if($payout->status == 'Pending')
                                    <span class="fa fa-times text-danger">&nbsp;<strong>{{ $payout->status }}</strong></span>   &nbsp;
                                    @elseif($payout->status == 'Returned')
                                    <span class="fa fa-check text-success">&nbsp;<strong>{{ $payout->status }}</strong></span>  &nbsp;
                                    @else   
                                    <span class="fa fa-check text-success">&nbsp;<strong>{{ $payout->status }}</strong> </span>
                                    @endif
                          </td>
                          <td>
                          <div class="btn-group">
                          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Manage Payout</button>
                          </button>
                          </div>
                          </td>

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
                                                        <input type="text" name="status" id="status" class="status" value="Approved">
                                                        @elseif($payout->status == 'Approved')
                                                        <input type="text" name="status" id="status" class="status" value="Approved">
                                                        @else
                                                        <input type="text" name="status" id="status" class="status" value="Approved">
                                                        @endif
    
                                                         {!! Form::close() !!}                                                  
                                                        </div>
                                                    </section>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
 
@endsection