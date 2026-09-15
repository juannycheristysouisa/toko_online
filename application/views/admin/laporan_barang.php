<div class="container-fluid">

    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-12">
            <?php if (validation_errors()) { ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
            <?php } ?>
            <?= $this->session->flashdata('pesan'); ?>
            <a href="<?= base_url('admin/laporan_barang/cetak_laporan_barang'); ?>" class="btn btn-info mb-3"><i
                    class="fas fa-print"></i> Print</a>
            <a href="<?= base_url('admin/laporan_barang/laporan_barang_pdf'); ?>" class="btn btn-warning mb-3"><i
                    class="far fa-file-pdf"></i> Download Pdf</a>
            <a href="<?= base_url('admin/laporan_barang/export_excel'); ?>" class="btn btn-success mb-3"><i
                    class="far fa-file-excel"></i> Export ke Excel</a>
            <table class="table table-hover">
                <thead>
                    <tr>

                        <table class="table table-bordered">
                            <tr>
                                <th>NO</th>
                                <th>NAMA BARANG</th>
                                <th>KETERANGAN</th>
                                <th>KATEGORI</th>
                                <th>HARGA</th>
                                <th>STOK</th>
                            </tr>

                            <?php
                            $no = 1;
                            foreach ($barang as $brg) : ?>

                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $brg->nama_brg ?></td>
                                <td><?php echo $brg->keterangan ?></td>
                                <td><?php echo $brg->kategori ?></td>
                                <td><?php echo $brg->harga ?></td>
                                <td><?php echo $brg->stok ?></td>
                            </tr>

                            <?php endforeach; ?>

                        </table>
        </div>