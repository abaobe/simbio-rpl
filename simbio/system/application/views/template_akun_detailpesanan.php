<div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>
    <?php echo $judul ?>
</div>

<p>Berikut ini produk yang Anda pesan.</p>

<table class="cart_table">

    <tr class="cart_title">
        <th>Produk</th>
        <th style="text-align:right">Harga</th>
        <th>Jumlah</th>
        <th style="text-align:right">Subtotal</th>
    </tr>

    <?php $i = 1; $total = 0; ?>

    <?php foreach ($daftar_produk_pesanan as $items): ?>

    <tr>
        <td>
            <!--<?php echo anchor("produk/detail/{$items['id_produk']}/".url_title($items['nama_produk']), img(array('src' => "images/photos/{$items['id_produk']}", 'width' => '60', 'height' => '50', 'border' => '0', 'class' => 'cart_thumb'))) ?>-->
            <strong>
                <?php echo anchor("produk/detail/{$items['id_produk']}/".url_title($items['nama_produk']), $items['nama_produk']) ?>
            </strong>
         </td>
        <td style="text-align:right">Rp <?php echo $this->cart->format_number($items['harga_produk']); ?></td>
        <td style="text-align:center">
            <?php echo $items['jumlah_dipesan']; ?>
        </td>
        <td style="text-align:right">Rp <?php echo $this->cart->format_number($items['total_harga']); ?></td>
    </tr>

    <?php $i++; $total += $items['total_harga'] ?>

    <?php endforeach; ?>

    <tr>
        <td colspan="2"></td>
        <td class="right"><strong>Total</strong></td>
        <td class="right" style="text-align:right"><strong>Rp <?php echo $this->cart->format_number($total); ?></strong></td>
    </tr>

</table>
