<!DOCTYPE html>
<html><head>
        <title></title>
</head><body>
    <h2 style="text-align: center">Laporan invoice</h2>
    <h2> </h2>
    <div class="container-fluid">
    <h4 style="text-align: center">Invoice Pemesanan Produk</h4>
    <h2> </h2>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>ID Invoice  </th>
            <th>Nama Pemesan  </th>
            <th>Alamat Pengiriman  </th>
            <th>Tanggal Pemesanan  </th>
            <th>Batas Pembayaran  </th>
        </tr>

        <?php foreach ($invoice as $inv): ?>
            <tr>
                <td><?php echo $inv->id ?></td>
                <td><?php echo $inv->nama ?></td>
                <td><?php echo $inv->alamat ?></td>
                <td><?php echo $inv->tgl_pesan ?></td>
                <td><?php echo $inv->batas_bayar ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
</body></html>