<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('user'); ?>">
        <div class="sidebar-brand-icon my-2">
            <img style="width: 60px;" class="rounded-circle" src='<?= base_url('assets/'); ?>img/logo_PU.png'>
        </div>
        <div class="sidebar-brand-text mx-2">SYSTEM INVENTORY IT PREUNIV</div>
    </a>


    <!-- Divider -->
    <hr class="sidebar-divider my-">

    <!-- Heading -->
    <div class="sidebar-heading">
        USER
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('user/profile'); ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>My Profile</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        MENU
    </div>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-table"></i>
            <span>Form User</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Form Utilities</h6>
                <a class="collapse-item" href="<?= base_url('user/formpinjam'); ?>">Form Peminjaman</a>

            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <!-- <li class="nav-item">
        <a class="nav-link " href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Report</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="<?= base_url('user/Barang'); ?>">Stok Barang</a>
                <a class="collapse-item" href="<?= base_url('user/reportpinjam'); ?>">Status Peminjaman</a>
            </div>
        </div>
    </li> -->

    <!-- Divider -->
    <hr class="sidebar-divider my-">

    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->