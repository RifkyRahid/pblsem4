<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="/assets/css/sb-admin-2.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    

</head>

<body id="page-top">

    <div id="wrapper">

        <div class="navbar-nav text-white bg-dark sidebar sidebar-dark accordion" id="accordionSidebar"> 

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo e(url('/admin/dashboard')); ?>">

                <div class="sidebar-brand-icon rotate-n-15">

                    <i class="fas fa-laugh-wink"></i>

                </div>

                <div class="sidebar-brand-text mx-3"> INVENTORY </div>

            </a>

            <!-------------- Pembatas -------------->

            <hr>

            <!-------------- Pembatas -------------->

            <ul class="nav nav-pills flex-column mb-auto">

                <li>

                    <a href="<?php echo e(url('/admin/dashboard')); ?>" class="nav-link text-white" aria-current="page" id="dashboard">

                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
                    Dashboard

                    </a>

                </li>

                <!-------------- Pembatas -------------->

                <li>

                    <a href="<?php echo e(url('/admin/data')); ?>" class="nav-link text-white" id="data">

                      <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                      Data Barang

                    </a>

                </li>

                <!-------------- Pembatas -------------->

                <li>

                    <a href="<?php echo e(url('/admin/data/konfirmasi')); ?>" class="nav-link text-white" id="data">

                      <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                      Konfirmasi

                    </a>

                </li>

            </ul>

            <!-------------- Pembatas -------------->

            <hr>

            <!-------------- Pembatas -------------->

            <div class="dropdown">

                <ul>
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">

                        <img src="https://toppng.com/uploads/preview/circled-user-icon-user-pro-icon-11553397069rpnu1bqqup.png" alt="" width="32" height="32" class="rounded-circle me-2">
                        <strong style="font-size: 12px;"><?php echo e(auth()->user()->name); ?></strong>

                    </a>

                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">

                        <li><a class="dropdown-item" href="/sesi/logout">Sign out</a></li>

                    </ul>
                </ul>

            </div>

        </div>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <div class="container-fluid">

                    <?php if(Auth::check()): ?>

                    <?php endif; ?>

                    <?php echo $__env->make('komponen/pesan', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->yieldContent('Frame'); ?>

                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <script src="https://getbootstrap.com/docs/5.0/examples/sidebars/sidebars.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html><?php /**PATH C:\xampp\htdocs\PBL4\resources\views/Layout/Admin_Frame.blade.php ENDPATH**/ ?>