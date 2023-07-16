

<?php $__env->startSection('css'); ?>
    <!-- Summernote css -->
    <link href="/assets/libs/summernote/summernote.min.css" rel="stylesheet" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            
        </nav>
        <h4 class="mb-1 mt-0">Item Issued From HQ Lists</h4>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <?php $__currentLoopData = $stockIssues->value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stockIssue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class='col-xl-4 col-lg-6'>
                <?php $__env->startComponent('apps.stockReport.doc-report', ['id' => 1, 'status' => $stockIssue->DocumentStatus,'category'
                    => '','name' => '', 'description' => $stockIssue->JournalMemo,
                    'dueDate' => $stockIssue->DocDate, 'DueDate' => $stockIssue->DocDueDate, 
                    'noComments' => $stockIssue->DocTotal, 'progress' => 100, 'url' => '/goodsissue' .'/'. $stockIssue->DocEntry]); ?>
                <?php echo $__env->renderComponent(); ?>
            </div>
            
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script-bottom'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.vertical', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Laravel\laravel\resources\views/apps/stockReport/StockIssueReport.blade.php ENDPATH**/ ?>