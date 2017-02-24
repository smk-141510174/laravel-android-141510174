<?php $__env->startSection('golongan'); ?>
	active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<center><h1>Daftar Golongan</h1></center>

<center><a  href="<?php echo e(url('golongan/create')); ?>" class="btn btn-info ">Tambah</a></center>
<hr>
	<table border="2" class="table table-striped table-border table-hover">
		<thead>
			<tr class="bg-danger">
				<th>No</th>
				<th>Kode Golongan</th>
				<th>Nama Golongan</th>
				<th>Besar Uang</th>
				<th colspan="2"><center>Action</center></th>
			</tr>
		</thead>
		<?php  $no=1;  ?>
		<tbody>
			<?php $__currentLoopData = $golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			<tr>
				<td><?php echo e($no++); ?></td>
				<td><?php echo e($data->kode_g); ?></td>
				<td><?php echo e($data->nama_g); ?></td>
				<td>Rp.<?php echo e($data->besar_uang); ?></td>
				<td><center>
					<a href="<?php echo e(route('golongan.edit',$data->id)); ?>" class='btn btn-primary'><span class="glyphicon glyphicon-pencil"> Edit </a></span></center>
				</td>
				<td>
					<?php echo Form::open(['method'=>'DELETE','route'=>['golongan.destroy',$data->id]]); ?>

					<?php echo Form::submit('Hapus',['class'=>'btn btn-danger']); ?>

					<?php echo Form::close(); ?>

				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		</tbody>
	</table>
	

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>