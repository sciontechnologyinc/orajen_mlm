<?php $__env->startSection('content'); ?>

<?php $__env->startSection('headerButton'); ?>
          <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                    <li class="nav-item active">
                        <a href="secondwoe" class="nav-link">Transactions</a>
                    </li>
                    <li class="nav-item">
                        <a href="secondwoehw" class="nav-link">How it works</a>
                    </li>
            </ul>
<?php $__env->stopSection(); ?>
<div class="main-panel">
    <div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Direct Referral Incentives</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Member ID</th>
                          <th>Member Name</th>
                          <th>Amount</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>2018-001-0029</td>
                          <td>Mary Cruz</td>
                          <td>100</td>
                        </tr>
                        <tr>
                          <td>2018-001-0032</td>
                          <td>Mark Ponce</td>
                          <td>100</td>
                        </tr>
                        <tr>
                          <td>2018-001-0044</td>
                          <td>Joel Pedro</td>
                          <td>100</td>
                        </tr>
                        <tr>
                          <td>2018-001-0014</td>
                          <td>Christopher Payao</td>
                          <td>100</td>
                        </tr>
                        <tr>
                          <td>2018-001-0055</td>
                          <td>Eunice Padilla</td>
                          <td>100</td>
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