

<?php $__env->startSection('css'); ?>
<!-- Summernote css -->
<link href="/assets/libs/summernote/summernote.min.css" rel="stylesheet" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            
        </nav>
        <h4 class="mb-1 mt-0">Good Issue Transaction</h4>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
        <form method="POST" enctype="multipart/form-data" action="<?php echo e(url('goodsissue/store')); ?>" class="col-12">
            <?php echo csrf_field(); ?>
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
                                <input class="form-control" value="" placeholder="Posting Date" />
                            </div>
                        </div>
    
                        <div class="col-xl-2 col-sm-4">
                            <div class="form-group mt-3 mt-sm-0">
                                <label>Due Date</label>
                                <input class="form-control" value="" placeholder="Due Date" />
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
                            
                            <tr>
                                <td>
                                    
                                    <input name="ItemCode[]" class="form-control" value="" placeholder="Item Code" />
                                </td>
                                <td>
                                    
                                    <div class="form-group mt-3 mt-sm-0">
                                        <label>Default</label>
                                        <select data-plugin="customselect" class="form-control">
                                            <option value="0">Shreyu</option>
                                            <option value="1">Greeva</option>
                                            <option value="2">Dhyanu</option>
                                            <option value="3" disabled>Disabled</option>
                                            <option value="4">Mannat</option>
                                        </select>
                                    </div>
                                    
                                </td>
                                <td>
                                    
                                    <input name="Quantity[]" class="form-control" value="" placeholder="Item Quantity" />
                                </td>
                                <td>
                                    <input name="Warehouse[]" class="form-control" value="" placeholder="Item WarehouseCode" />
                                    
                                </td>
                                
                            </tr>
                            
                        </tbody>
                    </table>
                </div> <!-- end card body-->
                <button type="submit" class="btn btn-success">Save</button>
                <a href="<?php echo e(URL::previous()); ?>" class="btn btn-sm btn-danger float-right">Cancle</a>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Save</button>
                    <a href="<?php echo e(URL::previous()); ?>" class="btn btn-sm btn-danger float-right">Cancle</a>
                </div>
            </div> <!-- end card -->
        </form>
        </div><!-- end col-->
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <!-- Init js-->
    <script src="assets/js/pages/form-advanced.init.js"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script-bottom'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.vertical', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Laravel\laravel\resources\views/apps/stockTransaction/StockTransferTransaction.blade.php ENDPATH**/ ?>