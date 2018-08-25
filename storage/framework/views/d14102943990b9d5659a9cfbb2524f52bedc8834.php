<?php $__env->startSection('content'); ?>
<div class="main-panel">
    <div class="content-wrapper">
    <div class="col-md-6 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">View User Settings</h4>
                      <p class="card-description">
                      Account Settings
                      </p>
                      <form class="forms-sample">
                      <div class="form-group">
                        <label>Email address : </label>
                        <label for="Email">juandelacruz@gmail.com</label>
                      </div>
                      <div class="form-group">
                        <label>Username : </label>
                        <label for="Username">juandelacruz</label>
                      </div>
                      <div class="form-group">
                        <label>Password : </label>
                        <label for="Password">12345678</label>
                      </div>
                      <p class="card-description">
                      User Information
                      </p>
                      <div class="form-group">
                        <label>First Name : </label>
                        <label for="Firstname">Juan</label>
                      </div>
                      <div class="form-group">
                        <label>Middle Name : </label>
                        <label for="Middlename">Reyes</label>
                      </div>
                      <div class="form-group">
                        <label>Last Name : </label>
                        <label for="Lastname">Dela Cruz</label>
                      </div>
                      <div class="form-group">
                        <label>Address : </label>
                        <label for="Address">Novaliches, Quezon City Philippines</label>
                      </div>
                      <div class="form-group">
                        <label>Mobile No. : </label>
                        <label for="Mobileno">09123457899</label>
                      </div>
                      <div class="form-group">
                        <label>Placement ID : </label>
                        <label for="Placementid">2018-001-0001</label>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.master.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>