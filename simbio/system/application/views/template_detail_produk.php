<div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>
    <?php echo $judul_konten ?>
</div>

<div class="feat_prod_box_details">

    <div class="prod_img prod_images">
        <?php echo img(array('src' => "images/photos/{$produk['gambar_produk_1']}", 'width' => '115', 'height' => '100', 'border' => '0')) ?>
    </div>

    <div class="prod_det_box">
        <div class="box_top"></div>
        <div class="box_center">
            <div class="prod_title"><b>Deskripsi</b></div>
            <?php echo str_replace('<p>', '<p class="details">', $produk['info_produk']) ?>
            <div class="price"><strong>Harga:</strong> <span class="red">Rp <?php echo number_format($produk['harga_produk'], 0, ',', '.') ?></span></div>
            <div class="price"><strong>Stok:</strong> <span class="red"><?php echo $produk['stok_produk'] ?> buah</span></div>
            <a href="#" class="more"><img src="images/order_now.gif" alt="" title="" border="0" /></a>
            <div class="clear"></div>
        </div>

        <div class="box_bottom"></div>
    </div>
    <div class="clear"></div>
</div>

<div id="demo" class="demolayout">

    <ul id="demo-nav" class="demolayout">
        <li><a class="active" href="#" onclick="return false;">Foto-foto lain</a></li>
    </ul>

    <div class="tabs-container">

        <div style="display: block;" class="tab" id="tab1">
            <p class="more_details">
                <?php

                echo img(array('src' => "images/photos/{$produk['gambar_produk_1']}", 'border' => '0', 'class' => 'prod_images'));
                if (!empty($produk['gambar_produk_2']))
                {
                    echo "<br/>";
                    echo img(array('src' => "images/photos/{$produk['gambar_produk_2']}", 'border' => '0', 'class' => 'prod_images'));
                }
                if (!empty($produk['gambar_produk_3']))
                {
                    echo "<br/>";
                    echo img(array('src' => "images/photos/{$produk['gambar_produk_3']}", 'border' => '0', 'class' => 'prod_images'));
                }
                
                ?>
            </p>
        </div>


        <div class="clear"></div>
    </div>

</div>
