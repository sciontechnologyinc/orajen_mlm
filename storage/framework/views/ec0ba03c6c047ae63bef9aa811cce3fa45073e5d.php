<?php $__env->startSection('headerButton'); ?>
<ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                    <li class="nav-item">
                    <a href="addreview" class="nav-link">Add Review</a>
                    </li>
                    <li class="nav-item active">
                        <a href="#" class="nav-link">Reviews List</a>
                    </li>
            </ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="main-panel">
    <div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Reviews List</h4>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            <input type="checkbox" name="deletereview"/>
                          </th>
                          <th>
                            Author
                          </th>
                          <th>
                            Product
                          </th>
                          <th>
                            Text
                          </th>
                          <th>
                            Date Added
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                          <input type="checkbox" name="deletereview"/>
                          </td>
                          <td>
                            Juan Dela Cruz
                          </td>
                          <td>
                            Product 1
                          </td>
                          <td>
                            Lorem ipsum
                          </td>
                          <td>
                            10/10/2018
                          </td>
                          <td>
                          <button type="button" class="btn btn-dark btn-fw">
                          <i class="mdi mdi-pencil-box-outline"></i>Edit</button>
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