<table border=5>
    <tr>
        <th>Barang Yang di Pesan :</th>
    </tr>
    <tr>
        <td>
            <table border=5>
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
        </td>
    </tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>
    <tr>
        <td align="center">
            <?= md5(date('d M Y H:i:s')); ?>
        </td>
    </tr>
</table>