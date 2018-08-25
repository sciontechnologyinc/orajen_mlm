<?php $__env->startSection('content'); ?>

<?php $__env->startSection('headerButton'); ?>
          <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                    <li class="nav-item">
                        <a href="secondwoe" class="nav-link">Transactions</a>
                    </li>
                    <li class="nav-item active">
                        <a href="secondwoehw" class="nav-link">How it works</a>
                    </li>
            </ul>
<?php $__env->stopSection(); ?>
<div class="main-panel">
    <div class="content-wrapper">
                <div class="secondwoe-title">Get unlimited 100 pesos everytime you refer to buy a product package worth 1,500.</div>
                <div class="secondwoecontainer">
                    <img src="/images/secondwoe.png" alt="">
                </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.master.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>