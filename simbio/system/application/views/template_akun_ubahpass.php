<div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>
    Ubah password
</div>

<?php if(isset($updated)) : ?>
<p>
    Password Anda berhasil diperbarui.
</p>
<?php else: ?>
<p>
    Silakan mengisi kembali password Anda.
</p>

<?php echo form_open('akun/ubah_password'); ?>

<div class="contact_form" style="float: none">

    <div class="form_subtitle">Data login (untuk login ke SIMBIO)</div>

    <?php echo validation_errors(); ?>

    <!--
    <div class="form_row">
        <label class="contact"><strong>Password lama</strong></label>
        <input type="password" class="contact_input" name="input_password1" value="<?php echo set_value('input_password') ?>"/>
    </div>
    -->

    <div class="form_row">
        <label class="contact"><strong>Password baru</strong></label>
        <input type="password" class="contact_input" name="input_password2" value="<?php echo set_value('input_password') ?>"/>
    </div>

    <div class="form_row">
        <label class="contact"><strong>Konfirmasi password baru</strong></label>
        <input type="password" class="contact_input" name="input_password3" value="<?php echo set_value('input_password') ?>"/>
    </div>

</div>

<div class="contact_form" style="float: none">
    <div class="form_row">
        <label class="contact">&nbsp;</label>
        <input type="submit" value="Simpan perubahan" name="submit" style="font-weight: bold; padding: 4px 15px"/>
    </div>
</div>

<?php echo form_close(); ?>

<?php endif; ?>