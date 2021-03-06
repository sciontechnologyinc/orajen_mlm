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
        <title>Orajen Marketing Corp</title>

    </head>
    <body>
        <div class='main'>
            <div class="flex-center position-ref full-height">

                <?php echo $__env->yieldContent('header'); ?>
                
                <?php echo $__env->yieldContent('content'); ?>
            
            </div>
        </div>
    </body>
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
</html>
