<?php $__env->startSection('content'); ?>
<div class="account-pages my-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 p-5">
                                <div class="mx-auto mb-5">
                                    <a href="/">
                                        <img src="assets/images/logo.png" alt="" height="24" />
                                        <h3 class="d-inline align-middle ml-1 text-logo">Shreyu</h3>
                                    </a>
                                </div>

                                <h6 class="h5 mb-0 mt-4">Create your account</h6>
                                <p class="text-muted mt-0 mb-4">Create a free account and start using Shreyu</p>

                                <?php if(session('error')): ?><div class="alert alert-danger"><?php echo e(session('error')); ?></div>
                                <br><?php endif; ?>
                                <?php if(session('success')): ?><div class="alert alert-success"><?php echo e(session('success')); ?></div>
                                <br><?php endif; ?>

                                <form method="POST" action="<?php echo e(route('register')); ?>" class="authentication-form">
                                    <?php echo csrf_field(); ?>

                                    <div class="form-group">
                                        <label class="form-control-label">Name</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="icon-dual" data-feather="user"></i>
                                                </span>
                                            </div>
                                            <input type="text"
                                                name="name" value="<?php echo e(old('name')); ?>"
                                                class="form-control <?php if($errors->has('name')): ?> is-invalid <?php endif; ?>"
                                                id="name" placeholder="Your full name" />

                                            <?php if($errors->has('name')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('name')); ?></strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label">Email Address</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="icon-dual" data-feather="mail"></i>
                                                </span>
                                            </div>
                                            <input type="email"
                                                name="email" value="<?php echo e(old('email')); ?>"
                                                class="form-control <?php if($errors->has('email')): ?> is-invalid <?php endif; ?>"
                                                id="email" placeholder="hello@coderthemes.com" />

                                            <?php if($errors->has('email')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('email')); ?></strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label class="form-control-label">Password</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="icon-dual" data-feather="lock"></i>
                                                </span>
                                            </div>
                                            <input type="password"
                                                name="password"
                                                class="form-control <?php if($errors->has('password')): ?> is-invalid <?php endif; ?>"
                                                id="password" placeholder="Enter your password" />

                                            <?php if($errors->has('password')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('password')); ?></strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label class="form-control-label">Re-Password</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="icon-dual" data-feather="lock"></i>
                                                </span>
                                            </div>
                                            <input type="password"
                                                name="confirm_password"
                                                class="form-control <?php if($errors->has('confirm_password')): ?> is-invalid <?php endif; ?>"
                                                id="confirm_password" placeholder="Confirm your password" />

                                            <?php if($errors->has('confirm_password')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('confirm_password')); ?></strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" type="submit">Sign Up</button>
                                    </div>
                                </form>
                            </div>

                            <div class="col-lg-6 d-none d-md-inline-block">
                                <div class="auth-page-sidebar">
                                    <div class="overlay"></div>
                                    <div class="auth-user-testimonial">
                                        <p class="font-size-24 font-weight-bold text-white mb-1">I simply love it!</p>
                                        <p class="lead">"It's a elegent templete. I love it very much!"</i>
                                        </p>
                                        <p>- Admin User</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p class="text-muted">Already have account? <a href="/login"
                                class="text-primary font-weight-bold ml-1">Login</a></p>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.non-auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Laravel\laravel\resources\views/auth/register.blade.php ENDPATH**/ ?>