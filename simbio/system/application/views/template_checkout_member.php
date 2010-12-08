<div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>
Checkout
</div>

<p>
    Berikut ini data diri Anda. Bila ingin diubah (misalnya dikirimkan ke alamat lain), langsung edit pada kolom yang dimaksud.
</p>

<?php echo form_open('checkout/member'); ?>

<div class="contact_form" style="float: none">

    <div class="form_subtitle">Data pengiriman</div>


        <?php echo validation_errors(); ?>

        <div class="form_row">
            <label class="contact"><strong>* Nama</strong></label>
            <input type="text" class="contact_input" name="input_nama" value="<?php echo $user_data['nama_lengkap'] ?>" id="input_nama"/>
        </div>

        <div class="form_row">
            <label class="contact"><strong>* Alamat</strong></label>
            <input type="text" class="contact_input" name="input_alamat" value="<?php echo $user_data['alamat'] ?>" id="input_alamat"/>
        </div>

        <div class="form_row">
            <label class="contact"><strong>* Kode pos</strong></label>
            <input type="text" class="contact_input" name="input_kodepos" value="<?php echo $user_data['kode_pos'] ?>" id="input_kodepos"/>
        </div>

        <div class="form_row">
            <label class="contact"><strong>* Telepon</strong></label>
            <input type="text" class="contact_input" name="input_telepon" value="<?php echo $user_data['no_telepon'] ?>" id="input_telepon"/>
        </div>

        <div class="form_row">
            <label class="contact"><strong>* No. KTP</strong></label>
            <input type="text" class="contact_input" name="input_nktp" value="<?php echo $user_data['no_ktp'] ?>" id="input_nktp"/>
        </div>

        <div class="form_row">
            <label class="contact"><strong>* Email</strong></label>
            <input type="text" class="contact_input" name="input_email" value="<?php echo $user_data['email'] ?>" id="input_email" />
        </div>

        <div class="form_row">
            <label class="contact">&nbsp;</label>
            * = harus diisi
        </div>

</div>

<br/>
<p>
    Berikut ini produk yang akan Anda pesan (keranjang belanja):
</p>

<table class="cart_table">

    <tr class="cart_title">
        <th>Produk</th>
        <th style="text-align:right">Harga</th>
        <th>Jumlah</th>
        <th style="text-align:right">Subtotal</th>
    </tr>

    <?php $i = 1; ?>

    <?php foreach ($this->cart->contents() as $items): ?>

    <tr>
        <td>
            <?php echo anchor("produk/detail/{$items['id']}/".url_title($items['name']), img(array('src' => "images/photos/{$items['pic']}", 'width' => '60', 'height' => '50', 'border' => '0', 'class' => 'cart_thumb'))) ?>
            <br/>
            <strong>
                <?php echo anchor("produk/detail/{$items['id']}/".url_title($items['name']), $items['name']) ?>
            </strong>
         </td>
        <td style="text-align:right">Rp <?php echo $this->cart->format_number($items['price']); ?></td>
        <td style="text-align:center">
            <?php echo $items['qty']; ?>
        </td>
        <td style="text-align:right">Rp <?php echo $this->cart->format_number($items['subtotal']); ?></td>
    </tr>

    <?php $i++; ?>

    <?php endforeach; ?>

    <tr>
        <td colspan="2"><?php echo anchor("keranjang_belanja", "Edit keranjang belanja &raquo;", array('style' => 'font-weight: bold; color:#990000')) ?></td>
        <td class="right"><strong>Total</strong></td>
        <td class="right" style="text-align:right"><strong>Rp <?php echo $this->cart->format_number($this->cart->total()); ?></strong></td>
    </tr>

</table>

<br/>

<div class="contact_form" style="float: none">

    <div class="form_subtitle">Cara pembayaran</div>

    <ul style="list-style: none;">
        <li>
            <input type="radio" name="metode_bayar" value="cod" id="cod" checked="checked"/>
            <label for="cod">Cash on delivery</label>
        </li>
        <li>
            <input type="radio" name="metode_bayar" value="transfer" id="transfer"/>
            <label for="transfer">Transfer</label>
        </li>
        <li style="display: none">
            <div class="form_row">
                <label class="contact"><strong>Bank</strong></label>
                <input type="text" class="contact_input" name="input_bank" value="<?php echo set_value('input_bank') ?>" style="width: 200px;"/>
            </div>
            <div class="form_row">
                <label class="contact"><strong>No. rek.</strong></label>
                <input type="text" class="contact_input" name="input_rekening" value="<?php echo set_value('input_rekening') ?>" style="width: 200px;"/>
            </div>
            <div class="form_row">
                <label class="contact"><strong>Atas nama</strong></label>
                <input type="text" class="contact_input" name="input_atas_nama" value="<?php echo set_value('input_atas_nama') ?>" style="width: 200px;"/>
            </div>
        </li>
    </ul>

</div>

<br/>

<table class="cart_table">
        <tr>
            <td>Dengan mengklik tombol kirim, Anda menyetujui semua peraturan pemesanan. Klik untuk melanjutkan.</td>
            <td style="text-align: right"><input type="submit" value="KIRIM" name="submit" style="font-weight: bold; padding: 8px 15px"/></td>
        </tr>
</table>

<?php echo form_close(); ?>