

<title>Register</title>

<?php $__env->startSection('Frame'); ?>

<br><br><br><br><br>

	<div class="w-50 center border rounded px-3 py-3 mx-auto">
		
		<h1>Register</h1>
		<form action="/sesi/create" method="POST">
			
			<?php echo csrf_field(); ?>

			<div class="mb-3">

				<label for="name" class="form-label">Nama</label>
				<input type="text" value="<?php echo e(Session::get('name')); ?>" name="name" class="form-control">

			</div>

			<div class="mb-3">

				<label for="email" class="form-label">Email</label>
				<input type="email" value="<?php echo e(Session::get('email')); ?>" name="email" class="form-control">

			</div>

			<div class="mb-3">

				<label for="password" class="form-label">Password</label>
				<input type="password" name="password" class="form-control">

			</div>

			<div class="col-sm-9">

				<label for="role" class="form-label">Role</label>
		        <select name="role" class="form-control" id="role" required>

		         	<option value=""> <--pilih--> </option>

		         	<?php $__currentLoopData = $role; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

			         	<option value="<?php echo e($item->id); ?>"> <?php echo e($item->role); ?> </option>

		         	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


				</select>

   			</div>

   			<br>


				<button name="submit" type="submit" class="btn btn-primary">Register</button>

				<a href='<?php echo e(url('/sesi')); ?>' class="btn btn-secondary">Kembali</a>

		</form>

	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/Login_Frame', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PBL4\resources\views/Main/Register.blade.php ENDPATH**/ ?>