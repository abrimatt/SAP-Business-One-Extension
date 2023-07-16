<link rel="shortcut icon" href="<?php echo e(URL::asset('assets/images/favicon.ico')); ?>">

<?php echo $__env->yieldContent('css'); ?>

<!-- App css -->
<link href="<?php echo e(URL::asset('assets/css/icons.min.css')); ?>" rel="stylesheet" type="text/css" />

<?php if(isset($isDark) && $isDark): ?>
<link href="<?php echo e(URL::asset('assets/css/bootstrap-dark.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('assets/css/app-dark.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php else: ?>
<link href="<?php echo e(URL::asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />

    <?php if(isset($isRTL) && $isRTL): ?>
    <link href="<?php echo e(URL::asset('assets/css/app-rtl.min.css')); ?>" rel="stylesheet" type="text/css" />
    <?php else: ?>
    <link href="<?php echo e(URL::asset('assets/css/app.min.css')); ?>" rel="stylesheet" type="text/css" />
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH D:\Projects\Laravel\laravel\resources\views/layouts/shared/head.blade.php ENDPATH**/ ?>