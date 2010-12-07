<div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>
<?php echo $judul_konten ?>
</div><br/>

<p>
    Selamat datang di SIMBIO (Sistem Informasi Bibit Tanaman Hias Online).
    Di sini Anda dapat melihat artikel-artikel mengenai tanaman hias, melihat informasi tanaman hias,
    serta dapat memesannya langsung secara online.
</p>

<div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>
5 Produk terbaru
</div><br/>

<?php foreach ($produk_terbaru as $produk) : ?>

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
                <?php echo anchor("keranjang_belanja/tambah/{$produk['id_produk']}", img(array('src' => "images/order_now.gif", 'border' => '0')), array('class' => 'more')) ?>
                <div class="clear"></div>
            </div>

            <div class="box_bottom"></div>
        </div>
        <div class="clear"></div>
    </div>

<?php endforeach; ?>

<div class="feat_prod_box">
    <?php echo anchor("produk", "Semua produk &raquo;", array('style' => 'font-size: 15px; color: #990000;')) ?>
</div>


<div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>
5 Artikel terbaru
</div><br/>

<?php $artikel = $artikel_terbaru[0]; // yang pertama, dibuka lebar ?>

<div class="article_title">
    <?php echo anchor("artikel/detail/{$artikel['id_artikel']}/".url_title($artikel['judul_artikel']), $artikel['judul_artikel']); ?>
</div>

<div class="articles">
    <?php

    // beberapa kalimat awal isi
    echo $this->typography->auto_typography(word_limiter(strip_tags($artikel['isi_artikel'], '<img>'), 70), TRUE);
    echo "<br/>";
    // link "Selengkapnya..."
    echo anchor("artikel/detail/{$artikel['id_artikel']}/".url_title($artikel['judul_artikel']), 'Selengkapnya...', array('class' => 'more'));

    ?>

    <div class="clear"></div>
</div>

<?php

// yang pertama udah di atas, maka buang aja
array_shift($artikel_terbaru);

foreach ($artikel_terbaru as $artikel)
{
    echo "<div class='articles article_title'>";
    echo anchor("artikel/detail/{$artikel['id_artikel']}/".url_title($artikel['judul_artikel']), $artikel['judul_artikel']);
    echo "</div>";

}

?>

<div class="feat_prod_box">
    <?php echo anchor("artikel", "Semua artikel &raquo;", array('style' => 'font-size: 15px; color: #990000;')) ?>
</div>