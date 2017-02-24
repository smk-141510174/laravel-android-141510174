<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-15 col-md-offset-0">
            <div class="panel panel-primary">
			    <div class="panel-heading">Data User</div>
	                <div class="panel-body">
				        
				        <table border="2" class="table table-success table-border table-hover">
										<thead >
											<tr>
												<th>No</th>
												<th colspan="2"><center>Action</center></th>
											</tr>
										</thead>
										<?php  $no=1;  ?>
										<tbody>
											<?php $__currentLoopData = $penggajian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
											<tr>
												<td><?php echo e($no); ?></td>
												
												
												<td>
													<a href="<?php echo e(route('penggajians.edit',$data->id)); ?>" class='btn btn-warning'> Edit </a>
												</td>
												<td>
													<?php echo Form::open(['method'=>'DELETE','route'=>['penggajians.destroy',$data->id]]); ?>

													<?php echo Form::submit('Delete',['class'=>'btn btn-danger']); ?>

													<?php echo Form::close(); ?>

												</td>
											</tr>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
										</tbody>
									</table>
				                </div>
				            </div>
				        </div>
					<a  href="<?php echo e(url('penggajian/create')); ?>" class="btn btn-primary form-control">Tambah</a>
	        		</div>
        	</div>
        </div>
    </div>
</div>
	

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>