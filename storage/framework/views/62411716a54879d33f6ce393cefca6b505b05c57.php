<?php $__env->startSection('content'); ?>

<?php $__env->startSection('headerButton'); ?>
          <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                    <li class="nav-item">
                        <a href="firstwoe" class="nav-link">Transactions</a>
                    </li>
                    <li class="nav-item active">
                        <a href="firstwoehw" class="nav-link">How it works</a>
                    </li>
            </ul>
<?php $__env->stopSection(); ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="firstwoe-title">50% DISCOUNT ON REPEAT PURCHASE</div><br>
        <div><b>CONSUMERS BENEFITS</b> <br><br></div>
        <div>Regular customers will be benefit the 50% discount on every repeat purchase of products.</div> <br>
        <div>Get 10% to 30% discounts of other products on ORAJEN online store.</div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.master.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>