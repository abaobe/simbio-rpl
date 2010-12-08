<div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>
    Edit profil saya
</div>

<?php if(isset($updated)) : ?>
<p>
    Data Anda berhasil diperbarui.
</p>
<?php else: ?>
<p>
    Silakan mengisi kembali data diri Anda.
    <strong>Semua kolom harus diisi.</strong>
</p>
<?php endif; ?>

<?php echo form_open('akun/edit_profil'); ?>

<div class="contact_form" style="float: none">

    <div class="form_subtitle">Data diri (untuk identitas pengiriman)</div>

    <?php echo validation_errors(); ?>

    <div class="form_row">
        <label class="contact"><strong>Nama</strong></label>
        <input type="text" class="contact_input" name="input_nama" value="<?php echo $user_data['nama_lengkap'] ?>"/>
    </div>

    <div class="form_row">
        <label class="contact"><strong>Alamat</strong></label>
        <input type="text" class="contact_input" name="input_alamat" value="<?php echo $user_data['alamat'] ?>"/>
    </div>

    <div class="form_row">
        <label class="contact"><strong>Kode pos</strong></label>
        <input type="text" class="contact_input" name="input_kodepos" value="<?php echo $user_data['kode_pos'] ?>"/>
    </div>

    <div class="form_row">
        <label class="contact"><strong>Telepon</strong></label>
        <input type="text" class="contact_input" name="input_telepon" value="<?php echo $user_data['no_telepon'] ?>"/>
    </div>

    <div class="form_row">
        <label class="contact"><strong>No. KTP</strong></label>
        <input type="text" class="contact_input" name="input_nktp" value="<?php echo $user_data['no_ktp'] ?>"/>
    </div>

    <div class="form_row">
        <label class="contact"><strong>Email</strong></label>
        <input type="text" class="contact_input" name="input_email" value="<?php echo $user_data['email'] ?>" />
    </div>

</div>

<div class="contact_form" style="float: none">
    <div class="form_row">
        <label class="contact">&nbsp;</label>
        <input type="submit" value="Simpan perubahan" name="submit" style="font-weight: bold; padding: 4px 15px"/>
    </div>
</div>

<?php echo form_close(); ?>
