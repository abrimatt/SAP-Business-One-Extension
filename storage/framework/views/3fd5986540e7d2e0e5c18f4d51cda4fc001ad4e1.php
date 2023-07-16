<div class="row justify-content-sm-between border-bottom mt-2 border-bottom pt-2">
    <div class="col-lg-6 mb-2 mb-lg-0">
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="task<?php echo e($id); ?>">
            <label class="custom-control-label" for="task<?php echo e($id); ?>">
                <?php echo e($title); ?>

            </label>
        </div> <!-- end checkbox -->
    </div> <!-- end col -->
    <div class="col-lg-6">
        <div class="d-sm-flex justify-content-between">
            <div>
                <img src="<?php echo e($assigneeAvatar); ?>" alt="image" class="avatar-xs rounded-circle"
                    data-toggle="tooltip" data-placement="bottom" title="Assigned to <?php echo e($assignedTo); ?>" />
            </div>
            <div class="mt-3 mt-sm-0">
                <ul class="list-inline font-13 text-sm-right">
                    <li class="list-inline-item pr-1">
                        <i class='uil uil-schedule font-16 mr-1'></i>
                        <?php echo e($dueDate); ?>

                    </li>
                    <li class="list-inline-item pr-1">
                        <i class='uil uil-align-alt font-16 mr-1'></i>
                        <?php echo e($noChecklists); ?>

                    </li>
                    <li class="list-inline-item pr-2">
                        <i class='uil uil-comment-message font-16 mr-1'></i>
                        <?php echo e($noComments); ?>

                    </li>
                    <li class="list-inline-item">
                        <?php if($priority == 'High'): ?>
                        <span class="badge badge-soft-danger p-1"><?php echo e($priority); ?></span>
                        <?php endif; ?>
                        <?php if($priority == 'Medium'): ?>
                        <span class="badge badge-soft-info p-1"><?php echo e($priority); ?></span>
                        <?php endif; ?>
                        <?php if($priority == 'Low'): ?>
                        <span class="badge badge-success p-1"><?php echo e($priority); ?></span>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div> <!-- end .d-flex-->
    </div> <!-- end col -->
</div><?php /**PATH D:\Projects\Laravel\laravel\resources\views/apps/task/task-item.blade.php ENDPATH**/ ?>