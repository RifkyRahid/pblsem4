<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

	<link rel="stylesheet" href="<?php echo e('css/app.css'); ?>">
	
</head>
<body>
	<div class="container py-5">

		<?php if(Auth::check()): ?>

		<?php endif; ?>

		<?php echo $__env->make('komponen/pesan', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php echo $__env->yieldContent('konten'); ?>
	</div>
</body>
</html><?php /**PATH D:\Xampp\htdocs\PBL4\resources\views/layout/aplikasi.blade.php ENDPATH**/ ?>