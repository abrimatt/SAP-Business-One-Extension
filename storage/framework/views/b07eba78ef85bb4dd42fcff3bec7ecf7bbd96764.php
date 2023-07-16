

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
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    
                    <h4 class="header-title mt-0 mb-1">Responsive tables</h4>
                    <p class="sub-header">
                        Create responsive tables by wrapping any <code>.table</code> in <code>.table-responsive</code>
                        to make them scroll horizontally on small devices (under 768px).
                    </p>
                    <div class="table-responsive">
                        <table class="table m-0">
                            <thead>
                                <tr>
                                    
                                    <th>Item Code</th>
                                    <th>Item Name</th>
                                    <th>Total Quantity</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $items->value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    
                                    <td><?php echo e($item->ItemCode); ?></td>
                                    <td><?php echo e($item->ItemName); ?></td>
                                    <td><?php echo e($item->QuantityOnStock); ?></td>
                                    <td>
                                        
                                        <a href="<?php echo e(url('items/' . $item->ItemCode)); ?>" class="btn btn-sm btn-success">Details</a>
                                        
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="<?php echo e(URL::previous()); ?>" class="btn btn-sm btn-danger">Cancle</a> <a href="#" class="btn btn-sm btn-primary float-right">Send Request</a>
                </div>
            </div>
    
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script-bottom'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.vertical', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Laravel\laravel\resources\views/apps/stockReport/ItemInWarehouseReport.blade.php ENDPATH**/ ?>