@extends('admin.master.template')
@section('headerButton')
          <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                    <li class="nav-item active">
                    <a href="#" class="nav-link">Add Product</a>
                    </li>
                    <li class="nav-item">
                        <a href="products" class="nav-link">Products List</a>
                    </li>
            </ul>
@endsection
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
    <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Product</h4>
                      <p class="card-description">
                        Add a Product
                      </p>
                      <form class="forms-sample">
                        <div class="form-group">
                          <label for="productname">Product Name</label>
                          <input type="text" class="form-control" id="reviewauthor" placeholder="">
                        </div>
                        <div class="form-group">
                          <label for="productdetails">Product Details</label>
                          <input type="text" class="form-control" id="productdetails" placeholder="">
                        </div>
                        <div class="form-group">
                        <label for="value">Value</label>
                          <input type="text" class="form-control" id="value" placeholder="">
                        </div>
                        <div class="form-group">
                        <label for="serving">Serving</label>
                          <input type="text" class="form-control" id="serving" placeholder="">
                        </div>
                        <div class="form-group">
                          <label>Product Image</label>
                          <input type="file" name="img[]" class="file-upload-default">
                          <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                            <span class="input-group-append">
                              <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                            </span>
                          </div>
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