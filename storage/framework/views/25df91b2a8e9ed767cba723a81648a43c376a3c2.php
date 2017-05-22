<?php $__env->startComponent('mail::message'); ?>
# Introduction

The body of your message.
1
1
3
3
3
<?php $__env->startComponent('mail::button', ['url' => '']); ?>
Button Text
<?php echo $__env->renderComponent(); ?>
<?php $__env->startComponent('mail::panel', ['url' => '']); ?>
    fuck
<?php echo $__env->renderComponent(); ?>

Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
