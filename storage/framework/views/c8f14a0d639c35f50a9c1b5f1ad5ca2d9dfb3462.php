<?php $__env->startSection('content'); ?>
<?php $__env->startSection('headerButton'); ?>
          <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                    <li class="nav-item active">
                        <a href="fourthwoe" class="nav-link">Transactions</a>
                    </li>
                    <li class="nav-item">
                        <a href="fourthwoehw" class="nav-link">How it works</a>
                    </li>
            </ul>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.master.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>