

<?php $__env->startSection('css'); ?>
    <!-- Summernote css -->
    <link href="/assets/libs/summernote/summernote.min.css" rel="stylesheet" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            
        </nav>
        
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-1">Stock In Warehous Information</h4>
                    <p class="sub-header">
                        DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction
                        function:
                        <code>$().DataTable();</code>.
                    </p>
    
                    

                    

                    <table id="basic-datatable" class="table dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>Item Code</th>
                                <th>Item Description</th>
                                <th>Price</th>
                                <th>Quantity In Warehouse</th>
                                <th>Warehouse</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php $__currentLoopData = $item->value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($item->ItemCode,); ?></td>
                                <td><?php echo e($item->ItemName); ?></td>
                                <td><?php echo e($item->Price); ?></td>
                                <td><?php echo e($item->OnHand); ?></td>
                                <td><?php echo e($item->WhsName); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>

                </div> <!-- end card body-->
                <div class="card-footer">
                    <a href="<?php echo e(URL::previous()); ?>" class="btn btn-sm btn-danger">Back</a>
                    <a href="#" class="btn btn-sm btn-primary float-right">Send Request</a>
                </div>
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->
<?php $__env->stopSection(); ?>



<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script-bottom'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.vertical', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Laravel\laravel\resources\views/apps/stockReport/ItemDetail.blade.php ENDPATH**/ ?>