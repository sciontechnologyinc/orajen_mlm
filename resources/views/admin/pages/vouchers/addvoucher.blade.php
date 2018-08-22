@extends('admin.master.template')

@section('headerButton')
          <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                    <li class="nav-item active">
                    <a href="#" class="nav-link">Add Voucher</a>
                    </li>
                    <li class="nav-item">
                        <a href="vouchers" class="nav-link">Vouchers List</a>
                    </li>
            </ul>
@endsection

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
    <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Vouchers</h4>
                      <p class="card-description">
                        Add a Voucher
                      </p>
                      <form class="forms-sample">
                        <div class="form-group">
                          <label for="vouchercode">Code</label>
                          <input type="text" class="form-control" id="vouchercode" placeholder="">
                        </div>
                        <div class="form-group">
                        <label for="fromname">From Name</label>
                          <input type="text" class="form-control" id="fromname" placeholder="">
                        </div>
                        <div class="form-group">
                        <label for="toname">To Name</label>
                          <input type="text" class="form-control" id="toname" placeholder="">
                        </div>
                        <div class="form-group">
                        <label for="amount">Amount</label>
                          <input type="text" class="form-control" id="amount" placeholder="">
                        </div>
                        <div class="form-group">
                        <label for="status">Status</label>
                            <select class="form-control">
                              <option>Enable</option>
                              <option>Disable</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                      </form>
                    </div>
                  </div>
        </div>
    </div>
</div>
@endsection