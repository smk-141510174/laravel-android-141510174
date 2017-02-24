<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-danger">
                <div class="panel-heading">Welcome</div>
<center>
                <div class="panel-body">
                <p>Hi,<?php echo e(Auth::user()->name); ?></p><br>
                <p>Sebagai,<?php echo e(Auth::user()->type_user); ?></p><br>
                     Aplikasi Penggajian
                </div></center>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>