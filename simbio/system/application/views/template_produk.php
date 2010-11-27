<div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>
<?php echo $judul_konten ?>
</div>

<br/>

<p>Berikut ini daftar semua produk yang tersedia di SIMBIO. Klik pada masing-masing produk untuk melihat detailnya.</p>

<?php foreach ($daftar_produk as $produk) : ?>

    <div class="feat_prod_box">

        <div class="prod_img prod_images">
            <?php echo anchor("produk/detail/{$produk['id_produk']}/".url_title($produk['nama_produk']), img(array('src' => "images/photos/{$produk['gambar_produk_1']}", 'width' => '115', 'height' => '100', 'border' => '0'))) ?>
        </div>

        <div class="prod_det_box">
            <div class="box_top"></div>
            <div class="box_center">
                <div class="prod_title"><?php echo anchor("produk/detail/{$produk['id_produk']}/".url_title($produk['nama_produk']), $produk['nama_produk']) ?></div>
                <br/>
                <div class="price"><strong>Harga:</strong> <span class="red">Rp <?php echo number_format($produk['harga_produk'], 0, ',', '.') ?></span></div>
                <div class="price"><strong>Stok:</strong> <span class="red"><?php echo $produk['stok_produk'] ?> buah</span></div>
                <a href="#" class="more"><img src="images/order_now.gif" alt="" title="" border="0" /></a>
                <div class="clear"></div>
            </div>

            <div class="box_bottom"></div>
        </div>
        <div class="clear"></div>
    </div>

<?php endforeach; ?>
