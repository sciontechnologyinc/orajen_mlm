@extends('admin.master.template')
@section('headerButton')
<ul class="navbar-nav navbar-nav-left">
                    <li class="nav-item">
                    <a href="addinfo" class="nav-link">Add Company Info</a>
                    </li>
                    <li class="nav-item active">
                        <a href="#" class="nav-link">Company Info List</a>
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
                            Company Background
                          </th>
                          <th>
                            Mission
                          </th>
                          <th>
                            Vision
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($abouts as $index => $about)
                        <tr>
                          <td>
                            {{$index +1}}
                          </td>
                          <td>
                          {{$about->companybackground}}                            
                          </td>
                          <td>
                          {{$about->mission}}                            
                          </td>
                          <td>
                          {{$about->vision}}                            
                          </td>
                          <td>
                          <div class="form-group" style="display:inline-flex">
                          <a rel="tooltip" title="Edit" class="edit-btn" href="companyinformations/{!! $about->id !!}/edit">Edit</a>
                          {!! Form::open(['id' => 'deleteForm', 'method' => 'DELETE', 'url' => '/companyinformations/' . $about->id]) !!}
                          {{ Form::button('Delete', ['type' => 'submit', 'class' => 'delete-btn', 'rel' => 'tooltip', 'title' => 'Delete'] )  }}
                          {!! Form::close() !!}
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
@endsection