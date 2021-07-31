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

                <?php
                defined('BASEPATH') or exit('No direct script access allowed');
                ?>
                <!DOCTYPE html>
                <html lang="en">

                <div class="card" style="width: 40rem; padding: 20px 20px 20px 20px; margin:auto;">
                    <div class="mt-3">
                        <div class="col-md-10 mt-3">
                            <h4> TAMBAH DETAIL PEMBELIAN </h4>
                            <hr>
                            </hr>
                            <form action="<?= base_url('pembeliandetail/simpandetailpembelian'); ?>" method="POST">
                                <input type="hidden" name="pembelian_id" value="<?= $pembelian['pembelian_id'] ?>">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nama Barang</label>
                                    <select class="form-select" name="barang_id" aria-label="Default select example">
                                        <option selected>-- pilih barang --</option>

                                        <?php foreach ($allbarang as $key => $barang) { ?>

                                            <option value="<?= $barang['barang_id'] ?>"><?= $barang['nama_barang'] ?> = <?= $barang['harga_barang'] ?> </option>
                                        <?php } ?>

                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Jumlah</label>
                                    <input type="number" name="stok_tambahan" class="form-control" id="exampleFormControlInput1" placeholder="jumlah">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Harga Satuan</label>
                                    <input type="text" name="harga_satuan" class="form-control" id="exampleFormControlInput1" placeholder="diskon" placeholde="harga satuan">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>