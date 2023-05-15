

<?php $__env->startSection('Frame'); ?>

<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">

        <a href="/siswa" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">

            <span class="fs-4">Dashboard</span>

        </a>

</header>

<div class="card bg-dark text-white">
  <img src="<?php echo e(asset('foto/poltek.jpeg')); ?>" class="card-img-top" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text">Last updated 3 mins ago</p>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/Dashboard_Frame', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\PBL4\resources\views/Main/Dashboards.blade.php ENDPATH**/ ?>