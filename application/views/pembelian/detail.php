<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/utama/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/utama/') ?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/utama/') ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-warning sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-0">
                    <img src="<?= base_url(); ?>assets/img/toko.png" height="50" width="50">
                </div>
                <div class="sidebar-brand-text mx-0">TOKO SEMBAKO INZA</div>
            </a>

            <!-- Divider -->
            <div class="m-t-5">
                <hr class="sidebar-divider">


                <!-- Heading -->
                <div class="sidebar-heading">
                    BARANG
                </div>
                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('barang/') ?>">
                        <i class="fas fa-dolly-flatbed"></i>
                        <span>Barang</span></a>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('pembelian/') ?>">
                        <i class="fas fa-sign-in-alt"></i>
                        <span>Pembelian</span></a>
                    <!-- Divider -->
                    <hr class="sidebar-divider">

                    <!-- Heading -->
                    <div class="sidebar-heading">
                        SUPPLIER
                    </div>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url(); ?>supplier/">
                        <i class="fas fa-users"></i>
                        <span>Supplier</span></a>
                </li>
                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    PELANGGAN
                </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url(); ?>pelanggan/">
                        <i class="far fa-user"></i>
                        <span>Pelanggan</span></a>
                </li>
                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    PENJUALAN
                </div>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url(); ?>penjualan/">
                        <i class="fas fa-shopping-cart"></i>
                        <span>Penjualan</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-dark" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>

                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    My Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <div class="card" style="width: 90rem; padding: 20px 20px 20px 20px; margin:auto;">
                    <div class="card-body">

                        <div class="col-md-10 mt-3">
                            <div class="row mt-5">
                                <div class="col-5">
                                    <a href="<?= base_url('pembeliandetail/proses/' . $pembelian['pembelian_id']) ?>" type="button" class="btn btn-success">
                                        Tambah
                                    </a>
                                </div>
                            </div>

                            <table class="table mt-3">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Harga Satuan</th>
                                        <th scope="col">Harga Total</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($pembeliandetail as $no => $pembelian) {
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $no + 1 ?></th>
                                            <td><?= $pembelian['nama_barang']; ?></td>
                                            <td><?= $pembelian['stok_tambahan']; ?></td>
                                            <td><?= $pembelian['harga_satuan']; ?></td>
                                            <td><?= $pembelian['harga_total']; ?></td>

                                            <td>

                                                <a href="<?= base_url('pembeliandetail/hapus/' . $pembelian['pembelian_id'] . '/' . $pembelian['pembelian_detail_id']) ?>" class="btn btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>


                        </div>
                        <!-- /.container-fluid -->

                        <!-- Footer -->
                        <footer class="sticky-footer bg-white">
                            <div class="container my-auto">
                                <div class="copyright text-center my-auto">
                                    <span>Copyright &copy; Toko Alat Tulis : Aulia 2021</span>
                                </div>
                            </div>
                        </footer>
                        <!-- End of Footer -->

                    </div>
                    <!-- End of Content Wrapper -->

                </div>
                <!-- End of Page Wrapper -->

                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>

                <!-- Logout Modal-->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>