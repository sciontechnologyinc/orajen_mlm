@extends('user.master.template')

@section('content')

@section('headerButton')
          <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                    <li class="nav-item active">
                        <a href="thirdwoe" class="nav-link">Transactions</a>
                    </li>
                    <li class="nav-item">
                        <a href="thirdwoehw" class="nav-link">How it works</a>
                    </li>
            </ul>
@endsection
<div class="main-panel">
    <div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Global Pool Sharing Incentives</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Date</th>
                          <th>Percent Share</th>
                          <th>Amount</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>2018-001-0029</td>
                          <td class="text-success"> 1.00%</td>
                          <td>270</td>
                        </tr>
                        <tr>
                          <td>2018-001-0032</td>
                          <td class="text-success"> 2.00%</td>
                          <td>5540</td>
                        </tr>
                        <tr>
                          <td>2018-001-0044</td>
                          <td class="text-success"> 1.00%</td>
                          <td>1005</td>
                        </tr>
                        <tr>
                          <td>2018-001-0014</td>
                          <td class="text-success"> 1.00%</td>
                          <td>389</td>
                        </tr>
                        <tr>
                          <td>2018-001-0055</td>
                          <td class="text-success"> 2.00%</td>
                          <td>400</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
    </div>
</div>
@endsection