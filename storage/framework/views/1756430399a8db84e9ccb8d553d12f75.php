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

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">

                <div class="sidebar-brand-icon rotate-n-15">

                    <i class="fas fa-laugh-wink"></i>

                </div>

                <div class="sidebar-brand-text mx-3"> INVENTORY </div>

            </a>

            <!-------------- Pembatas -------------->

            <hr class="sidebar-divider my-0">

            <!-------------- Pembatas -------------->

            <li class="nav-item active">

                <a class="nav-link" href="<?php echo e(url('/dashboard')); ?>">

                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>

            </li>

            <!-------------- Pembatas -------------->

            <hr class="sidebar-divider">

            <!-------------- Pembatas -------------->

            <div class="sidebar-heading">

                    Interface

            </div>

            <!-------------- Pembatas -------------->

            <li class="nav-item">

                <a class="nav-link" href="<?php echo e(url('/data')); ?>">

                    <i class="fas fa-fw fa-cog"></i>
                    <span>Data Barang</span>

                </a>

            </li>

            <!-------------- Pembatas -------------->

            <li class="nav-item">

                <a class="nav-link" href="">

                    <i class="fas fa-fw fa-cog"></i>
                    <span>Utilities</span>

                </a>

            </li>

            <!-------------- Pembatas -------------->

            <hr class="sidebar-divider">

            <!-------------- Pembatas -------------->
            
            <div class="sidebar-heading">

                Addons

            </div>

            <!-------------- Pembatas -------------->

            <li class="nav-item">

                <a class="nav-link collapsed" href="#">

                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>

                </a>

            </li>

            <!-------------- Pembatas -------------->

            <li class="nav-item">

                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>

            </li>

            <!-------------- Pembatas -------------->

            <li class="nav-item">

                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>

            </li>

            <!-------------- Pembatas -------------->

        </ul>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">

                            <i class="fa fa-bars"></i>

                    </button>

                    <!-------------- Pembatas -------------->

                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">

                        <div class="input-group">

                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">

                            <div class="input-group-append">

                                <button class="btn btn-primary" type="button">

                                    <i class="fas fa-search fa-sm"></i>

                                </button>

                            </div>

                        </div>

                    </form>

                    <!-------------- Pembatas -------------->

                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item dropdown no-arrow d-sm-none">

                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                <i class="fas fa-search fa-fw"></i>

                            </a>

                            
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">

                                <form class="form-inline mr-auto w-100 navbar-search">

                                    <div class="input-group">

                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">

                                        <!-------------- Pembatas -------------->

                                        <div class="input-group-append">

                                            <button class="btn btn-primary" type="button">

                                                <i class="fas fa-search fa-sm"></i>

                                            </button>

                                        </div>

                                    </div>

                                </form>

                            </div>

                        </li>

                        <!-------------- Pembatas -------------->

                        <li class="nav-item dropdown no-arrow">

                            <ul class="nav nav-pills">

                                <li class="nav-item"><a href="/sesi/logout" class="nav-link active" aria-current="page">Logout</a></li>

                            </ul>

                            <!-------------- Pembatas -------------->

                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">

                                <a class="dropdown-item" href="#">

                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile

                                </a>

                                <!-------------- Pembatas -------------->

                                <a class="dropdown-item" href="#">

                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings

                                </a>

                                <!-------------- Pembatas -------------->

                                <a class="dropdown-item" href="#">

                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log

                                </a>

                                <!-------------- Pembatas -------------->

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">

                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout

                                </a>

                            </div>

                        </li>

                    </ul>

                </nav>

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

</body>

</html><?php /**PATH D:\Xampp\htdocs\PBL4\resources\views/layout/Dashboard_Frame.blade.php ENDPATH**/ ?>