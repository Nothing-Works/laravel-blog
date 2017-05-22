<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Custom styles for this template -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="/css/bootstrap-reboot.min.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>
<?php echo $__env->make('layouts.navblog', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">
    <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
<?php echo $__env->make('layouts.headerblog', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">
    <div class="row">
        <?php echo $__env->yieldContent('contentblog'); ?>
        <?php echo $__env->make('layouts.slide', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
</div>
<?php echo $__env->make('layouts.footerblog', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script src="/js/jquery-3.2.1.min.js" ></script>
<script src="/js/bootstrap.min.js" ></script>
<script src="/js/appall.js" ></script>
</body>
</html>
