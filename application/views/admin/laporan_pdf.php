<!DOCTYPE html>
<html><head>
        <title></title>
</head><body>
    <h2 style="text-align: center">DAFTAR TABLE BARANG</h2>
    <h2></h2>
<div class="container-fluid">
    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NAMA BARANG</th>
            <th>KETERANGAN</th>
            <th>KATEGORI</th>
            <th>HARGA</th>
            <th>STOK</th>
            <th colspan="3">AKSI</th>
        </tr>
        <?php
        $no = 1;
        foreach($barang as $brg) : ?> 
        <tr>
            <td><?php echo $no++ ?> </td>
            <td><?php echo $brg-> nama_brg ?></td>
            <td><?php echo $brg-> keterangan ?></td>
            <td><?php echo $brg-> kategori ?></td>
            <td><?php echo $brg-> harga ?></td>
            <td><?php echo $brg-> stok ?></td>
            
        </tr>
        <?php endforeach; ?>
    </table>
</div>
</body></html>