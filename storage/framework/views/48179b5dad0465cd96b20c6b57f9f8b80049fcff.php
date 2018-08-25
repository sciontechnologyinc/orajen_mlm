<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo e(url('/css/landing.css')); ?>" rel="stylesheet" type='text/css'>
        <link href="<?php echo e(url('/css/style-800.css')); ?>" rel="stylesheet" type='text/css'>
        <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
        <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
        <!-- endinject -->
        <!-- plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="<?php echo e(url('/css/fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(url('/css/fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(url('/css/custom.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(url('/css/user.css')); ?>">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title>Orajen Marketing Corp</title>

    </head>
    <body>
        <div class='main'>
            <div class="flex-center position-ref full-height">
                <div class="container-scroller">
                        <?php echo $__env->make('admin.partial.headerPage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <div class="container-fluid page-body-wrapper">
                        <?php echo $__env->make('admin.partial.sidepanel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php echo $__env->yieldContent('content'); ?>
                        </div>
                </div>
            </div>
        </div>
    </body>
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <script src="../../vendors/js/vendor.bundle.addons.js"></script>
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../../js/chart.js"></script>
</html>
