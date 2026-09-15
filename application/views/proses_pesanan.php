<div class="container-fluid">
    <h4>Pesanan Anda</h4>
    <table>
        <tr>
            <td>Barang Yang Ingin Anda Pesan Adalah Sebagai Berikut :</td>
        </tr>

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th>NO</th>
                    <th>Nama Produk</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Sub-Total</th>
                </tr>

                <?php
                $no = 1;
                foreach ($this->cart->contents() as $items) : ?>

                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $items['name'] ?></td>
                        <td><?php echo $items['qty'] ?></td>
                        <td align="right">Rp. <?php echo number_format($items['price'], 0, ',', '.') ?></td>
                        <td align="right">Rp. <?php echo number_format($items['subtotal'], 0, ',', '.')  ?></td>

                    </tr>


                <?php endforeach; ?>

                <tr>
                    <td colspan="4"></td>
                    <td align="right">Rp. <?php echo number_format($this->cart->total(), 0, ',', '.') ?></td>
                </tr>

            </table>

<div align="right">
    <a href="<?php echo base_url() . 'dashboard/exportToPdf/' . $this->session->userdata('id_user'); ?>"><span class="far fa-lg fa-fw fa-file-pdf" style="color: rgb(39, 179, 203);></span> Pdf</a>
    </a>
</div>
</div>