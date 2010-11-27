<div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>
<?php echo $artikel['judul_artikel'] ?>
</div>

<p class="articles_date">Ditulis pada tanggal <?php echo date('d M Y, H:i:s',strtotime($artikel['tanggal_posting'])) ?></p>

<div class="articles">
    <?php

    // beberapa kalimat awal isi
    echo $this->typography->auto_typography($artikel['isi_artikel'], TRUE);

    ?>

    <div class="clear"></div>
</div>

<div class="clear"></div>