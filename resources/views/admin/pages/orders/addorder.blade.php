@extends('admin.master.template')

@section('headerButton')
          <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                    <li class="nav-item active">
                    <a href="#" class="nav-link">Add Order</a>
                    </li>
                    <li class="nav-item">
                        <a href="orders" class="nav-link">Orders List</a>
                    </li>
            </ul>
@endsection

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
    <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Orders</h4>
                      <p class="card-description">
                        Add an Order
                      </p>
                      <form class="forms-sample">
                        <div class="form-group">
                          <label for="customer">Customer</label>
                          <input type="text" class="form-control" id="customer" placeholder="">
                        </div>
                        <div class="form-group">
                        <label for="firstname">First Name</label>
                          <input type="text" class="form-control" id="firstname" placeholder="">
                        </div>
                        <div class="form-group">
                        <label for="lastname">Last Name</label>
                          <input type="text" class="form-control" id="lastname" placeholder="">
                        </div>
                        <div class="form-group">
                        <label for="email">Email</label>
                          <input type="text" class="form-control" id="email" placeholder="">
                        </div>
                        <div class="form-group">
                        <label for="phoneno">Phone No.</label>
                          <input type="text" class="form-control" id="phoneno" placeholder="">
                        </div>
                        <div class="form-group">
                        <label for="orderdate">Order Date</label>
                          <input type="date" class="form-control"/>
                        </div>
                        <p class="card-description">
                        Products
                        </p>
                        <div class="form-group">
                        <label for="product">Product</label>
                          <input type="text" class="form-control" id="product" placeholder="">
                        </div>
                        <div class="form-group">
                        <label for="productquantity">Quantity</label>
                          <input type="text" class="form-control" id="productquantity" placeholder="">
                        </div>
                        <div class="form-group">
                        <label for="totalprice">Total Price</label>
                          <input type="text" class="form-control" id="totalprice" placeholder="">
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