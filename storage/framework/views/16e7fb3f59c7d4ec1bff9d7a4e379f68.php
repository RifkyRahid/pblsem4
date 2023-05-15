

<title>Inventory - Mengubah Data</title>

<?php $__env->startSection('Frame'); ?>

	<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">

        <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">

            <span class="fs-4">Mengubah Data</span>

        </a>

    </header>

	<form method="post" action="<?php echo e('/data_admin/'. $data-> kode_d); ?>" enctype="multipart/form-data">

		<?php echo csrf_field(); ?>
		<?php echo method_field('PUT'); ?>

  		<div class="mb-3">

    		<label for="nama" class="form-label">Nama Barang</label>
    		<input type="text" class="form-control" id="nama_d" name="nama_d" value="<?php echo e($data-> nama_d); ?>">

  		</div>

  		<div class="mb-3">

    		<label for="alamat class"="form-label">Jenis  Barang</label>
    		<input type="text" class="form-control" id="jenis_d" name="jenis_d" value="<?php echo e($data-> jenis_d); ?>">

  		</div>

  		<div class="mb-3">

    		<label for="nama" class="form-label">Stock Barang</label>
    		<input type="text" class="form-control" id="stock_d" name="stock_d" value="<?php echo e($data-> stock_d); ?>">

  		</div>

  		<div class="mb-3">

  		<button type="submit" class="btn btn-primary">Update</button>

  		<a href='/admin/data' class="btn btn-secondary">Kembali</a>

  		</div>

	</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout/Admin_Frame', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PBL4\resources\views/Section_Admin/Edit_Data.blade.php ENDPATH**/ ?>