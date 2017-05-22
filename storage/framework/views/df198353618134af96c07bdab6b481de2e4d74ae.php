<?php $__env->startSection('contentblog'); ?>
    <div class="col-sm-8 blog-main">
        <h1>
            <?php echo e($post->title); ?>

        </h1>
    <?php if(count($post->tags)): ?>

        <ul>
        <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <li>
            <a href="/posts/tags/<?php echo e($tag->name); ?>">
                <?php echo e($tag->name); ?>

            </a>

        </li>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>

        <p>
            <?php echo e($post->body); ?>

        </p>

        <hr>
        <div class="comments">
            <ul class="list-group">
                <?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="list-group-item">
                        <strong>
                            <?php echo e($comment->created_at->diffForHumans()); ?>: &nbsp;
                        </strong>
                        <?php echo e($comment->body); ?> was written by &nbsp;<strong><?php echo e($comment->user->name); ?></strong>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>

        <hr>
        <div class="card">
            <div class="card-block">
                <form method="post" action="/posts/<?php echo e($post->id); ?>/comments">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                        <textarea name="body" class="form-control" placeholder="Your comments here.">

                        </textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                <?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.masterblog', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>