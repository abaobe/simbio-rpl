<?php if($this->session->userdata('id_user')) : ?>
<div class="cart">
    Anda login sebagai <strong><?php echo $this->session->userdata('nama_lengkap') ?></strong>

    <br/>
    <span class="red"><strong><?php echo anchor('akun', 'Akun saya') ?></strong></span>
    |
    <span class="red"><strong><?php echo anchor('akun/logout', 'Logout') ?></strong></span>

</div>

<br/>
<?php endif; ?>

<div class="cart">
    <div class="title"><span class="title_icon"><img src="images/cart2.jpg" alt="" title="" /></span>Keranjang</div>
    <div>
        <?php echo $this->cart->total_items(); ?> item

        <ul>
        <?php foreach ($this->cart->contents() as $items): ?>
            <li>
                <?php echo $items['qty']; ?> x
                <?php echo anchor("produk/detail/{$items['id']}/".url_title($items['name']), $items['name']) ?>
            </li>
        <?php endforeach; ?>
        </ul>
        
        <span class="red">TOTAL: Rp <?php echo ($this->cart->total()) ? $this->cart->format_number($this->cart->total()) : "0"; ?></span>
        <br/>
        <span class="red"><strong><?php echo anchor('keranjang_belanja', 'Lihat belanjaan &raquo;') ?></strong></span>
    </div>

</div>

<?php if($this->session->userdata('id_user')) : ?>
<div class="right_box">

    <div class="title"><span class="title_icon"><img src="images/promosi.jpg" alt="" title="" /></span>Promosi</div>

    <?php

    $produk_diskon = $this->M_produk->get_produk_berdiskon();

    foreach ($produk_diskon as $produk) :

    ?>
    <div class="new_prod_box">
        <?php echo anchor("produk/detail/{$produk['id_produk']}/".url_title($produk['nama_produk']), $produk['nama_produk']) ?>
        <div class="new_prod_bg">
            <span class="new_icon"><img src="images/promo_icon.gif" alt="" title="" /></span>
            <br style="line-height: 8px"/>
            <?php echo anchor("produk/detail/{$produk['id_produk']}/".url_title($produk['nama_produk']), img(array('src' => "images/photos/{$produk['gambar_produk_1']}", 'width' => '87', 'height' => '93', 'border' => '0'))) ?>
        </div>
    </div>
    <?php endforeach; ?>

</div>
<?php endif; ?>

<div class="right_box">

    <div class="title"><span class="title_icon"><img src="images/promosi.jpg" alt="" title="" /></span>Produk terlaris</div>

    <?php

    $produk_terlaris = $this->M_statistik->get_produk_terlaris(3);

    foreach ($produk_terlaris as $produk) :

    ?>
    <div class="new_prod_box">
        <?php echo anchor("produk/detail/{$produk['id_produk']}/".url_title($produk['nama_produk']), $produk['nama_produk']) ?>
        <div class="new_prod_bg">
           <br style="line-height: 8px"/>
           <?php echo anchor("produk/detail/{$produk['id_produk']}/".url_title($produk['nama_produk']), img(array('src' => "images/photos/{$produk['gambar_produk_1']}", 'width' => '87', 'height' => '93', 'border' => '0'))) ?>
        </div>
    </div>
    <?php endforeach; ?>

</div>

<div class="right_box">

    <div class="title"><span class="title_icon"><img src="images/promosi.jpg" alt="" title="" /></span>Statistik 2010</div>

    <?php

    $daftar_pemesanan = $this->M_statistik->get_pemesanan_per_bulan('2010');
    $bulan = array('', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');

    echo "<ul>";
    foreach ($daftar_pemesanan as $stat)
    {
        echo "<li>";
        echo "Bulan " . $bulan[$stat['bulan']] . " : <br/>";
        echo "<strong>" . $stat['jumlah'] . " pemesanan</strong>";
        echo "</li>";
    }
    echo "</ul>";

    ?>

</div>



