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
<div class="main-panel">
    <div class="content-wrapper">
        <div class="fourthwoe-title">INFINITY PASS UP INCENTIVES</div>
            <b>UNLMITED 150 PESOS</b>
            <div class="blue-label">UPLINE = 1 & 2</div>
            <div class="red-label">You = 3, 4, 5, 6, 8, 9, 10, 11, 12, 13</div>
            <div class="green-label">Product Voucher =5, 10, 15, 20</div>
        <div class="fourthwoecontainer">
            <img src="/images/fourthwoe.png" alt="">
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.master.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>