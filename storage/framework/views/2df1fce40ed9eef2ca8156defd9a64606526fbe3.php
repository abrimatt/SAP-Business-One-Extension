<div class="card <?php if(isset($bodyClass)): ?><?php echo e($bodyClass); ?><?php endif; ?>">
    <div class="card-body">
        <?php if(isset($status) && $status == 'tYes'): ?>
            <div class="badge badge-success float-right"><?php echo e($status); ?></div>
            <p class="text-success text-uppercase font-size-12 mb-2">Active</p>
        <?php endif; ?>

        

        <?php if(isset($status) && $status == 'tNo'): ?>
            <div class="badge badge-info float-right"><?php echo e($status); ?></div>
            <p class="text-info text-uppercase font-size-12 mb-2">In Active</p>
        <?php endif; ?>

        <h5><a href="#" class="text-dark"><?php echo e($name); ?></a></h5>
            <p class="text-muted mb-4"><?php echo e($description); ?>

        </p>

        <div>
            <a href="javascript: void(0);">
                <img src="/assets/images/users/avatar-2.jpg" alt="" class="avatar-sm m-1 rounded-circle">
            </a>
            <a href="javascript: void(0);">
                <img src="/assets/images/users/avatar-3.jpg" alt="" class="avatar-sm m-1 rounded-circle">
            </a>
        </div>
    </div>
    <div class="card-body border-top">
        <div class="row align-items-center">
            <div class="col-sm-auto">
                <ul class="list-inline mb-0">
                    
                    <li class="list-inline-item">
                        <a href="#" class="text-muted d-inline-block" data-toggle="tooltip" data-placement="top"
                            title="" data-original-title="Qauntity Available">
                            <i class="uil uil-comments-alt mr-1"></i> <?php echo e($noComments); ?>

                        </a>
                    </li>
                </ul>
            </div>
            <div class="col offset-sm-1">
                
                <a href="<?php echo e(url($url)); ?>" class="btn btn-small btn-success float-right"> Detail </a>
            </div>
        </div>
    </div>
</div>
<!-- end card --><?php /**PATH D:\Projects\Laravel\laravel\resources\views/apps/stockReport/items-report.blade.php ENDPATH**/ ?>