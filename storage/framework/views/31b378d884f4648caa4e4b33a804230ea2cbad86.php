    <?php $__env->startSection('header'); ?>
        <?php echo $__env->make('marketingPlan.partial.headerPage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
        <dashboard></dashboard>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('marketingPlan.master.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>