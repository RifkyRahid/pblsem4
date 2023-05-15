<title>Inventory - Cetak Data</title>

	<p align="center"><b>Cetak Data</b></p>

    <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr >

                    <td><?php echo e($item->kode_d); ?></td>
                    <td><?php echo e($item->nama_d); ?></td>
                    <td><?php echo e($item->jenis_d); ?></td>
                    <td><?php echo e($item->stock_d); ?></td>

                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <script type="text/javascript">
    	
    	window.print();

    </script><?php /**PATH D:\Xampp\htdocs\PBL4\resources\views/Main/Cetak_Data.blade.php ENDPATH**/ ?>