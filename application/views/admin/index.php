<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- row ux-->
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2 bg-primary">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-white text-uppercase mb-1">Jumlah Anggota</div>
                            <div class="h1 mb-0 font-weight-bold text-white"><?= $this->ModelUser->getUserWhere(['role_id' => 1])->num_rows(); ?></div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('user/anggota'); ?>"><i
                                    class="fas fa-users fa-3x text-warning"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2 bg-warning">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-white text-uppercase mb-1">Stok Barang</div>
                            <div class="h1 mb-0 font-weight-bold text-white">
                                <?php
                                $where = ['stok != 0'];
                                $totalstok = $this->model_barang->total(
                                    'stok',
                                    $where
                                );
                                echo $totalstok;
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('tb_barang'); ?>"><i class="fas fa-book fa-3x text-primary"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2 bg-danger">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-white text-uppercase mb-1">Produk Yang Di Pesan</div>
                            <div class="h1 mb-0 font-weight-bold text-white">
                                <?php
                                $where = ['dipesan != 0'];
                                $totaldipesan = $this->Model_invoice->total(
                                    'dipesan',
                                    $where
                                );
                                echo $totaldipesan;
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('tb_invoice'); ?>"><i class="fas fa-user-tag fa-3x text-success"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row ux-->

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- row table-->
        <div class="row">
            <div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2">
                <div class="page-header">
                    <span class="fas fa-users text-primary mt-2 "> Data User</span>
                    <a class="text-danger" href="<?php echo base_url('user/data_user'); ?>"><i class="fas fa-search mt-2 float-right"> Tampilkan</i></a>
                </div>
                <table class="table mt-3">
                    <thead>
                        <th>#</th>
                        <th>Nama Anggota</th>
                        <th>Username</th>
                        <th>Role ID</th>
                        <th>Member Sejak</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($anggota as $a) { ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $a['nama']; ?></td>
                                <td><?= $a['username']; ?></td>
                                <td><?= $a['role_id']; ?></td>
                                <td><?= date('Y', $a['tanggal_input']); ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2">
                <div class="page-header">
                    <span class="fas fa-book text-warning mt-2"> Data Produk</span>
                    <a href="<?= base_url('admin/data_barang'); ?>"><i class="fas fa-search text-primary mt-2 float-right"> Tampilkan</i></a>
                </div>
                <div class="table-responsive">
                    <table class="table mt-3" id="table-datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Produk</th>
                                <th>Keterangan</th>
                                <th>Kategori</th>
                                <th>Harga</th>
                                <th>Stok</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($barang as $brg) { ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $brg->nama_brg ?></td>
                                    <td><?php echo $brg->keterangan ?></td>
                                    <td><?php echo $brg->kategori ?></td>
                                    <td><?php echo $brg->harga ?></td>
                                    <td><?php echo $brg->stok ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!-- end of row table-->