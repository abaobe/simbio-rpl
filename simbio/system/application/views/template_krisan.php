<div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>
    <?php echo $judul_konten ?>
</div>

<div class="feat_prod_box_details">
    <p class="details">
        Silakan tulis kritik dan saran Anda mengenai segala isi website ini pada kolom di bagian bawah halaman ini.
        Kritik dan saran Anda akan ditampilkan setelah diterima oleh administrator.
    </p>

    <div class="clear"></div>

    <div class="articles">
        <div class="pagination">
        Halaman: <?php echo $page_links; ?>
        </div>
        <div class="clear"></div>
    </div>

    <?php foreach ($daftar_krisan as $krisan) : ?>

        <div class="article_title">
            <h3>
            <?php echo $krisan['nama']; ?>
            </h3>
        </div>

    <p class="articles_date"><?php echo date('d M Y, H:i:s', strtotime($krisan['tanggal_posting'])) ?></p>

    <div class="articles">
        <?php echo $this->typography->auto_typography(strip_tags($krisan['pesan']), TRUE); ?>
        <div class="clear"></div>
    </div>

    <div class="clear"></div>

    <?php endforeach; ?>

    <div class="articles">
        <div class="pagination">
        Halaman: <?php echo $page_links; ?>
        </div>
        <div class="clear"></div>
    </div>

     <?php echo form_open('home/kritik_saran'); ?>

    <div class="contact_form" style="float: none">
        <div class="form_subtitle">Silahkan diisi</div>
        <div class="form_row">
            <label class="contact"><strong>Nama</strong></label>
            <input type="text" class="contact_input" name="input_nama"/>
        </div>

        <div class="form_row">

            <label class="contact"><strong>Email</strong></label>
            <input type="text" class="contact_input" name="input_email" />
        </div>


        <div class="form_row">
            <label class="contact"><strong>Telepon</strong></label>
            <input type="text" class="contact_input" name="input_telepon" />
        </div>


        <div class="form_row">
            <label class="contact"><strong>Alamat</strong></label>
            <input type="text" class="contact_input" name="input_alamat" />
        </div>


        <div class="form_row">
            <label class="contact"><strong>Pesan:</strong></label>
            <textarea class="contact_textarea"  name="input_pesan"></textarea>

        </div>


        <div class="form_row">
            <label class="contact">&nbsp;</label>
            <input type="submit" name="submit" value="Kirim" />
        </div>
    </div>

    <?php echo form_close(); ?>

</div>