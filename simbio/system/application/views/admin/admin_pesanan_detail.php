<h2>Detail pesanan untuk pesanan #<?php echo $id_pesanan; ?> </h2>

<table width="100%">

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
            <strong>
                <?php echo anchor("produk/detail/{$items['id_produk']}/".url_title($items['nama_produk']), $items['nama_produk'], array('target' => '_blank')) ?>
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