<div class="container-fluid">
    <h4>Invoice Pemesanan Produk</h4>
    
    <div class="dropdown d-inline">
    <button class="btn btn-sm btn-warning dropdown-toggle mb-3" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        <i class="fa fa-download"></i>Export <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
        <li><a href="<?php echo base_url('admin/invoice/pdf')?>">PDF</a></li>
    </ul>
    </div>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>ID Invoice</th>
            <th>Nama Pemesan</th>
            <th>Alamat Pengiriman</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Pembayaran</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($invoice as $inv): ?>
            <tr>
                <td><?php echo $inv->id ?></td>
                <td><?php echo $inv->nama ?></td>
                <td><?php echo $inv->alamat ?></td>
                <td><?php echo $inv->tgl_pesan ?></td>
                <td><?php echo $inv->batas_bayar ?></td>
                <td><?php echo anchor('admin/invoice/detail/'.$inv->id, '<div class="btn btn-sm btn-primary">Detail</div>') ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>