<?php $__env->startSection('container'); ?>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
               
            </div>
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <a href="/aspirasi" class="btn btn-light" style="background-color: rgb(186, 122, 223)">Lihat Aspirasi</a>
            </div>

            <?php if(session()->has('success')): ?>
                <div class="alert alert-success mt-2" role="alert">
                    <?php echo e(session('success')); ?>

                </div>    
            <?php endif; ?>

            <div class="mt-8 text-white fs-5 dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg p-6" style="background-color: rgb(209, 158, 238)">
                <form action="<?php echo e(route('aspirasi')); ?>" method="POST">
                       <h1 style="text-align: center">Aspirasi Masyarakat</h1>
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="text" name="nik" class="form-control" id="nik" required placeholder="NIK">
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select class="form-select" name="id_kategori">
                            <?php $__currentLoopData = $kategoris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($kategori->id_kategori); ?>"><?php echo e($kategori->ket_kategori); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="lokasi" class="form-label">Lokasi</label>
                        <input type="text" name="lokasi" class="form-control" id="lokasi" required placeholder="Lokasi">
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <input type="text" name="ket" class="form-control" id="keterangan" required placeholder="Keterangan">
                    </div>
                    <button type="submit" class="btn btn-light" style="background-color: rgb(186, 122, 223)">Kirim</button>
                </form>
            </div>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aspirasi\resources\views/welcome.blade.php ENDPATH**/ ?>