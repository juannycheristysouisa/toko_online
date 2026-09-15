<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$title.xls");
header('Pragma: no-cache');
header("Expires: 0");
?>

<h3>
    <center>Laporan Data Barang Family Furniture</center>
</h3>
<br />
<table class="table-data">
    <thead>
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
        foreach ($barang as  $brg) : ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $brg->nama_brg ?></td>
                <td><?php echo $brg->keterangan ?></td>
                <td><?php echo $brg->kategori ?></td>
                <td><?php echo $brg->harga ?></td>
                <td><?php echo $brg->stok ?></td>
                <td>
            </tr>

        <?php endforeach; ?>
</table>