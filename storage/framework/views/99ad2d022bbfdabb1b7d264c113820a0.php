

<?php $__env->startSection('konten'); ?>
	<div>
		<a href="/siswa" class="btn btn-secondary">Kembali</a>
		<h1><?php echo e($data->nama); ?></h1>
		<p>
			<b>Nomor Induk</b> <?php echo e($data->nomor_induk); ?>

		</p>

		<p>
			<b>Alamat</b> <?php echo e($data->alamat); ?>

		</p>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout/aplikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\PBL4\resources\views/siswa/show.blade.php ENDPATH**/ ?>