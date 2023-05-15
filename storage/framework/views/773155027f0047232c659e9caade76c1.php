

<title>Inventory - Data Barang</title>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<?php $__env->startSection('Frame'); ?>

    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">

        <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">

            <span class="fs-3">Data  Barang</span>

        </a>

    </header>

    <a href="<?php echo e(url('/data/create')); ?>" class="btn btn-primary">Tambah Data</a>
    <a href="<?php echo e(url('/cetak')); ?>" target="_blank" class="btn btn-primary">Cetak Data</a>
    <br><br>

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

                    <td><?php echo e($item->kode_d); ?></td>
                    <td><?php echo e($item->nama_d); ?></td>
                    <td><?php echo e($item->jenis_d); ?></td>
                    <td><?php echo e($item->stock_d); ?></td>
                    <td>

                        <a class='btn btn-primary btn-sm' href='<?php echo e(url('/data/'.$item->kode_d.'/edit')); ?>'>Edit</a>

                        <form onsubmit="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')" class='d-inline' action="<?php echo e('/data/'.$item->kode_d); ?>" method="post">

                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>

                        </form>

                    </td>

                </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>

    </table>
    
    <?php echo e($data->links()); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout/Dashboard_Frame', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\PBL4\resources\views/Main/Data_Barang.blade.php ENDPATH**/ ?>