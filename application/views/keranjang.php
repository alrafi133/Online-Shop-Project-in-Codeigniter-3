<div class="container-fluid">
    <h4>Keranjang Belanja</h4>
    <table class="table table-bordered table-striped table-hover text-center">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Sub-Total</th>
        </tr>

        <?php
            $no = 1;
            foreach($this->cart->contents() as $items) : ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?= $items['name'] ?></td>
            <td><?= $items['qty'] ?></td>
            <td>Rp. <?= number_format($items['price'], 0, ',','.') ?></td>
            <td>Rp. <?= number_format($items['subtotal'], 0, ',','.') ?></td>
        </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="4"></td>
            <td>Rp. <?php echo number_format($this->cart->total(), 0, ',','.')  ?></td>
        </tr>
    </table>

    <div class="align-right">
        <a href="<?php echo base_url('dashboard/hapus_keranjang') ?>">
            <div class="btn btn-sm btn-danger">Hapus Keranjang</div>
        </a>
        <a href="<?php echo base_url('welcome') ?>">
            <div class="btn btn-sm btn-primary">Lanjutkan Belanja</div>
        </a>
        <a href="<?php echo base_url('dashboard/pembayaran') ?>">
            <div class="btn btn-sm btn-success">Pembayaran</div>
        </a>
    </div>
</div>