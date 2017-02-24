<?php $__env->startSection('content'); ?>
<center><h1>Daftar Tunjangan Pegawai</h1></center>
<center><a  href="<?php echo e(url('tunjanganp/create')); ?>" class="btn btn-info">Tambah</a></center><hr>
	<table border="1" class="table table-striped table-border table-hover">
		<thead>
			<tr class="bg-danger">
				<th>No</th>
				<th>Kode Kategori Tunjangan</th>
				<th>Nama Pegawai</th>
				<th colspan="2"><center>Action</center></th>
			</tr>
		</thead>
		<?php  $no=1;  ?>
		<tbody>
			<?php $__currentLoopData = $tunjanganp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			<tr>
				<td><?php echo e($no++); ?></td>
				<td><?php echo e($data->tunjangan->kode_t); ?></td>
				<td><?php echo e($data->pegawai->user->name); ?></td>
				<td><center>
					<?php echo Form::open(['method'=>'DELETE','route'=>['tunjanganp.destroy',$data->id]]); ?>

					<?php echo Form::submit('Hapus',['class'=>'btn btn-danger']); ?>

					<?php echo Form::close(); ?></center>
				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		</tbody>
	</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>