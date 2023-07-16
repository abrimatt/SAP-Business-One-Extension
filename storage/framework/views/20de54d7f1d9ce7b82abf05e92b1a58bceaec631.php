<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">
    <div class="media user-profile mt-2 mb-2">
        <img src="<?php echo e(URL::asset('assets//images/users/avatar-7.jpg')); ?>" class="avatar-sm rounded-circle mr-2" alt="Shreyu" />
        <img src="<?php echo e(URL::asset('assets//images/users/avatar-7.jpg')); ?>" class="avatar-xs rounded-circle mr-2" alt="Shreyu" />

        <div class="media-body">
            <h6 class="pro-user-name mt-0 mb-0"><?php echo e(Auth::user()->name); ?></h6>
            <span class="pro-user-desc"><?php echo e(Auth::user()->email); ?></span>
        </div>
        <div class="dropdown align-self-center profile-dropdown-menu">
            <a class="dropdown-toggle mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                aria-expanded="false">
                <span data-feather="chevron-down"></span>
            </a>
            <div class="dropdown-menu profile-dropdown">
                <a href="/pages/profile" class="dropdown-item notify-item">
                    <i data-feather="user" class="icon-dual icon-xs mr-2"></i>
                    <span>My Account</span>
                </a>

                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i data-feather="settings" class="icon-dual icon-xs mr-2"></i>
                    <span>Settings</span>
                </a>

                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i data-feather="help-circle" class="icon-dual icon-xs mr-2"></i>
                    <span>Support</span>
                </a>

                <div class="dropdown-divider"></div>

                <a href="/pages-logout" class="dropdown-item notify-item">
                    <i data-feather="log-out" class="icon-dual icon-xs mr-2"></i>
                    <span>Logout</span>
                </a>
            </div>
        </div>
    </div>
    <div class="sidebar-content">
        <!--- Sidemenu -->
        <div id="sidebar-menu" class="slimscroll-menu">
            <?php echo $__env->make('layouts.shared.app-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End --><?php /**PATH D:\Projects\Laravel\laravel\resources\views/layouts/shared/sidebar.blade.php ENDPATH**/ ?>