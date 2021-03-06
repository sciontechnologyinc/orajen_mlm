<?php $__env->startSection('headerButton'); ?>
<ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                    <li class="nav-item">
                    <a href="addproduct" class="nav-link">Add Product</a>
                    </li>
                    <li class="nav-item active">
                        <a href="#" class="nav-link">Products List</a>
                    </li>
            </ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
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
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            20001
                          </td>
                          <td>
                            ORAJEN SOAP
                          </td>
                          <td>
                            <div class="product-img">
                                <img src="/images/default-product.png" alt="">
                            </div>
                          </td>
                          <td>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>
                          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>
                          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br>
                          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                          </td>
                          <td>
                            Php 500.00
                          </td>
                          <td>
                            Per Piece
                          </td>
                        </tr>
                        <tr>
                          <td>
                            20002
                          </td>
                          <td>
                            ORAJEN SUPPLEMENT
                          </td>
                          <td>
                            <div class="product-img">
                                <img src="/images/default-product.png" alt="">
                            </div>
                          </td>
                          <td>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>
                          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>
                          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br>
                          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                          </td>
                          <td>
                            Php 2,480.00
                          </td>
                          <td>
                            Per Container
                          </td>
                        </tr>
                        <tr>
                          <td>
                            20003
                          </td>
                          <td>
                            ORAJEN COLOGNES
                          </td>
                          <td>
                            <div class="product-img">
                                <img src="/images/default-product.png" alt="">
                            </div>
                          </td>
                          <td>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>
                          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>
                          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br>
                          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                          </td>
                          <td>
                            Php 380.00
                          </td>
                          <td>
                            Per Container
                          </td>
                        </tr>
                        <tr>
                          <td>
                            20004
                          </td>
                          <td>
                            ORAJEN COFFEE
                          </td>
                          <td>
                            <div class="product-img">
                                <img src="/images/default-product.png" alt="">
                            </div>
                          </td>
                          <td>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>
                          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>
                          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br>
                          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                          </td>
                          <td>
                            Php 480.00
                          </td>
                          <td>
                            Per Box
                          </td>
                        </tr>
                      
                     
                    
                      

                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>