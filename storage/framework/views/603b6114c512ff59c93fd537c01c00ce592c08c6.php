<?php $__env->startSection('content'); ?>
<div class="main-panel">
    <div class="content-wrapper">
    <div class="col-md-6 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Administrator Settings</h4>
                        <p class="card-description">
                        Administrator Information
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
                        Company Information
                        </p>
                        <div class="form-group">
                          <label>Mission</label>
                          <input type="text" class="form-control" id="mission" readonly>
                        </div>
                        <div class="form-group">
                          <label>Vision</label>
                          <input type="text" class="form-control" id="vision" readonly>
                        </div>
                        <div class="form-group">
                          <label>Company Logo</label>
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
    </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>