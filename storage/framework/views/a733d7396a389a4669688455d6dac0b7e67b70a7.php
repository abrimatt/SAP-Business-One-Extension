

<?php $__env->startSection('css'); ?>
    <!-- Summernote css -->
    <link href="/assets/libs/summernote/summernote.min.css" rel="stylesheet" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            
        </nav>
        <h4 class="mb-1 mt-0">Stock Receipt </h4>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-1">Stock Details</h4>
                    <p class="sub-header">
                        Select2 gives you a customizable select box with support for searching, tagging, remote data sets,
                        infinite scrolling, and many other highly used options.
                    </p>
    
                    <div class="row">
                        <div class="col-xl-2 col-sm-4">
                            <div class="form-group mt-3 mt-sm-0">
                                <label>Posting Date</label>
                                <input class="form-control" value="<?php echo e($stockReceipt->DocDate); ?>" placeholder="Posting Date" readonly />
                            </div>
                        </div>
    
                        <div class="col-xl-2 col-sm-4">
                            <div class="form-group mt-3 mt-sm-0">
                                <label>Due Date</label>
                                <input class="form-control" value="<?php echo e($stockReceipt->DocDueDate); ?>" placeholder="Posting Date" readonly />
                            </div>
                        </div>
                    </div>

                    <hr>

                    <h4 class="header-title mt-0 mb-1">Items In Rows</h4>
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
                                <th>Quantity</th>
                                <th>Warehouse</th>
                                
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php $__currentLoopData = $stockReceipt->DocumentLines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $docLine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($docLine->ItemCode,); ?></td>
                                <td><?php echo e($docLine->ItemDescription); ?></td>
                                <td><?php echo e($docLine->Quantity); ?></td>
                                <td><?php echo e($docLine->WarehouseCode); ?></td>
                                
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->
<?php $__env->stopSection(); ?>



<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script-bottom'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.vertical', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Laravel\laravel\resources\views/apps/stockReport/StockReceiptDetail.blade.php ENDPATH**/ ?>