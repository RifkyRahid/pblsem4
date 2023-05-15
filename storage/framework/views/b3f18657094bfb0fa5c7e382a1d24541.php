

<?php $__env->startSection('Frame'); ?>

<title>Inventory - Konfirmasi Barang</title>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<?php $__env->startSection('Frame'); ?>

    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">

        <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">

            <span class="fs-3">Konfirmasi Permintaan Barang</span>

        </a>

    </header>

    <table class="table table-hover table-bordered" >
        <thead class="thead-light">
            <tr>

                <th>Kode</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Stock</th>
                <th>Aksi</th>

            </tr>
        </thead>

        <tbody>

            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr >

                    <td><?php echo e($item->kode_r); ?></td>
                    <td><?php echo e($item->nama_r); ?></td>
                    <td><?php echo e($item->jenis_r); ?></td>
                    <td><?php echo e($item->stock_r); ?></td>
                    <td>

                    	
                        <form onsubmit="return confirm('Apakah Anda Yakin Ingin Menerima Data Ini?')" action=" <?php echo e('/confirm_admin/'.$item->kode_r); ?>" enctype="multipart/form-data">

                    		<?php echo csrf_field(); ?>

                        	<button type="submit" class="btn btn-primary">Terima</a>

                        </form>

                        <form onsubmit="return confirm('Apakah Anda Yakin Ingin Menolak Data Ini?')" class='d-inline' action="<?php echo e('/confirm_admin/'.$item->kode_r); ?>" method="post">

	                            <?php echo csrf_field(); ?>
	                            <?php echo method_field('DELETE'); ?>
	                            <button class="btn btn-danger btn-sm" type="submit">Tolak</button>

	                    </form>

                    </td>

                </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>

    </table>
    
    <?php echo e($data->links()); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout/Admin_Frame', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PBL4\resources\views/Section_Admin/Konfirmasi.blade.php ENDPATH**/ ?>