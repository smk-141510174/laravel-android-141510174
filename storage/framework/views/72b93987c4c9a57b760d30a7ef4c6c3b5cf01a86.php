<?php $__env->startSection('content'); ?>
       <center><h2>Table Penggajian</h2></center> 
                    
                    <div class="col-md-12">
                        <center><a href="<?php echo e(url('penggajian/create')); ?>" class="btn btn-info ">Tambah Data</a></center><hr>
                        <center><?php echo e($penggajian->links()); ?></center>
                    </div>
                    <table border="1" class="table table-striped table-border table-hover">

                        <thead>
                        <tr class="bg-danger">
                        <th>No</th>
                        <th>Nama Pegawai</th>
                        <th>Nip Pegawai</th> 
                        <th>Status Pengambilan</th>
                        <th colspan="3"><center>Action</center></th>
                        </tr>

                        <?php 
                            $no=1 ;
                         ?>
                        <tbody>
                        <?php $__currentLoopData = $penggajian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penggajians): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <tr>
                        <td><?php echo e($no++); ?></td>                        
                            
                        <td><?php echo e($penggajians->Tunjangan_pegawai->Pegawai->User->name); ?></td>
                        
                        <td><?php echo e($penggajians->Tunjangan_pegawai->Pegawai->nip); ?></td>
                        <<td><b><?php if($penggajians->tanggal_pengambilan == ""&&$penggajians->status_pengambilan == "0"): ?>

                        Gaji Belum Diambil

                                <div >

                                    <a class="btn btn-warning" href="<?php echo e(route('penggajian.edit',$penggajians->id)); ?>">Ambil</a>

                                </div>

                            

                        <?php elseif($penggajians->tanggal_pengambilan == ""||$penggajians->status_pengambilan == "0"): ?>

                            Gaji Belum Diambil

                            <div>

                                    <a class="btn btn-warning" href="<?php echo e(route('penggajian.edit',$penggajians->id)); ?>">Ambil</a>

                                </div>

                        <?php else: ?>

                            Gaji Sudah Diambil Pada <?php echo e($penggajians->tanggal_pengambilan); ?>


                        <?php endif; ?></b></td>


                        </h5>

                        
                                <td><center><a class="btn btn-primary" href="<?php echo e(route('penggajian.show',$penggajians->id)); ?>"><span class="glyphicon glyphicon-eye-open"></span>&nbsplihat</a></center></td>
                                     <td><?php echo Form::open(['method'=>'DELETE','route'=>['penggajian.destroy',$penggajians->id]]); ?>

                                    <?php echo Form::submit('Hapus',['class'=>'btn btn-danger col-md-12']); ?></td>
                                    <?php echo Form::close(); ?>

                                
                        </center>
                        </div> 
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </tr>
                        
                    </table>
                </div>

           
        
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>