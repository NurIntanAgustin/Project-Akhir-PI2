 <!-- Sidebar -->
 <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

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
                 <i class="fas fa-fw fa-tachometer-alt"></i>
                 <span>Barang</span></a>
         <li class="nav-item active">
             <a class="nav-link" href="<?= base_url('barangmasuk/') ?>">
                 <i class="fas fa-fw fa-tachometer-alt"></i>
                 <span>Barang Masuk</span></a>

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
             PENJUALAN
         </div>

         <li class="nav-item active">
             <a class="nav-link" href="<?= base_url(); ?>penjualan/">
                 <i class="fas fa-utensils"></i>
                 <span>Penjualan</span></a>

             <!-- Divider -->
             <hr class="sidebar-divider">

             <!-- Heading -->
             <div class="sidebar-heading">
                 PELANGGAN
             </div>

         <li class="nav-item active">
             <a class="nav-link" href="<?= base_url(); ?>pelanggan/">
                 <i class="fas fa-filter"></i>
                 <span>Pelanggan</span></a>
         </li>


         <!-- Divider -->
         <hr class="sidebar-divider d-none d-md-block">

         <!-- Sidebar Toggler (Sidebar) -->
         <div class="text-center d-none d-md-inline">
             <button class="rounded-circle border-0" id="sidebarToggle"></button>
         </div>

 </ul>
 <!-- End of Sidebar -->