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
            <a href="<?= base_url('admin/laporan_pesanan/cetak_laporan_pesanan'); ?>" class="btn btn-primary mb-3"><i class="fas fa-print"></i> Print</a>
            <a href="<?= base_url('admin/laporan_pesanan/laporan_pesanan_pdf'); ?>" class="btn btn-warning mb-3"><i class="far fa-file-pdf"></i> Download Pdf</a>
            <a href="<?= base_url('admin/laporan_pesanan/export_excel'); ?>" class="btn btn-success mb-3"><i class="far fa-file-excel"></i> Export ke Excel</a>
            <table class="table table-hover">
                <thead>
                    <tr>


        </div>
        <table class="table table-bordered table-hover table-striped">

            <tr>
                <th>ID BARANG</th>
                <th>NAMA PRODUK</th>
                <th>JUMLAH PESANAN</th>
                <th>HARGA SATUAN</th>
                <th>SUB-TOTAL</th>
            </tr>

            <?php
            $total = 0;
            foreach ($pesanan as $psn) :
                $subtotal = $psn->jumlah * $psn->harga;
                $total += $subtotal;
            ?>

                <tr>
                    <td><?php echo $psn->id_brg  ?></td>
                    <td><?php echo $psn->nama_brg  ?></td>
                    <td><?php echo $psn->jumlah  ?></td>
                    <td><?php echo number_format($psn->harga, 0, ',', '.') ?></td>
                    <td><?php echo number_format($subtotal, 0, ',', '.')  ?></td>
                </tr>

            <?php endforeach; ?>

            <tr>
                <td colspan="4" align="right">Grand Total</td>
                <td align="right">Rp. <?php echo number_format($total, 0, ',', '.')  ?></td>
            </tr>

        </table>