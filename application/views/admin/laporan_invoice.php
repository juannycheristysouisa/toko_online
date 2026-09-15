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
            <a href="<?= base_url('admin/laporan_invoice/cetak_laporan_invoice'); ?>" class="btn btn-info mb-3"><i class="fas fa-print"></i> Print</a>
            <a href="<?= base_url('admin/laporan_invoice/laporan_invoice_pdf'); ?>" class="btn btn-warning mb-3"><i class="far fa-file-pdf"></i> Download Pdf</a>
            <a href="<?= base_url('admin/laporan_invoice/export_excel'); ?>" class="btn btn-success mb-3"><i class="far fa-file-excel"></i> Export ke Excel</a>
            <table class="table table-hover">
                <thead>
                    <tr>

                        <table class="table table-bordered table-hover table-striped">
                            <tr>
                                <th>Id Invoice</th>
                                <th>Nama Pemesan</th>
                                <th>Alamat Pengiriman</th>
                                <th>Tanggal Pemesanan</th>
                                <th>Batas Pembayaran</th>
                                <th>Aksi</th>
                            </tr>

                            <?php foreach ($invoice as $inv) : ?>
                                <tr>
                                    <td><?php echo $inv->id ?></td>
                                    <td><?php echo $inv->nama ?></td>
                                    <td><?php echo $inv->alamat ?></td>
                                    <td><?php echo $inv->tgl_pesan ?></td>
                                    <td><?php echo $inv->batas_bayar ?></td>
                                    <td><?php echo anchor('admin/invoice/detail/' . $inv->id, '<div class="btn btn-sm btn-warning">Detail</div>') ?></td>
                                </tr>

                            <?php endforeach; ?>

                        </table>
        </div>