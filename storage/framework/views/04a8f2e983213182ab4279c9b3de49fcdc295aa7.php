<?php $__env->startSection('headerButton'); ?>
          <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                    <li class="nav-item active">
                        <a href="#" class="nav-link">Add Category</a>
                    </li>
                    <li class="nav-item">
                        <a href="categories" class="nav-link">Category List</a>
                    </li>
            </ul>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="main-panel">
    <div class="content-wrapper">
    <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Categories</h4>
                      <p class="card-description">
                        Add a category
                      </p>
                      <form class="forms-sample">
                        <div class="form-group">
                          <label for="categoryname">Category Name</label>
                          <input type="text" class="form-control" id="categoryname" placeholder="">
                        </div>
                        <div class="form-group">
                        <label for="categorydesc">Category Description</label>
                          <input type="text" class="form-control" id="categorydesc" placeholder="">
                        </div>
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                      </form>
                    </div>
                  </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>