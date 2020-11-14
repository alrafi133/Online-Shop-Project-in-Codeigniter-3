<div class="container-fluid">
    <h4>Invoice Pemesanan Produk</h4><br>
    
    <table class="table table-bordered table-hover table-striped text-center">
        <tr>
            <th>Id Invoice</th>
            <th>Nama Pemesan</th>
            <th>Alamat pengiriman</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Pembayaran</th>
            <th>Aksi</th>
        </tr>
        
        <?php foreach($invoice as $inv) : ?>
            <tr>
                <td><?php echo $inv->id ?></td>
                <td><?= $inv->nama ?></td>
                <td><?= $inv->alamat ?></td>
                <td><?= $inv->tgl_pesan ?></td>
                <td><?= $inv->batas_bayar ?></td>
                <td><?php echo anchor('admin/invoice/detail/'.$inv->id, '<div class="btn btn-sm btn-primary">Detail</div></td>')  ?>
            </tr>
        <?php endforeach; ?>
    </table>
</div>