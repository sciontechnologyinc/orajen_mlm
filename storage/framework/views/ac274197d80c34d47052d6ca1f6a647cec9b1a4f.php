<?php $__env->startSection('headerButton'); ?>
          <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                    <li class="nav-item active">
                    <a href="#" class="nav-link">Add Review</a>
                    </li>
                    <li class="nav-item">
                        <a href="reviews" class="nav-link">Reviews List</a>
                    </li>
            </ul>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="main-panel">
    <div class="content-wrapper">
    <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Reviews</h4>
                      <p class="card-description">
                        Add a Review
                      </p>
                      <form class="forms-sample">
                        <div class="form-group">
                          <label for="reviewauthor">Author</label>
                          <input type="text" class="form-control" id="reviewauthor" placeholder="">
                        </div>
                        <div class="form-group">
                        <label for="reviewproduct">Product</label>
                          <input type="text" class="form-control" id="reviewproduct" placeholder="">
                        </div>
                        <div class="form-group">
                        <label for="reviewtext">Text</label>
                          <input type="text" class="form-control" id="reviewtext" placeholder="">
                        </div>
                        <div class="form-group">
                        <label for="reviewtext">Date Added</label>
                          <input class="form-control" placeholder="dd/mm/yyyy" />
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