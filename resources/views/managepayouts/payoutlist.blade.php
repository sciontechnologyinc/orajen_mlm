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
                          <td>
                          Pending
                          </td>
 
                          <td class="numeric text-right" data-title="Action">
                                    @if($payout->status == 'Pending')
                                    <a data-toggle="modal"  data-target="#{{$payout->id}}" class="btn btn-xs btn-info btn-returned"><span class="text-success fa fa-check" title="Make action"></span></a>
                                    @elseif($payout->status == 'Returned')
                                    <a data-toggle="modal"  data-target="#{{$payout->id}}" class="btn btn-xs btn-info btn-returned"><span class="text-danger fa fa-times" title="Make action"></span></a>&nbsp;
                                    @else   
                                    <a data-toggle="modal"  data-target="#{{$payout->id}}" class="btn btn-xs btn-info btn-returned"><span class="text-success fa fa-check" title="Make action"></span></a>&nbsp;
                                    @endif
                                    </td>
                                                                                    
                                        <!-- Small modal -->
                                                @if($payout->status == 'Pending')
                                                <div class="modal fade" id="{{$payout->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                                <div class="modal-dialog modal-sm" role="document">
                                                <div class="modal-content">
                                                <div class="row">
                                                <div class="col-sm-12 text-center">
                                                <section class="panel">
                                                <h2 class="panel-heading">
                                                <center class="text-danger">Click below button if only the book is returned! Not otherwise!!</center>
                                                </h2>


                                                {!!Form::submit('Approve Payout', ['class' => 'btn btn-primary btn-return  col-lg-14']) !!}

                                                @elseif($payout->status == 'Returned')
                                                <div class="modal fade" id="{{$payout->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                                <div class="modal-dialog modal-sm" role="document">
                                                <div class="modal-content">
                                                <div class="row">
                                                <div class="col-sm-12 text-center">
                                                
                                                <section class="panel">
                                                <h2 class="panel-heading">
                                                <center class="text-danger">Click below button if you want to change the book to pending! Not otherwise!!</center>
                                                </h2>

                                                {!!Form::submit('Approve Payout', ['class' => 'btn btn-primary btn-return  col-lg-14']) !!}
                                                @endif

                                                <div class="modal fade" id="{{$payout->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                                <div class="modal-dialog modal-sm" role="document">
                                                <div class="modal-content">
                                                <div class="row">
                                                <div class="col-sm-12 text-center">
                                                <section class="panel">
                                                <h2 class="panel-heading">
                                                <center class="text-danger">Click below button if only the book is returned! Not otherwise!!</center>
                                                </h2>

                                               {!! Form::close() !!}  
                                               </div>
                                                    </section>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                  <td>    
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