@extends('admin.master.template')
@section('headerButton')
<ul class="navbar-nav navbar-nav-left">
                    <li class="nav-item">
                    <a href="addproduct" class="nav-link">Add Product</a>
                    </li>
                    <li class="nav-item active">
                        <a href="#" class="nav-link">Products List</a>
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
                            Product #
                          </th>
                          <th>
                            Product Name
                          </th>
                          <th>
                            Product Image
                          </th>
                          <th>
                            Product Details
                          </th>
                          <th>
                            Value
                          </th>
                          <th>
                            Serving
                          </th>
                          <th>
                          Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($products as $index => $product)
                        <tr>
                          <td>
                            {{$product->productcode}}
                          </td>
                          <td>
                            {{$product->productname}}
                          </td>
                          <td>
                            <div class="product-img">
                                <img src="{{asset('storage/uploads/'.$product->photo)}}" alt="">
                            </div>
                          </td>
                          <td>
                          {{$product->productdetails}}
                          </td>
                          <td>
                          {{$product->value}}
                          </td>
                          <td>
                          {{$product->serving}}                          
                          </td>
                          <td>
                          <div class="form-group" style="display:inline-flex">
                          <a rel="tooltip" title="Edit" class="btn btn-success btn-sm mr-1" href="products/{!! $product->id !!}/edit"><i class="fa fa-edit"></i></a>
                          {!! Form::open(['id' => 'deleteForm', 'method' => 'DELETE', 'url' => '/products/' . $product->id]) !!}
                          {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'rel' => 'tooltip', 'title' => 'Delete'] )  }}
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