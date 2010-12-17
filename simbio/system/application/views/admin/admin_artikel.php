<h2>Manajemen Artikel SIMBIO</h2>

Berikut ini daftar semua artikel yang ada di SIMBIO (terurut tanggal posting terbaru).
Klik "Edit" untuk mengedit informasi artikel maupun menghapusnya.

<br/>
<br/>

<?php echo anchor('admin/artikel/tambah', 'Tambahkan artikel baru &raquo;') ?>

<table width="100%">
    <tr>
        <th>No.</th>
        <th>Judul</th>
        <th>Tanggal posting</th>
        <th></th>
    </tr>
    <?php $i = 1; foreach ($daftar_artikel as $artikel) : ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo anchor("artikel/detail/{$artikel['id_artikel']}/".url_title($artikel['judul_artikel']), $artikel['judul_artikel'], array('target' => '_blank')); ?></td>
        <td><?php echo $artikel['tanggal_posting']; ?></td>
        <td>
            <?php echo anchor('admin/artikel/edit/' . $artikel['id_artikel'], "Edit"); ?>
        </td>
    </tr>
    <?php $i++; endforeach; ?>

</table>

<br/>
<br/>
<br/>
