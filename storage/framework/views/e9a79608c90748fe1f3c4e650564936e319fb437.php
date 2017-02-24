<?php $__env->startSection('content'); ?>                
    <div class="">
         <table class="table table-striped table-hover table-bordered">
                        
         <div class="col-md-12">
          <center>
          <div class="panel panel-danger">
                <div class="panel-heading">
                   <h3>Daftar Pegawai</h3>

                        <h4><?php echo e($penggajian->Tunjangan_pegawai->Pegawai->User->name); ?></h4>
                        <h5><?php echo e($penggajian->Tunjangan_pegawai->Pegawai->nip); ?></h5><hr>
                        <h3>Status Pengambilan</h3>
                        <b><?php if($penggajian->tanggal_pengambilan == ""&&$penggajian->status_pengambilan == "0"): ?>
                            Gaji Belum Diambil
                        <?php elseif($penggajian->tanggal_pengambilan == ""||$penggajian->status_pengambilan == "0"): ?>
                            Gaji Belum Diambil
                        <?php else: ?>
                            Gaji Sudah Diambil Pada <?php echo e($penggajian->tanggal_pengambilan); ?>

                        <?php endif; ?></b><hr>
                        <h3>Daftar Gaji</h3>
                        <h5>Gaji Lembur&nbsp:&nbspRp.<?php echo e($penggajian->jumlah_uang_lembur); ?><br> Gaji Pokok&nbsp:&nbsp  Rp.<?php echo e($penggajian->gaji_pokok); ?><br>Mendapat Tunjangan&nbsp:&nbspRp.<?php echo e($penggajian->Tunjangan_pegawai->Tunjangan->besar_uang); ?><br>Total Gaji&nbsp:&nbspRp.<?php echo e($penggajian->total_gaji); ?>

                        </h5>
                        <br>
                        <p align="left">
                            <a class="btn btn-warning" href="<?php echo e(url('penggajian')); ?>"><span class="glyphicon glyphicon-arrow-left"></span></a>
                        </p>
                    </div>
            </div>
            </center>
            </div> 
                        
            </table>
              
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>