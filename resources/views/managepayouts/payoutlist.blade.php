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
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 
@endsection