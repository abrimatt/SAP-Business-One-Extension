<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <title>Shreyu - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
    <?php if(isset($isDark) && $isDark): ?>
        <?php echo $__env->make('layouts.shared.head', ['isDark' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php elseif(isset($isRTL) && $isRTL): ?>
        <?php echo $__env->make('layouts.shared.head', ['isRTL' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
        <?php echo $__env->make('layouts.shared.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

</head>

<?php if(isset($isScrollable) && $isScrollable): ?>
    <body class="scrollable-layout">
<?php elseif(isset($isBoxed) && $isBoxed): ?>
    <body class="left-side-menu-condensed boxed-layout" data-left-keep-condensed="true">
<?php elseif(isset($isDarkSidebar) && $isDarkSidebar): ?>
    <body class="left-side-menu-dark">
<?php elseif(isset($isCondensedSidebar) && $isCondensedSidebar): ?>
    <body class="left-side-menu-condensed" data-left-keep-condensed="true">
<?php else: ?>
    <body>
<?php endif; ?>

<?php if(isset($withLoader) && $withLoader): ?>
<!-- Pre-loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="circle1"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
        </div>
    </div>
</div>
<!-- End Preloader-->
<?php endif; ?>

    <div id="wrapper">

        <?php echo $__env->make('layouts.shared.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('layouts.shared.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="content-page">
            <div class="content">
                <!-- Start Content-->
                <div class="container-fluid">
                    <?php echo $__env->yieldContent('breadcrumb'); ?>
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </div>

            <?php echo $__env->make('layouts.shared.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>

    <?php echo $__env->make('layouts.shared.rightbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('layouts.shared.footer-script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if(getenv('APP_ENV') === 'local'): ?>
    <script id="__bs_script__">//<![CDATA[
        document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.26.7'><\/script>".replace("HOST", location.hostname));
    //]]></script>
    <?php endif; ?>
</body>

</html><?php /**PATH D:\Projects\Laravel\laravel\resources\views/layouts/vertical.blade.php ENDPATH**/ ?>