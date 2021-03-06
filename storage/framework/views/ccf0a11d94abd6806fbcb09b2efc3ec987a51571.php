<?php $__env->startSection('content'); ?>
<div class="main-panel">
    <div class="content-wrapper">
    <div class="col-md-6 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Personal Settings</h4>
                        <p class="card-description">
                        Account Information
                        </p>
                        <form class="forms-sample">
                        <div class="form-group">
                          <label>Email address</label>
                          <input type="email" class="form-control" id="emailaddress" readonly>
                        </div>
                        <div class="form-group">
                          <label>Username</label>
                          <input type="text" class="form-control" id="username" readonly>
                        </div>
                        <div class="form-group">
                          <label>Password</label>
                          <input type="password" class="form-control" id="password" readonly>
                        </div>
                        <p class="card-description">
                        Personal Information
                        </p>
                        <div class="form-group">
                          <label>First Name</label>
                          <input type="text" class="form-control" id="firstname" readonly>
                        </div>
                        <div class="form-group">
                          <label>Middle Name</label>
                          <input type="text" class="form-control" id="middlename" readonly>
                        </div>
                        <div class="form-group">
                          <label>Last Name</label>
                          <input type="text" class="form-control" id="lastname" readonly>
                        </div>
                        <div class="form-group">
                          <label>Address</label>
                          <input type="text" class="form-control" id="address" readonly>
                        </div>
                        <div class="form-group">
                          <label>Mobile No.</label>
                          <input type="text" class="form-control" id="mobileno" readonly>
                        </div>
                        <div class="form-group">
                          <label>Sponsor ID</label>
                          <input type="text" class="form-control" id="sponsorid" readonly>
                        </div>
                        <div class="form-group">
                          <label>Placement ID</label>
                          <input type="text" class="form-control" id="placementid" readonly>
                        </div>
                        <div class="form-group">
                          <label>Activation Code</label>
                          <input type="text" class="form-control" id="activationcode" readonly>
                        </div>
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
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