<?php $__env->startSection('content'); ?>
<div class="main-panel">
    <div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Order History</h4>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>User</th>
                          <th>Product</th>
                          <th>Quantity</th>
                          <th>Sale</th>
                          <th>Status</th>
                          <th>Date Purchased</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Juan</td>
                          <td>Soap</td>
                          <td>5</td>
                          <td class="text-danger"> 28.76%
                            <i class="mdi mdi-arrow-down"></i>
                          </td>
                          <td>
                            <label class="badge badge-danger">Pending</label>
                          </td>
                          <td>12 May 2017</td>
                        </tr>
                        <tr>
                          <td>Juan</td>
                          <td>Supplement</td>
                          <td>8</td>
                          <td class="text-danger"> 21.06%
                            <i class="mdi mdi-arrow-down"></i>
                          </td>
                          <td>
                            <label class="badge badge-warning">In progress</label>
                          </td>
                          <td>12 June 2017</td>
                        </tr>
                        <tr>
                          <td>Juan</td>
                          <td>Medicine</td>
                          <td>23</td>
                          <td class="text-danger"> 35.00%
                            <i class="mdi mdi-arrow-down"></i>
                          </td>
                          <td>
                            <label class="badge badge-success">Completed</label>
                          </td>
                          <td>27 January 2017</td>
                        </tr>
                        <tr>
                          <td>Juan</td>
                          <td>Coffee</td>
                          <td>16</td>
                          <td class="text-success"> 82.00%
                            <i class="mdi mdi-arrow-up"></i>
                          </td>
                          <td>
                            <label class="badge badge-success">Completed</label>
                          </td>
                          <td>8 December 2017</td>
                        </tr>
                        <tr>
                          <td>Juan</td>
                          <td>Hot Chocolate</td>
                          <td>90</td>
                          <td class="text-success"> 98.05%
                            <i class="mdi mdi-arrow-up"></i>
                          </td>
                          <td>
                            <label class="badge badge-warning">In progress</label>
                          </td>
                          <td>2 October 2017</td>
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