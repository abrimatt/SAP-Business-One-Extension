<?php $__env->startSection('content'); ?>

<div class="account-pages my-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-md-6 p-5">
                                <div class="mx-auto mb-5">
                                    <a href="/">
                                        <img src="assets/images/logo.png" alt="" height="24" />
                                        <h3 class="d-inline align-middle ml-1 text-logo">Shreyu</h3>
                                    </a>
                                </div>

                                <h6 class="h5 mb-0 mt-4">Welcome back!</h6>
                                <p class="text-muted mt-1 mb-4">Enter your email address and password to
                                    access admin panel.</p>

                                <?php if(session('error')): ?><div class="alert alert-danger"><?php echo e(session('error')); ?></div>
                                <br><?php endif; ?>
                                <?php if(session('success')): ?><div class="alert alert-success"><?php echo e(session('success')); ?></div>
                                <br><?php endif; ?>

                                <form action="<?php echo e(route('login')); ?>" method="post" class="authentication-form">
                                    <?php echo csrf_field(); ?>

                                    <div class="form-group">
                                        <label class="form-control-label">Email Address</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="icon-dual" data-feather="mail"></i>
                                                </span>
                                            </div>
                                            <input type="email"
                                                class="form-control <?php if($errors->has('email')): ?> is-invalid <?php endif; ?>" id="
                                                email" placeholder="hello@coderthemes.com" name="email" value="<?php echo e(old('email')); ?>" />

                                            <?php if($errors->has('email')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('email')); ?></strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group mt-4">
                                        <label class="form-control-label">Password</label>
                                        <a href="<?php echo e(route('password.request')); ?>"
                                            class="float-right text-muted text-unline-dashed ml-1">Forgot your
                                            password?</a>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="icon-dual" data-feather="lock"></i>
                                                </span>
                                            </div>
                                            <input type="password" class="form-control <?php if($errors->has('password')): ?> is-invalid <?php endif; ?>" id="password"
                                                placeholder="Enter your password"  name="password" />

                                            <?php if($errors->has('password')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('password')); ?></strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin"
                                                <?php echo e(old('remember') ? 'checked' : ''); ?> />
                                            <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" type="submit"> Log In
                                        </button>
                                    </div>
                                </form>

                                <!-- <div class="py-3 text-center"><span class="font-size-16 font-weight-bold">Or</span>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <a href="" class="btn btn-white"><i
                                                class='uil uil-google icon-google mr-2'></i>With Google</a>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="" class="btn btn-white"><i
                                                class='uil uil-facebook mr-2 icon-fb'></i>With Facebook</a>
                                    </div>
                                </div> -->
                            </div>
                            <div class="col-lg-6 d-none d-md-inline-block">
                                <div class="auth-page-sidebar">
                                    <div class="overlay"></div>
                                    <div class="auth-user-testimonial">
                                        <p class="font-size-24 font-weight-bold text-white mb-1">I simply love it!</p>
                                        <p class="lead">"It's a elegent templete. I love it very much!"</p>
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
                        <p class="text-muted">Don't have an account? <a href="/register"
                                class="text-primary font-weight-bold ml-1">Sign Up</a></p>
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
<?php echo $__env->make('layouts.non-auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Laravel\laravel\resources\views/auth/login.blade.php ENDPATH**/ ?>