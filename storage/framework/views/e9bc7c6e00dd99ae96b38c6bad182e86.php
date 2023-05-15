

<title>Login</title>

<?php $__env->startSection('Frame'); ?>

<br><br><br><br><br>

	<div class="w-50 center border rounded px-3 py-3 mx-auto">
		
		<h1>Login</h1>
		<form action="/sesi/login" method="POST">
			
			<?php echo csrf_field(); ?>
			<div class="mb-3">

				<label for="email" class="form-label">Email</label>
				<input type="email" value="<?php echo e(Session::get('email')); ?>" name="email" class="form-control">

			</div>

			<div class="mb-3">

				<label for="password" class="form-label">Password</label>
				<input type="password" name="password" class="form-control">

			</div class="mb-3 d-grid">

				<button name="submit" type="submit" class="btn btn-primary">Login</button>

				<a href='/sesi/register' class="btn btn-primary">Register</a>

			<div>
				

			</div>

		</form>

	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/Login_Frame', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\PBL4\resources\views/Main/Login.blade.php ENDPATH**/ ?>