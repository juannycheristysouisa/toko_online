<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-store"></i>
                </div>
                <span>FAMILY FURNITURE</span>
            </a>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('dashboard/index')  ?>">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <li class="nav-item active">
                <a class="nav-link" href="">
                    <span>KATEGORI</span></a>
            </li>


            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/sofa')  ?>">
                    <i class="fas fa-fw fa-couch"></i>
                    <span>Sofa</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/lemari')  ?>">
                    <i class="fas fa-fw fa-door-closed"></i>
                    <span>Lemari</span></a>
            </li>


            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/tempat_tidur')  ?>">
                    <i class="fas fa-fw fa-bed"></i>
                    <span>Tempat Tidur</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/elektronik')  ?>">
                    <i class="fas fa-fw fa-tv"></i>
                    <span>Elektronik</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/perlengkapan_dapur')  ?>">
                    <i class="fas fa-fw fa-utensils"></i>
                    <span>Perlengkapan Dapur</span></a>
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
                    <button id="sidebarToggleTop" class="btn btn-info d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form action="<?php echo base_url('kategori/search'); ?>" method="get" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" name="keyword" class="form-control bg-light border-0 small" placeholder="Cari nama barang..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-info" type="submit">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class="navbar">
                        <ul class="nav navbar-nav navbar-right">
                            <li style="color: turquoise;">
                                <?php
                                $keranjang = "<i class='fas fa-shopping-cart fa-sm' style='color:rgb(39, 179, 203);'></i>" . $this->cart->total_items()   . "<span style='color: rgb(39, 179, 203);'> items</span>";
                                ?>

                                <?php echo anchor('dashboard/detail_keranjang', $keranjang) ?>
                            </li>
                        </ul>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <ul class="na navbar-nav navbar-right">
                            <?php if ($this->session->userdata('username')) { ?>
                                <li>
                                    <div style="color: rgb(39, 179, 203);">Selamat Datang <?php echo $this->session->userdata('username') ?></div>
                                </li>
                                <li class="ml-2"><?php echo anchor('auth/logout', '<span style="color: rgb(39, 179, 203);">Logout</span>') ?></li>
                            <?php } else { ?>
                                <li><?php echo anchor('auth/login', '<span style="color: rgb(39, 179, 203);">Login</span>'); ?></li>

                            <?php } ?>
                        </ul>

                    </div>
                    </ul>

                </nav>
                <!-- End of Topbar -->