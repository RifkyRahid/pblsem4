

<link rel='stylesheet' href='https://cdn.jsdelivr.net/gh/alphardex/aqua.css@master/dist/aqua.min.css'>
<title>Login</title>

<?php $__env->startSection('Frame'); ?>
<?php echo csrf_field(); ?>


	<!-- <div class="w-50 center border rounded px-3 py-3 mx-auto">
		
		<h1>Login</h1>
		<form action="/sesi/login" method="POST">
			
			
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

	</div> -->

	<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/gh/alphardex/aqua.css@master/dist/aqua.min.css'>

</head>
<body>

<!-- partial:index.partial.html -->
<form class="login-form" action="/sesi/login" method="POST">
	
  <h1>Login</h1>
  <div class="form-input-material">
    <input type="text" name="email" id="email" placeholder=" " autocomplete="off" class="form-control-material" required />
    <label for="email">Email</label>
  </div>
  <div class="form-input-material">
    <input type="password" name="password" id="password" placeholder=" " autocomplete="off" class="form-control-material" required />
    <label for="password">Password</label>
  </div>
  <button type="submit" class="btn btn-primary btn-ghost">Login</button>
  <a href='/sesi/register' class="btn btn-primary btn-ghost">Register</a>
</form>
<!-- partial -->
  
</body>
</html>

	</div>



	<style>
		body {
		display: flex;
		justify-content: center;
		align-items: center;
		min-height: 100vh;
		background: #eceffc;
		}

		.btn {
		padding: 8px 20px;
		border-radius: 0;
		overflow: hidden;
		}
		.btn::before {
		position: absolute;
		content: "";
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background: linear-gradient(120deg, transparent, var(--primary-color), transparent);
		transform: translateX(-100%);
		transition: 0.6s;
		}
		.btn:hover {
		background: transparent;
		box-shadow: 0 0 20px 10px rgba(51, 152, 219, 0.5);
		}
		.btn:hover::before {
		transform: translateX(100%);
		}

		.form-input-material {
		--input-default-border-color: white;
		--input-border-bottom-color: white;
		}
		.form-input-material input {
		color: white;
		}

		.login-form {
		display: flex;
		flex-direction: column;
		align-items: center;
		padding: 50px 40px;
		color: white;
		background: rgba(0, 0, 0, 0.8);
		border-radius: 10px;
		box-shadow: 0 0.4px 0.4px rgba(128, 128, 128, 0.109), 0 1px 1px rgba(128, 128, 128, 0.155), 0 2.1px 2.1px rgba(128, 128, 128, 0.195), 0 4.4px 4.4px rgba(128, 128, 128, 0.241), 0 12px 12px rgba(128, 128, 128, 0.35);
		}
		.login-form h1 {
		margin: 0 0 24px 0;
		}
		.login-form .form-input-material {
		margin: 12px 0;
		}
		.login-form .btn {
		width: 100%;
		margin: 18px 0 9px 0;
		}
	</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/Login_Frame', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PBL4\resources\views/Main/Login.blade.php ENDPATH**/ ?>