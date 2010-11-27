<div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>
    <?php echo $judul_konten ?>
</div>

<?php if ($kategori == 'error') : ?>
        <h3>Kesalahan: kata kunci pencarian harus diisi</h3>

        <p><strong>
            <a href="javascript:history.go(-1);">Klik di sini</a> untuk kembali.
        </strong></p>
<?php elseif ($kategori == 'produk') : ?>

            <h3>Pencarian produk: <?php echo $kata_kunci ?></h3>

            <p><strong>Ditemukan <?php echo count($hasil_cari) ?> hasil</strong></p><br/>
            <?php foreach ($hasil_cari as $produk) : ?>

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

<?php elseif ($kategori == 'artikel') : ?>

                <h3>Pencarian artikel: <?php echo $kata_kunci ?></h3>

                <?php

                    echo "<p><strong>Ditemukan " . count($hasil_cari) . " hasil</strong></p><br/>";
                    foreach ($hasil_cari as $artikel)
                    {
                        echo "<div class='articles article_title'>";
                        echo anchor("artikel/detail/{$artikel['id_artikel']}/".url_title($artikel['judul_artikel']), $artikel['judul_artikel']);
                        echo "</div>";
                    
                    }
                ?>

<?php endif; ?>