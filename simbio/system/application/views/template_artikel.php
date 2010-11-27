<div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>
<?php echo $judul_konten ?>
</div>

<br/>

<?php foreach ($daftar_artikel as $artikel) : ?>

<div class="article_title">
    <h3>
    <?php echo anchor("artikel/detail/{$artikel['id_artikel']}/".url_title($artikel['judul_artikel']), $artikel['judul_artikel']); ?>
    </h3>
</div>

<p class="articles_date">Ditulis pada tanggal <?php echo date('d M Y, H:i:s',strtotime($artikel['tanggal_posting'])) ?></p>

<div class="articles">
    <?php

    // beberapa kalimat awal isi
    echo $this->typography->auto_typography(word_limiter(strip_tags($artikel['isi_artikel'], '<img>'), 70), TRUE);
    echo "<br/>";
    // link "Selengkapnya..."
    echo anchor("artikel/detail/{$artikel['id_artikel']}/".url_title($artikel['judul_artikel']), 'Selengkapnya...', array('class' => 'more'));

    ?>
    
    <div class="clear"></div>
</div>

<div class="clear"></div>

<?php endforeach; ?>