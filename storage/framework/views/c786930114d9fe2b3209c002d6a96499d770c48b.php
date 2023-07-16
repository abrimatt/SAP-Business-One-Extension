

<?php $__env->startSection('css'); ?>
<!-- Summernote css -->
<link href="/assets/libs/summernote/summernote.min.css" rel="stylesheet" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            
        </nav>
        <h4 class="mb-1 mt-0">Item Lists</h4>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <?php $__currentLoopData = $items->value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class='col-xl-4 col-lg-6'>
                <?php $__env->startComponent('apps.stockReport.items-report', ['itemCode' => $item->ItemCode, 'status' => $item->Valid, 'category'
                    => $item->ItemCode, 'name' => $item->ItemCode, 'description' => $item->ItemName, 'dueDate' => '15 Dec', 
                    'noTasks' => $item->QuantityOnStock, 'noComments' => $item->QuantityOnStock,
                    'progress' => 100, 'url' => '/items' . '/' . $item->ItemCode ]); ?>
                <?php echo $__env->renderComponent(); ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script-bottom'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.vertical', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Laravel\laravel\resources\views/apps/stockReport/Items.blade.php ENDPATH**/ ?>