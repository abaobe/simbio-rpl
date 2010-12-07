<?php $jumlah_produk = $this->cart->total_items(); ?>

<div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>
Keranjang Belanja
</div>

<p class="details">
    Berikut ini daftar produk yang Anda masukkan ke keranjang belanja Anda.
    Anda dapat mengubah jumlah dipesan dengan mengedit pada kolom jumlah, dan klik tombol UPDATE.
</p>

<br/>

<?php echo form_open('keranjang_belanja/update'); ?>

<table class="cart_table">

    <tr class="cart_title">
        <th>Produk</th>
        <th style="text-align:right">Harga</th>
        <th>Jumlah</th>
        <th style="text-align:right">Subtotal</th>
    </tr>

    <?php $i = 1; ?>

    <?php foreach ($this->cart->contents() as $items): ?>

    <?php echo form_hidden($i . '[rowid]', $items['rowid']); ?>

    <tr>
        <td>
            <?php echo anchor("produk/detail/{$items['id']}/".url_title($items['name']), img(array('src' => "images/photos/{$items['pic']}", 'width' => '60', 'height' => '50', 'border' => '0', 'class' => 'cart_thumb'))) ?>
            <br/>
            <strong>
                <?php echo anchor("produk/detail/{$items['id']}/".url_title($items['name']), $items['name']) ?>
            </strong>        
         </td>
        <td style="text-align:right">Rp <?php echo $this->cart->format_number($items['price']); ?></td>
        <td>
            <?php echo form_input(array('name' => $i . '[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?>
            <br/>
            <?php echo anchor('keranjang_belanja/hapus/'.$items['rowid'], "Hapus", array('onclick' => "if(!confirm('Yakin menghapus?')) return false;")); ?>
        </td>
        <td style="text-align:right">Rp <?php echo $this->cart->format_number($items['subtotal']); ?></td>
    </tr>

    <?php $i++; ?>

    <?php endforeach; ?>

    <?php if($jumlah_produk <= 0) : ?>

    <tr>
        <td colspan="4"><strong>Keranjang belanja masih kosong</strong></td>
    </tr>

    <?php else : ?>

    <tr>
        <td colspan="2"><?php echo form_submit('update', 'UPDATE'); ?></td>
        <td class="right"><strong>Total</strong></td>
        <td class="right" style="text-align:right"><strong>Rp <?php echo $this->cart->format_number($this->cart->total()); ?></strong></td>
    </tr>

    <?php endif; ?>

</table>

<?php echo form_close(); ?>

<br/>

<?php if($jumlah_produk > 0) : ?>

<table class="cart_table">
        <tr>
            <td><?php echo anchor('produk', '&laquo; Lanjutkan belanja', array('style' => 'font-size: 15px; font-weight: bold; color:#990000')); ?></td>
            <td style="text-align: right"><?php echo anchor('checkout', 'Ke kasir &raquo;', array('style' => 'font-size: 15px; font-weight: bold; color:#990000')); ?></td>
        </tr>
</table>

<?php endif; ?>