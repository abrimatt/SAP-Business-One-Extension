<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Shreyu - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    
    <?php echo $__env->make('layouts.shared.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <style>
        .danger {
            color: red;
        }
    </style>
</head>

<body>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('layouts.shared.footer-script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html><?php /**PATH D:\Projects\Laravel\laravel\resources\views/layouts/non-auth.blade.php ENDPATH**/ ?>