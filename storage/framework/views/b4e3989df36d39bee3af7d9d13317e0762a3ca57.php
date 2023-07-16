

<?php $__env->startSection('css'); ?>
    <!-- Summernote css -->
    <link href="/assets/libs/summernote/summernote.min.css" rel="stylesheet" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
  <div class="row page-title align-items-center">
    <div class="col-md-3 col-xl-6">
        <h4 class="mb-1 mt-0">Goods Receipt PO</h4>
    </div>
    <div class="col-md-9 col-xl-6 text-md-right">
        <div class="mt-4 mt-md-0">
            <button type="button" class="btn btn-danger mr-4 mb-3  mb-sm-0"><i class="uil-plus mr-1"></i> Back</button>
            
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-body">
              <!-- Logo & title -->
              <div class="clearfix">
                <div class="float-sm-right">
                    <img src="assets/images/logo.png" alt="" height="48" />
                    <h4 class="m-0 d-inline align-middle">Shreyu</h4>
                    <address class="pl-2 mt-2">
                      795 Folsom Ave, Suite 600<br>
                      San Francisco, CA 94107<br>
                      <abbr title="Phone">P:</abbr> (123) 456-7890
                    </address>
                </div>
                <div class="float-sm-left">
                    <h4 class="m-0 d-print-none">GRPO</h4>
                    <dl class="row mb-2 mt-3">
                      <dt class="col-sm-3 font-weight-normal">GRPO No :</dt>
                      <dd class="col-sm-9 font-weight-normal">#<?php echo e($grpo->DocNum); ?></dd>

                      <dt class="col-sm-3 font-weight-normal">Invoice Date :</dt>
                      <dd class="col-sm-9 font-weight-normal"><?php echo e($grpo->DocDate); ?></dd>

                      <dt class="col-sm-3 font-weight-normal">Due Date :</dt>
                      <dd class="col-sm-9 font-weight-normal"><?php echo e($grpo->DocDueDate); ?></dd>
                    </dl>
                </div>
              </div>

              <div class="row mt-4">
                  <div class="col-md-6">
                      <h6 class="font-weight-normal">Ordered From:</h6>
                      <h6 class="font-size-16"><?php echo e($grpo->CardCode); ?> - <?php echo e($grpo->CardName); ?></h6>
                      <address>
                          
                      </address>
                  </div> <!-- end col -->

                  <div class="col-md-6">
                      <div class="text-md-right">
                          <h6 class="font-weight-normal">Total</h6>
                          <h3> <?php echo e($grpo->DocCurrency); ?> <?php echo e($grpo->DocTotal); ?></h3>
                      </div>
                  </div> <!-- end col -->
              </div>
              <!-- end row -->

              <div class="row">
                  <div class="col-12">
                      <div class="table-responsive">
                          <table class="table mt-4 table-centered table-hover">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>Item Description</th>
                                      <th style="width: 10%">Qty</th>
                                      <th>Warehouse/Store</th>
                                      <th style="width: 10%" class="text-righ">Price</th>
                                      <th style="width: 10%" class="text-righ">Total</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php $__currentLoopData = $grpo->DocumentLines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $docLine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($docLine->ItemCode,); ?></td>
                                    <td><?php echo e($docLine->ItemDescription); ?></td>
                                    <td><?php echo e($docLine->Quantity); ?></td>
                                    <td><?php echo e($docLine->WarehouseCode); ?></td>
                                    <td><?php echo e($docLine->Price); ?></td>
                                    <td><?php echo e($docLine->LineTotal); ?></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </tbody>
                          </table>
                      </div> <!-- end table-responsive -->
                  </div> <!-- end col -->
              </div>
              <!-- end row -->

              <div class="row">
                  <div class="col-sm-6">
                      <div class="clearfix pt-5">
                          <h6 class="text-muted">Notes:</h6>

                          <small class="text-muted">
                              All accounts are to be paid within 7 days from receipt of
                              invoice. To be paid by cheque or credit card or direct payment
                              online. If account is not paid within 7 days the credits details
                              supplied as confirmation of work undertaken will be charged the
                              agreed quoted fee noted above.
                          </small>
                      </div>
                  </div> <!-- end col -->
                  <div class="col-sm-6">
                      <div class="float-right mt-4">
                          <p><span class="font-weight-medium">Sub-total:</span> <span
                                  class="float-right"><?php echo e($grpo->DocTotal); ?></span></p>
                          
                                  <h3><?php echo e($grpo->DocTotal); ?> <?php echo e($grpo->DocCurrency); ?></h3>
                      </div>
                      <div class="clearfix"></div>
                  </div> <!-- end col -->
              </div>
              <!-- end row -->

              <div class="mt-5 mb-1">
                  <div class="text-right d-print-none">
                      <a href="javascript:window.print()" class="btn btn-primary"><i
                              class="uil uil-print mr-1"></i> Print</a>
                      <a href="#" class="btn btn-info">Submit</a>
                  </div>
              </div>
          </div>
      </div>
  </div> <!-- end col -->
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script-bottom'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.vertical', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Laravel\laravel\resources\views/apps/procurementtransactions/goodsreceiptpo/goodsreceiptpo.blade.php ENDPATH**/ ?>