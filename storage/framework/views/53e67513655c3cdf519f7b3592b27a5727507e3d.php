<?php $__env->startSection('contentblog'); ?>

    <div class="col-sm-8 blog-main">
      <h1>
          Log in
      </h1>
        <form method="post" action="/login">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" class="form-control" id="email" name="email" >
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" >
            </div>
            <div class="form-group">
                <a href="/register">Do not have an account?</a>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Log in</button>
            </div>
            <?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.masterblog', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>