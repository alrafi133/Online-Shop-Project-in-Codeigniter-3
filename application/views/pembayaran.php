<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php   
                        $grand_total = 0;
                        if($keranjang = $this->cart->contents())
                        {
                            foreach($keranjang as $item)
                            {
                                $grand_total = $grand_total + $item['subtotal'];
                            }
                        
                        echo "<h4>Total Belanja Anda: Rp. ".number_format($grand_total, 0, ',','.');
                    ?>
            </div><br><br>
            <h3>Input Alamat Pengiriman dan Pembayaran</h3>
            
            <form action="<?php echo base_url() ?>.dashboard/proses_pesanan" method="post">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama lengkap Anda" class="form-control">
                </div>
                 <div class="form-group">
                    <label for="alamat">Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="Alamat lengkap Anda" class="form-control">
                </div>
                 <div class="form-group">
                    <label for="no_telp">Nomor Hp</label>
                    <input type="text" name="no_telp" placeholder="Nomor Telepon Anda" class="form-control">
                </div>
                 <div class="form-group">
                    <label>Jasa Pengiriman</label>
                   <select class="form-control">
                       <option value="">JNE</option>
                       <option value="">POST Indonesia</option>
                       <option value="">Tiki</option>
                       <option value="">GoJek</option>
                       <option value="">Grab</option>
                   </select>
                </div>
                <div class="form-group">
                    <label>Pilih Bank</label>
                   <select class="form-control">
                       <option value="">BCA - XXXXXXX</option>
                       <option value="">BNI - XXXXXXX</option>
                       <option value="">BRI - XXXXXXX</option>
                       <option value="">Mandiri - XXXXXXX</option>
                   </select>
                </div>
                
                <button type="submit" class="btn btn-sm btn-primary" class="mb-3">Pesan</button><br><br>
            </form>
            
            <?php } else {
                echo "<h4>Keranjang Belanja Anda Masih Kosong";
            } ?>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>