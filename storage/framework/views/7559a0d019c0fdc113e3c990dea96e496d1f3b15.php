<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('includes.message-block', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>Add Notice</h3></header>
            <form action="<?php echo e(route('post.create')); ?>" method="post">
                <div class="form-group">
                    <textarea class="form-control" name="body" id="new-post" rows="5" placeholder="your post"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
                <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>">
            </form>
        </div>
    </section>

    <section class="row posts">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>Previous Notices</h3></header>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <article class="post" data-postid="<?php echo e($post->id); ?>">
                    <p><?php echo e($post->body); ?></p>
                    <div class="info">
                        <?php echo e($post->created_at); ?>

                        
                    </div>
                    <div class="interaction">
                        <a href="#" class="edit">Edit</a> |
                        <a href="<?php echo e(route('post.delete',['post_id'=>$post->id])); ?>">Delete</a>
                    </div>
                </article>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </section>

    <div class="modal fade" tabindex="-1" role="dialog" id="edit-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Notice</h4>
                </div>
                <div class="modal-body">
                    <form >
                        <div class="form-group">
                            <label for="post-body">Edit the Post</label>
                            <textarea class="form-control" name="post-body" id="post-body" rows="5"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="modal-save" >Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <script>
        var token= '<?php echo e(Session::token()); ?>';
        var url='<?php echo e(route('edit')); ?>';
    </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>