

<?php $__env->startSection('container'); ?>
<div class="container">
  
  <h1 class="text-dark mt-2" style="color: red">Aspirasi Masyarakat</h1>
  
  <table class="table table-bordered mt-4">
    <thead class="table-warning">
        <tr>
            <th>Id Pelaporan</th>
            <th>NIK</th>
            <th>Id Kategori</th>
            <th>Lokasi</th>
            <th>Keterangan</th>
            <th>status</th>
        </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $aspirasis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aspirasi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($aspirasi->id_pelaporan); ?></td>
          <td><?php echo e($aspirasi->nik); ?></td>
          <td><?php echo e($aspirasi->id_kategori); ?></td>
          <td><?php echo e($aspirasi->lokasi); ?></td>
          <td><?php echo e($aspirasi->ket); ?></td>
          <td><?php echo e($aspirasi->status); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Pemas-Reyzar\resources\views/aspirasi.blade.php ENDPATH**/ ?>