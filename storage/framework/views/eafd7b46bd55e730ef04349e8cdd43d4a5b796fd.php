<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Shreyu</a></li>
                <li class="breadcrumb-item"><a href="">Apps</a></li>
                <li class="breadcrumb-item"><a href="">Email</a></li>
                <li class="breadcrumb-item active" aria-current="page">Inbox</li>
            </ol>
        </nav>

        <h4 class="mb-1 mt-0">Email Inbox</h4>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-12">
        <div class="email-container bg-transparent">
            <div class="inbox-leftbar card">
                <?php $__env->startComponent('apps.email.leftbar', ['includeChat' => true]); ?><?php echo $__env->renderComponent(); ?>
            </div>
            
            <div class="inbox-rightbar">
                <?php $__env->startComponent('apps.email.toolbar'); ?><?php echo $__env->renderComponent(); ?>
                
                <h5 class="mt-3 mb-2 font-size-16">Unread</h5>
                <ul class="message-list">
                    <li class="unread">
                        <?php $__env->startComponent('apps.email.email-item', ['id' => 1, 'from' => 'Lucas Kriebel (via Twitter)',
                        'subject' => 'Lucas Kriebel has sent you a direct message on Twitter!',
                        'description' => 'LucasKriebel - Very cool, Nicklas, You have a new direct message.',
                        'time' => '11:49 am']); ?>
                        <?php echo $__env->renderComponent(); ?>
                    </li>

                    <li class="unread">
                        <?php $__env->startComponent('apps.email.email-item', ['id' => 2, 'from' => 'me, Peter (5)',
                        'subject' => 'Home again!  ',
                        'description' => 'That is just perfect! See you tomorrow.',
                        'time' => 'Feb 21']); ?>
                        <?php echo $__env->renderComponent(); ?>
                    </li>

                    <li class="unread">
                        <?php $__env->startComponent('apps.email.email-item', ['id' => 3, 'from' => 'me, Susanna (11)',
                        'subject' => 'Train or Bus   ',
                        'description' => 'Yes ok, great! I am not stuck in Stockholm anymore, we are making progress.',
                        'time' => 'Feb 19']); ?>
                        <?php echo $__env->renderComponent(); ?>
                    </li>
                </ul>

                <h5 class="mt-4 mb-2 font-size-16">Important</h5>
                <ul class="message-list">
                    <li class="unread">
                        <?php $__env->startComponent('apps.email.email-item', ['id' => 4, 'from' => 'Randy, me (5)',
                        'subject' => 'Last pic over my village ',
                        'description' => 'Yeah I had like that! Do you remember the
                        video you showed me of your train ride between Colombo
                        and Kandy? The one with the mountain view? I would love
                        to see that one again!',
                        'time' => '5:01 am']); ?>
                        <?php echo $__env->renderComponent(); ?>
                    </li>
                    <li class="unread">
                        <?php $__env->startComponent('apps.email.email-item', ['id' => 5, 'from' => 'Lucas Kriebel (via Twitter)',
                        'subject' => 'Lucas Kriebel has sent you a direct message on Twitter!',
                        'description' => 'LucasKriebel - Very cool, Nicklas, You have a new direct message.',
                        'time' => '11:49 am']); ?>
                        <?php echo $__env->renderComponent(); ?>
                    </li>

                    <li class="unread">
                        <?php $__env->startComponent('apps.email.email-item', ['id' => 6, 'from' => 'me, Peter (5)',
                        'subject' => 'Home again! ',
                        'description' => 'That is just perfect! See you tomorrow.',
                        'time' => 'Feb 21']); ?>
                        <?php echo $__env->renderComponent(); ?>
                    </li>

                    <li class="unread">
                        <?php $__env->startComponent('apps.email.email-item', ['id' => 7, 'from' => 'me, Susanna (11)',
                        'subject' => 'Train or Bus ',
                        'description' => 'Yes ok, great! I am not stuck in Stockholm anymore, we are making progress.',
                        'time' => 'Feb 19']); ?>
                        <?php echo $__env->renderComponent(); ?>
                    </li>
                </ul>

                <h5 class="mt-4 mb-2 font-size-16">Everything Else</h5>
                <ul class="message-list">
                    <li><?php $__env->startComponent('apps.email.email-item', ['id' => 8, 'from' => 'Cointon Capeloff','subject' => 'Laceration of musc/fasc/tend abdomen, lower back and pelvis', 'time' => '8:18 PM']); ?><?php echo $__env->renderComponent(); ?></li>
                    <li><?php $__env->startComponent('apps.email.email-item', ['id' => 9, 'from' => 'Seth Tipton','subject' => 'Unspecified open wound, left lower leg, initial encounter', 'time' => '8:44 AM']); ?><?php echo $__env->renderComponent(); ?></li>
                    <li><?php $__env->startComponent('apps.email.email-item', ['id' => 10, 'from' => 'Rafaelita Goutcher','subject' => 'Maternal care for hereditary disease in fetus, fetus 5', 'time' => '7:58 AM']); ?><?php echo $__env->renderComponent(); ?></li>

                    <li><?php $__env->startComponent('apps.email.email-item', ['id' => 11, 'from' => 'Susette Mintrim','subject' => 'Displaced intartic fx l calcaneus, subs for fx w delay heal', 'time' => '9:43 PM']); ?><?php echo $__env->renderComponent(); ?></li>
                    <li><?php $__env->startComponent('apps.email.email-item', ['id' => 12, 'from' => 'Zechariah Ablett','subject' => 'Type 1 diabetes with stable prolif diabetic rtnop, left eye', 'time' => '8:28 AM']); ?><?php echo $__env->renderComponent(); ?></li>
                    <li><?php $__env->startComponent('apps.email.email-item', ['id' => 13, 'from' => 'Genovera Ingamells','subject' => 'Osseous stenosis of neural canal of cervical region', 'time' => '6:03 PM']); ?><?php echo $__env->renderComponent(); ?></li>
                    <li><?php $__env->startComponent('apps.email.email-item', ['id' => 14, 'from' => 'Gustavus Flockhart','subject' => 'Exposure to domestic wiring and appliances, subs encntr', 'time' => '3:51 PM']); ?><?php echo $__env->renderComponent(); ?></li>
                    <li><?php $__env->startComponent('apps.email.email-item', ['id' => 15, 'from' => 'Winifred Riddett','subject' => 'Strain of adductor musc/fasc/tend unsp thigh, subs', 'time' => '9:29 PM']); ?><?php echo $__env->renderComponent(); ?></li>
                    <li><?php $__env->startComponent('apps.email.email-item', ['id' => 16, 'from' => 'Land Allum','subject' => 'Contact w lifting and transmission devices, NEC', 'time' => '12:46 PM']); ?><?php echo $__env->renderComponent(); ?></li>
                    <li><?php $__env->startComponent('apps.email.email-item', ['id' => 17, 'from' => 'Salomo Bardnam','subject' => 'Other specified arthritis, elbow', 'time' => '11:56 AM']); ?><?php echo $__env->renderComponent(); ?></li>
                    <li><?php $__env->startComponent('apps.email.email-item', ['id' => 18, 'from' => 'Rubina Bushby','subject' => 'Driver of bus injured in nonclsn trnsp acc in traf, subs', 'time' => '12:14 PM']); ?><?php echo $__env->renderComponent(); ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script-bottom'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.vertical', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Laravel\laravel\resources\views/apps/email/inbox.blade.php ENDPATH**/ ?>