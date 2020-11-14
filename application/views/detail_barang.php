<div class="container-fluid">
   <div class="card">
        <h5 class="card-header">Detail Produk</h5>
        <div class="card-body">
           <?php foreach($barang as $brg) : ?>
            <div class="row">
                <div class="col-md-4">
                    <img src="<?= base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top">
                </div>
                <div class="col-md-8">
                    <table class="table">
                        <tr>
                            <td>Nama Produk</td>
                            <td><strong><?= $brg->nama_brg ?></strong></td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td><strong><?= $brg->keterangan ?></strong></td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td><strong><?= $brg->kategori ?></strong></td>
                        </tr>
                        <tr>
                            <td>Stock</td>
                            <td><strong><?= $brg->stock ?></strong></td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td><div class="btn btn-sm btn-primary">Rp. <?= number_format($brg->harga,0,',','.' )?></div></td>
                        </tr>
                    </table>
                    <?php echo anchor('dashboard/tambah_keranjang/'.$brg->id_brg, '<div class="btn btn-sm btn-primary">Tambah Keranjang</div>') ?>
                    <?php echo anchor('dashboard/index/', '<div class="btn btn-sm btn-danger">Kembali</div>') ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
   </div>
</div>