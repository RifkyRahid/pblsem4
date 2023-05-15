

<?php $__env->startSection('konten'); ?>
	<h1><?php echo e($judul); ?></h1>
	<p>
		<ul>
			<li>Email = <?php echo e($kontak['email']); ?></li>
			<li>Instagram = <?php echo e($kontak['instagram']); ?></li>
		</ul>
	</p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout/aplikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\PBL4\resources\views/Halaman/kontak.blade.php ENDPATH**/ ?>