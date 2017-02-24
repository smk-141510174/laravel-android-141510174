<?php $__env->startSection('content'); ?>
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-danger">
                <div class="panel-heading"><h3>Edit Lembur Pegawai</h3></div>
                <div class="panel-body">
                    <?php echo Form::model($lembur,['method'=>'PATCH','route'=>['lemburp.update',$lembur->id]]); ?>

                        <?php echo Form::hidden('id',null,['class'=>'form-control']); ?>

                         
                        <div class="form-group<?php echo e($errors->has('Jumlah_jam') ? ' has-error' : ''); ?>">
                            <label for="Jumlah_jam" class="col-md-4 control-label">Jumlah Jam</label>

                            <div class="col-md-6">
                                <?php echo Form::text('Jumlah_jam',null,['class'=>'form-control']); ?>

                                <?php if($errors->has('Jumlah_jam')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('Jumlah_jam')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                        <?php echo Form::submit('Save',['class'=>'btn btn-success form-control']); ?>

                    </div>
                <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>