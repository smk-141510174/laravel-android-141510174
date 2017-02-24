<?php $__env->startSection('kategori'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<center><h1>Daftar Kategori Lembur</h1></center>
<center><a href="<?php echo e(url('kategori/create')); ?>" class="btn btn-info">Tambah</a></center>
<hr>
	<table border="1" class="table table-striped table-border table-hover">
		<thead>
			<tr class="bg-danger">
				<th>No</th>
				<th>Kode Kategori Lembur</th>
				<th>Nama Golongan</th>
				<th>Nama Jabatan</th>
				<th>Besar Uang</th>
				<th colspan="2"><center>Action</center></th>
			</tr>
		</thead>
		<?php  $no=1;  ?>
		<tbody>
			<?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			<tr>
				<td><?php echo e($no++); ?></td>
				<td><?php echo e($data->kode_l); ?></td>
				<td><?php echo e($data->golongan->nama_g); ?></td>
				<td><?php echo e($data->jabatan->nama_j); ?></td>
				<td>Rp.<?php echo e($data->besar_uang); ?></td>
				<td><center>
					<a href="<?php echo e(route('kategori.edit',$data->id)); ?>" class='btn btn-primary'><span class="glyphicon glyphicon-pencil"> Edit </a></span></center>
				</td>
				<td>
					<?php echo Form::open(['method'=>'DELETE','route'=>['kategori.destroy',$data->id]]); ?>

					<?php echo Form::submit('Hapus',['class'=>'btn btn-danger']); ?>

					<?php echo Form::close(); ?>

				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		</tbody>
	</table>
	

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>