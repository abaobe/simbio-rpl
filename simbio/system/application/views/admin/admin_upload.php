<h2>Upload Gambar</h2>

Pilih gambar yang akan di-upload (gambar untuk produk):

<br/>
<br/>

<?php echo form_open_multipart('admin/upload_gambar/upload') ?>
    <input type="file" size="40" name="file_gambar"/>
    <input type="submit" name="upload" value="Upload"/>
<?php echo form_close(); ?>


<h2>Daftar Gambar</h2>

Berikut ini gambar yang sudah ada di sistem dan dapat digunakan untuk gambar produk (terurut nama file):

<br/>
<br/>

<?php
    $daftar_gambar = directory_map('images/photos');
    sort($daftar_gambar);
?>

<table width="100%">
    <tr>
        <th>No</th>
        <th>Gambar</th>
        <th>Nama file</th>
        <th></th>
    </tr>
    <?php $i = 1; foreach ($daftar_gambar as $gambar) : ?>
    <tr>
        <td width="20"><?php echo $i; ?></td>
        <td width="150"><img src="images/photos/<?php echo $gambar; ?>" alt="<?php echo $gambar; ?>" title="<?php echo $gambar; ?>" width="150"/></td>
        <td><span style="font-size: 13px"><?php echo $gambar; ?></span></td>
        <td><?php echo anchor('admin/upload_gambar/hapus/' . $gambar, "Hapus", array('onclick' => "if(!confirm('Yakin menghapus?')) return false;")); ?></td>
    </tr>
    <?php $i++; endforeach; ?>
</table>

<br/>
<br/>
<br/>
