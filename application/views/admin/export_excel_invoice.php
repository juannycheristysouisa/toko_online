<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$title.xls");
header('Pragma: no-cache');
header("Expires: 0");
?>

<h3>
    <center>Laporan Invoice Family Furniture</center>
</h3>
<br />
<table class="table table-bordered table-hover table-striped">
    <tr>
        <th>Id Invoice</th>
        <th>Nama Pemesan</th>
        <th>Alamat Pengiriman</th>
        <th>Tanggal Pemesanan</th>
        <th>Batas Pembayaran</th>
    </tr>

    <?php foreach ($invoice as $inv) : ?>
        <tr>
            <td><?php echo $inv->id ?></td>
            <td><?php echo $inv->nama ?></td>
            <td><?php echo $inv->alamat ?></td>
            <td><?php echo $inv->tgl_pesan ?></td>
            <td><?php echo $inv->batas_bayar ?></td>
        </tr>

    <?php endforeach; ?>

</table>