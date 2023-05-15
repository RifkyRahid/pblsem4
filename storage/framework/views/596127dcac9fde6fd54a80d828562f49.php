

<title>Inventory - Meminta Barang</title>

<?php $__env->startSection('Frame'); ?>

	<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">

        <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">

            <span class="fs-4">Meminta Barang</span>

        </a>

    </header>

	<div> 

		<form method="post" action="/petugas/request_process" enctype="multipart/form-data">

		<?php echo csrf_field(); ?>

  		<div class="mb-3">

    		<label for="kode_r" class="form-label">Kode Barang</label>
    		<input type="text" class="form-control" id="kode_r" name="kode_r" value="<?php echo e(Session::get('kode_r')); ?>">

  		</div>

  		<div class="mb-3">

    		<label for="nama_r" class="form-label">Nama Barang</label>
    		<input type="text" class="form-control" id="nama_r" name="nama_r" value="<?php echo e(Session::get('nama_r')); ?>">

  		</div>

  		<div class="mb-3">

    		<label for="jenis_r" class="form-label">Jenis Barang</label>
    		<input type="text" class="form-control" id="jenis_r" name="jenis_r" value="<?php echo e(Session::get('jenis_r')); ?>">

  		</div>

  		<div class="mb-3">

    		<label for="stock_r" class="form-label">Stock Barang</label>
    		<input type="text" class="form-control" id="stock_r" name="stock_r" value="<?php echo e(Session::get('stock_r')); ?>">

  		</div>

  		<button type="submit" class="btn btn-primary">Tambah</button>

  		<a href='/petugas/data' class="btn btn-secondary">Kembali</a>

  		</div>

	</form>


	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout/Petugas_Frame', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\PBL4\resources\views/Section_Petugas/Request.blade.php ENDPATH**/ ?>