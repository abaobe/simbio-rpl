<div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>
    Registrasi Akun
</div>

<p>
    Silakan mengisi data diri Anda untuk registrasi akun di SIMBIO.
    <strong>Semua kolom harus diisi.</strong>
</p>

<?php echo form_open('akun/registrasi'); ?>

<div class="contact_form" style="float: none">

    <div class="form_subtitle">Data diri (untuk identitas pengiriman)</div>

    <?php echo validation_errors(); ?>

    <div class="form_row">
        <label class="contact"><strong>Nama</strong></label>
        <input type="text" class="contact_input" name="input_nama" value="<?php echo set_value('input_nama') ?>"/>
    </div>

    <div class="form_row">
        <label class="contact"><strong>Alamat</strong></label>
        <input type="text" class="contact_input" name="input_alamat" value="<?php echo set_value('input_alamat') ?>"/>
    </div>

    <div class="form_row">
        <label class="contact"><strong>Kode pos</strong></label>
        <input type="text" class="contact_input" name="input_kodepos" value="<?php echo set_value('input_kodepos') ?>"/>
    </div>

    <div class="form_row">
        <label class="contact"><strong>Telepon</strong></label>
        <input type="text" class="contact_input" name="input_telepon" value="<?php echo set_value('input_telepon') ?>"/>
    </div>

    <div class="form_row">
        <label class="contact"><strong>No. KTP</strong></label>
        <input type="text" class="contact_input" name="input_nktp" value="<?php echo set_value('input_nktp') ?>"/>
    </div>

    <div class="form_row">
        <label class="contact"><strong>Email</strong></label>
        <input type="text" class="contact_input" name="input_email" value="<?php echo set_value('input_email') ?>" />
    </div>

</div>

<div class="contact_form" style="float: none">

    <div class="form_subtitle">Data login (untuk login ke SIMBIO)</div>

    <p>Username dan password minimal 6 karakter</p>

    <div class="form_row">
        <label class="contact"><strong>Username</strong></label>
        <input type="text" class="contact_input" name="input_username" value="<?php echo set_value('input_username') ?>"/>
    </div>

    <div class="form_row">
        <label class="contact"><strong>Password</strong></label>
        <input type="password" class="contact_input" name="input_password" value="<?php echo set_value('input_password') ?>"/>
    </div>
</div>

<div class="contact_form" style="float: none">
    <div class="form_row">
        <label class="contact">&nbsp;</label>
        <input type="submit" value="Registrasi" name="submit" style="font-weight: bold; padding: 4px 15px"/>
    </div>
</div>

<?php echo form_close(); ?>