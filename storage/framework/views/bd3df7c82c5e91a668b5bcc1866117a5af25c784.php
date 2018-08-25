<?php $__env->startSection('content'); ?>

<?php $__env->startSection('headerButton'); ?>
          <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                    <li class="nav-item active">
                        <a href="firstwoe" class="nav-link">Transactions</a>
                    </li>
                    <li class="nav-item">
                        <a href="firstwoehw" class="nav-link">How it works</a>
                    </li>
            </ul>
<?php $__env->stopSection(); ?>
<div class="main-panel">
    <div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Products Purchased</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Product Name</th>
                          <th>Product No.</th>
                          <th>Date Purchased</th>
                          <th>Discount</th>
                          <th>Discounted Amount</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Product 1</td>
                          <td>53275531</td>
                          <td>12 May 2017</td>
                          <td class="text-danger"> 50.00%
                          </td>
                          <td>20,000</td>
                        </tr>
                        <tr>
                          <td>Product 2</td>
                          <td>53275532</td>
                          <td>15 May 2017</td>
                          <td class="text-danger"> 50.00%
                          </td>
                          <td>15,000</td>
                        </tr>
                        <tr>
                          <td>Product 3</td>
                          <td>53275533</td>
                          <td>14 May 2017</td>
                          <td class="text-danger"> 50.00%
                          </td>
                          <td>10,000</td>
                        </tr>
                        <tr>
                          <td>Product 4</td>
                          <td>53275534</td>
                          <td>16 May 2017</td>
                          <td class="text-danger"> 50.00%
                          </td>
                          <td>80,000</td>
                        </tr>
                        <tr>
                          <td>Product 5</td>
                          <td>53275535</td>
                          <td>20 May 2017</td>
                          <td class="text-danger"> 50.00%
                          </td>
                          <td>30,000</td>
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
<?php echo $__env->make('user.master.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>