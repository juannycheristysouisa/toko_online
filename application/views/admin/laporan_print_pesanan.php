<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <style type="text/css">
        .table-data {
            width: 100%;
            border-collapse: collapse;
        }

        .table-data tr th,
        .table-data tr td {
            border: 1px solid black;
            font-size: 11pt;
            font-family: Verdana;
            padding: 10px 10px 10px 10px;
        }

        h3 {
            font-family: Verdana;
        }
    </style>

    <h3>
        <center>Laporan Data Pesanan Family Furniture</center>
    </h3>
    <br />
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

    <script type="text/javascript">
        window.print();
    </script>

</body>

</html>